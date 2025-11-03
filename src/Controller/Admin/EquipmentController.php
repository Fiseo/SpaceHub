<?php

namespace App\Controller\Admin;

use App\Entity\Equipment;
use App\Form\EquipmentType;
use App\Repository\EquipmentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/equipment')] // Toutes les routes du controller seront préfixées de /admin/equipment
final class EquipmentController extends AbstractController
{
    #[Route('/', name: 'app_admin_equipment')]
    public function index(EquipmentRepository $equipmentRepository): Response
    {
        return $this->render('admin/equipment/index.html.twig', [
            'equipments' => $equipmentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_equipment_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $equipment = new Equipment();

        $form = $this->createForm(EquipmentType::class, $equipment);

        // Gérer l'envoi du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($equipment);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_equipment');
        }

        return $this->render('admin/equipment/new.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/edit/{id}', name: 'app_admin_equipment_edit')]
    public function edit(Equipment $equipment, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipmentType::class, $equipment);

        // Gérer l'envoi du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($equipment);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_equipment');
        }

        return $this->render('admin/equipment/edit.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/delete/{id}', name: 'app_admin_equipment_delete')]
    public function delete(Equipment $equipment, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($equipment);
        $entityManager->flush();

        return $this->redirectToRoute('app_admin_equipment');
    }
}
