<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\PersonnagesCrudController;
use App\Entity\Admin;
use App\Entity\Informations;
use App\Entity\Personnages;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator)
    {
       
    }
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {

        $url = $this->adminUrlGenerator
            ->setController(PersonnagesCrudController::class)
            ->generateUrl();

            return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Serious Game');
    }

    public function configureMenuItems(): iterable
    {
        // yield MenuItem::linkToDashboard('Accueil', 'fa fa-home');
        yield MenuItem::linkToCrud('Administrateurs', 'fa-solid fa-address-card', Admin::class);
        yield MenuItem::linkToCrud('Personnages', 'fa-solid fa-users-between-lines', Personnages::class);
        yield MenuItem::linkToCrud('Bâtiments', 'fa-solid fa-city', Informations::class);
    }
}

