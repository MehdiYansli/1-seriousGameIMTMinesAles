<?php

namespace App\Controller\Admin;

use App\Entity\Informations;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InformationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Informations::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            IntegerField::new('positionX')->setLabel('Position en X'),
            IntegerField::new('positionY')->setLabel('Position en Y'),
            ChoiceField::new('board')
            ->setLabel('Choix du panneau')
            ->setChoices([
            'Grand panneau' => 'big_board',
            'Petit panneau' => 'small_board',]),
            TextareaField::new('text')->setLabel('Texte du bâtiment'),
        ];
    }
    
}
