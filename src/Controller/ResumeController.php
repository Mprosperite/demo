<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResumeController extends AbstractController
{
    #[Route('/resume', name: 'app_resume')]
    public function index(): Response
    {
        return $this->render('pages/resume/index.html.twig', [
            'controller_name' => 'ResumeController',
        ]);
    }
}
