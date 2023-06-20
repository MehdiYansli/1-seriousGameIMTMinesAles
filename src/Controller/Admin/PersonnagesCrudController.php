<?php

namespace App\Controller\Admin;

use App\Entity\Personnages;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PersonnagesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Personnages::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextareaField::new('speakerRole')->setLabel('Role du personnage'),
            IntegerField::new('positionX')->setLabel('Position en X'),
            IntegerField::new('positionY')->setLabel('Position en Y'),
            ChoiceField::new('name')
                ->setLabel('Choix du personnage')
                ->setChoices([
                    'Brune de face' => 'brunette_face',
                    'Brune profil droit' => 'brunette_droite',
                    'Brune profil gauche' => 'brunette_gauche',
                    'Garçon de face' => 'garcon_face',
                    'Garçon profil droit' => 'garcon_droite',
                    'Garçon profil gauche' => 'garcon_gauche',
                    'Fille de face' => 'fille_face',
                    'Fille profil droit' => 'fille_droite',
                    'Fille profil gauche' => 'fille_gauche',
                    'Casque de face' => 'casque_face',
                    'Casque profil droit' => 'casque_droite',
                    'Casque profil gauche' => 'casque_gauche',
                    'Chauve de face' => 'chauve_face',
                    'Chauve profil droit' => 'chauve_droite',
                    'Chauve profil gauche' => 'chauve_gauche',
                    'Papy de face' => 'papy_face',
                    'Papy profil droit' => 'papy_droite',
                    'Papy profil gauche' => 'papy_gauche'
                ]),
            TextareaField::new('text')->setLabel('Texte du personnage'),
            CollectionField::new('choices')->useEntryCrudForm(ChoicesCrudController::class)->renderExpanded(),
            ];
    }
}
