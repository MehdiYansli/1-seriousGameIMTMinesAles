<?php

namespace App\Controller;

use App\Entity\Personnages;
// use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PersonnagesRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PersonnagesController extends AbstractController
{
    #[Route('/personnages', name: 'app_personnages')]
    public function index(EntityManagerInterface $entityManager): JsonResponse
    {
        $personnages = $entityManager->getRepository(Personnages::class)->findAll();

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PersonnagesController.php',
        ]);
    }
}
