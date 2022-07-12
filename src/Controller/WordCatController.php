<?php

namespace App\Controller;

use App\Entity\WordCat;
use App\Form\WordCatType;
use App\Repository\WordCatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/word/cat')]
class WordCatController extends AbstractController
{

    #[Route('/', name: 'app_word_cat_index', methods: ['GET'])]
    public function index(WordCatRepository $wordCatRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('word_cat/index.html.twig', [
            'word_cats' => $wordCatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_word_cat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, WordCatRepository $wordCatRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $wordCat = new WordCat();
        $form = $this->createForm(WordCatType::class, $wordCat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $wordCatRepository->add($wordCat, true);

            return $this->redirectToRoute('app_word_cat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('word_cat/new.html.twig', [
            'word_cat' => $wordCat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_word_cat_show', methods: ['GET'])]
    public function show(WordCat $wordCat): Response
    {
        return $this->render('word_cat/show.html.twig', [
            'word_cat' => $wordCat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_word_cat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, WordCat $wordCat, WordCatRepository $wordCatRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(WordCatType::class, $wordCat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $wordCatRepository->add($wordCat, true);

            return $this->redirectToRoute('app_word_cat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('word_cat/edit.html.twig', [
            'word_cat' => $wordCat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_word_cat_delete', methods: ['POST'])]
    public function delete(Request $request, WordCat $wordCat, WordCatRepository $wordCatRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$wordCat->getId(), $request->request->get('_token'))) {
            $wordCatRepository->remove($wordCat, true);
        }

        return $this->redirectToRoute('app_word_cat_index', [], Response::HTTP_SEE_OTHER);
    }
}
