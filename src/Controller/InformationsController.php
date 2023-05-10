<?php

namespace App\Controller;

use App\Entity\Informations;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InformationsController extends AbstractController
{
    #[Route('/informations', name: 'app_informations')]
    public function index(EntityManagerInterface $entityManager): JsonResponse
    {
        $informations = $entityManager->getRepository(Informations::class)->findAll();

        return $this->json([
            'informations' => $informations,
        ]);
    }
}
