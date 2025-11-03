<?php

namespace App\Controller;

use App\Entity\Equipment;
use App\Entity\Place;
use App\Form\PlaceType;
use App\Repository\PlaceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/place')] // Toutes les routes du controller seront préfixées de /admin/equipment
final class PlaceController extends AbstractController
{

    #[Route('/List', name: 'app_place_list_show')]
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

    #[Route('/new', name: 'app_place_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $place = new Place();

        $form = $this->createForm(PlaceType::class, $place);

        // Gérer l'envoi du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($place);
            $entityManager->flush();

            return $this->redirectToRoute('app_place_list_show');
        }

        return $this->render('place/new.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/{slug}', name: 'app_place_show')]
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
