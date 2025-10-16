<?php

namespace App\Controller;

use App\Repository\PlaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(PlaceRepository $placeRepository): Response
    {
        $places = $placeRepository->findAll();
        dump($places);
        return $this->render('default/home.html.twig', [
            'places' => $places,
        ]);
    }
}
