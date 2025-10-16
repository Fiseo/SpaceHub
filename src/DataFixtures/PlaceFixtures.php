<?php

namespace App\DataFixtures;

use App\Entity\Place;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PlaceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $class = \App\Entity\Equipement::class;

        $iia = new Place();
        $iia->setName('Institut d\'Informatique Appliquée');
        $iia->setAddress('5 boulevard de l\'Industrie, 53940 Saint-Berthevin');
        $iia->setCapacity(150);
        $iia->setDescription('L\'Institut d\'Informatique Appliquée (IIA) est une école d\'ingénieurs spécialisée dans les technologies de l\'information et de la communication.');

        $iia->addEquipement($this->getReference('equipement_wifi', $class));
        $iia->addEquipement($this->getReference('equipement_parking', $class));
        $iia->addEquipement($this->getReference('equipement_handicap', $class));
        $iia->addEquipement($this->getReference('equipement_pierre', $class));
        $iia->addEquipement($this->getReference('equipement_bruit', $class));

        $manager->persist($iia);

        $castle = new Place();
        $castle->setName('Château de Laval');
        $castle->setAddress('1 Rue du Château, 53000 Laval');
        $castle->setCapacity(300);
        $castle->setDescription('Le Château de Laval est un monument historique situé au cœur de la ville de Laval, offrant une vue imprenable sur la Mayenne.');

        $castle->addEquipement($this->getReference('equipement_chauffage', $class));

        $manager->persist($castle);

        $stade = new Place();
        $stade->setName('Stade Francis Le Basser');
        $stade->setAddress('Avenue Robert Buron, 53000 Laval');
        $stade->setCapacity(10000);
        $stade->setDescription('Le Stade Francis Le Basser est le principal stade de football de Laval, accueillant les matchs du Stade Lavallois.');

        $stade->addEquipement($this->getReference('equipement_parking', $class));
        $stade->addEquipement($this->getReference('equipement_animaux', $class));
        $stade->addEquipement($this->getReference('equipement_handicap', $class));

        $manager->persist($stade);

        $espace_mayenne = new Place();
        $espace_mayenne->setName('Espace Mayenne');
        $espace_mayenne->setAddress('2 Rue Joséphine Baker, 53000 Laval');
        $espace_mayenne->setCapacity(1500);
        $espace_mayenne->setDescription('L\'Espace Mayenne est un centre culturel et de congrès situé à Laval, offrant des espaces pour des événements variés.');

        $espace_mayenne->addEquipement($this->getReference('equipement_wifi', $class));
        $espace_mayenne->addEquipement($this->getReference('equipement_parking', $class));
        $espace_mayenne->addEquipement($this->getReference('equipement_cinema', $class));
        $espace_mayenne->addEquipement($this->getReference('equipement_cuisine', $class));
        $espace_mayenne->addEquipement($this->getReference('equipement_handicap', $class));
        $espace_mayenne->addEquipement($this->getReference('equipement_chauffage', $class));
        $espace_mayenne->addEquipement($this->getReference('equipement_bruit', $class));

        $manager->persist($espace_mayenne);

        $manager->flush();
    }
}
