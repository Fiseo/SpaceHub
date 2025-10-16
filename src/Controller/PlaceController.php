<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PlaceRepository;

final class PlaceController extends AbstractController
{
    #[Route('/place/{id}}', name: 'app_place')]
    public function show(string $id, PlaceRepository $placeRepository): Response
    {
        $place = $placeRepository->find($id);

        if ($place === null) {
            throw $this->createNotFoundException('Place not found');
        }

        return $this->render('place/place.html.twig', [
            'controller_name' => 'PlaceController',
            'id' => $id,
            'place' => $place
        ]);
    }
}
