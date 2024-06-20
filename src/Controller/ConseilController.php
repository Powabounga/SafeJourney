<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ConseilController extends AbstractController
{
    #[Route('/conseil', name: 'app_conseil')]
    public function index(): Response
    {
        return $this->render('conseil/index.html.twig', [
            'controller_name' => 'ConseilController',
        ]);
    }
}
