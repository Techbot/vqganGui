<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Command\FrameFactory;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\FrameRepository;

class MainController extends AbstractController{

    public function __construct(private FrameRepository      $frames)
    {
    }
    #[Route(path: "/all", name: "all", methods: ["GET"])]
    function all(): Response
    {
        $data = $this->posts->findAll();
        //$x = Extract::FrameExtract($data[0]);
        $bob =  $data[1]->getTEXT();
        foreach ($data as $frame){
            $frames[]=$frame->asArray();
        }
        return $this->json($frames);
    }

    #[Route(path: "/", name: "ball", methods: ["GET"])]
    function two(): Response
    {

     //   $this->denyAccessUnlessGranted('ROLE_USER');


        $data = $this->frames->findAll();
        rsort($data);
        foreach ($data as $frame){
            $frames[]=$frame->asArray();
        }
        $number=4;
       // $data = [$post1->asArray(), $post2->asArray()];
       //  return new Response("<html><body>Lucky number: '.$number.'</body></html>");
       //return $this->json($data, 200, ["Content-Type" => "application/json"]);
        return $this->render('base/home.html.twig', [
            "datalist"=>$frames
        ]);
    }

    #[Route('/main', name: 'app_login22222', methods: ["GET"])]
    public function index(): Response
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

}
