<?php

namespace App\Controller;

use App\Entity\Frame;
use App\Form\Frame1Type;
use App\Repository\FrameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/frame')]
class FrameController extends AbstractController
{
    #[Route('/', name: 'app_frame_index', methods: ['GET'])]
    public function index(FrameRepository $frameRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('frame/index.html.twig', [
            'frames' => $frameRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_frame_new', methods: ['GET', 'POST'])]
    public function new(Request $request, FrameRepository $frameRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $frame = new Frame();
        $form = $this->createForm(Frame1Type::class, $frame);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $frameRepository->add($frame, true);

            return $this->redirectToRoute('app_frame_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('frame/new.html.twig', [
            'frame' => $frame,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_frame_show', methods: ['GET'])]
    public function show(Frame $frame): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('frame/show.html.twig', [
            'frame' => $frame,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_frame_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Frame $frame, FrameRepository $frameRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(Frame1Type::class, $frame);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $frameRepository->add($frame, true);

            return $this->redirectToRoute('app_frame_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('frame/edit.html.twig', [
            'frame' => $frame,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_frame_delete', methods: ['POST'])]
    public function delete(Request $request, Frame $frame, FrameRepository $frameRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        if ($this->isCsrfTokenValid('delete'.$frame->getId(), $request->request->get('_token'))) {
            $frameRepository->remove($frame, true);
        }

        return $this->redirectToRoute('app_frame_index', [], Response::HTTP_SEE_OTHER);
    }
}
