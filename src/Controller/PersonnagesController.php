<?php

namespace App\Controller;

use App\Repository\PersonnagesRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PersonnagesController extends AbstractController
{
    #[Route('/personnages', name: 'app_personnages')]
    public function index(EntityManagerInterface $entityManager): JsonResponse
    {
        $personnages = $entityManager->getRepository(PersonnagesRepository::class)->findAll();

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PersonnagesController.php',
        ]);
    }
}
