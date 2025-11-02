<?php

namespace App\Controller;

use App\Repository\PlaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PlaceController extends AbstractController
{

    #[Route('/Place/List/', name: 'app_place_list_show')]
    public function showList(?int $page,PlaceRepository $placeRepository): Response
    {
        if (empty($page)){
            $page = 1;
        }

        return $this->render('lieux/lieux.html.twig', [
            'places' => $placeRepository->findAll(),
            'id' => $page,
        ]);
    }

    #[Route('/place/{slug}', name: 'app_place_show')]
    public function show(string $slug, PlaceRepository $placeRepository): Response
    {
        $place = $placeRepository->findWithEquipments($slug);

        if (!$place) {
            throw $this->createNotFoundException('Place not found');
        }

        $place->load();
        return $this->render('place/place.html.twig', [
            'place' => $place,
        ]);
    }

}
