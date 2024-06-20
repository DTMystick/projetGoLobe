<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DestinyController extends AbstractController
{
    #[Route('/destiny', name: 'app_destiny')]
    public function index(): Response
    {
        return $this->render('destiny/index.html.twig', [
            'controller_name' => 'DestinyController',
        ]);
    }
}
