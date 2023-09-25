<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexesController extends AbstractController
{
    #[Route('/indexes', name: 'app_indexes')]
    public function index(): Response
    {
        return $this->render('indexes/index.html.twig', [
            'controller_name' => 'IndexesController',
        ]);
    }
}
