<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }


    #[Route('/home', name: 'home')]
    public function home(): Response
    {
        return $this->render('base/home.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }


    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('base/contact.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }

    #[Route('/project', name: 'project')]
    public function project(): Response
    {
        return $this->render('base/project.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }



    #[Route('/resume', name: 'resume')]
    public function resume(): Response
    {
        return $this->render('base/resume.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
}
