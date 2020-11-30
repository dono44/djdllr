<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecentController extends AbstractController
{
    /**
     * @Route("/recent", name="recent.index")
     * @return Response
     */
    public function index(): Response
    {
        return $this -> render('recent/index.html.twig');
    }
}