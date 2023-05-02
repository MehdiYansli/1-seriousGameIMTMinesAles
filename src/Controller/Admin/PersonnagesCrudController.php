<?php

namespace App\Controller\Admin;

use App\Entity\Personnages;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
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
            IdField::new('id')->hideOnForm(),
            IntegerField::new('positionX')->setLabel('Position en X'),
            IntegerField::new('positionY')->setLabel('Position en Y'),
            TextField::new('name')->setLabel('Nom du personnage'),
            TextEditorField::new('text')->setLabel('Texte du personnage'),
        ];
    }
    
}
