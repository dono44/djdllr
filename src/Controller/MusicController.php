<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MusicController extends AbstractController
{
    /**
     * @Route("/music", name="music.index")
     * @return Response
     */
    public function index(): Response
    {
        return $this -> render('music/index.html.twig');
    }
}