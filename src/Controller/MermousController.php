<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MermousController extends AbstractController
{
    #[Route('/mermous', name: 'app_mermous')]
    public function index(): Response
    {
        return $this->render('mermous/index.html.twig', [
            'controller_name' => 'MermousController',
        ]);
    }
}
