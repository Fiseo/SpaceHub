<?php

namespace App\DataFixtures;

use App\Entity\Place;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PlaceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $class = \App\Entity\Equipment::class;

        $iia = new Place();
        $iia->setName('Institut d\'Informatique Appliquée');
        $iia->setAddress('5 boulevard de l\'Industrie, 53940 Saint-Berthevin');
        $iia->setCapacity(150);
        $iia->setSlug("Institut-d-informatique-appliquee");
        $iia->setDescription('L\'Institut d\'Informatique Appliquée (IIA) est une école d\'ingénieurs spécialisée dans les technologies de l\'information et de la communication.');

        $iia->AddEquipment($this->getReference('Equipment_wifi', $class));
        $iia->AddEquipment($this->getReference('Equipment_parking', $class));
        $iia->AddEquipment($this->getReference('Equipment_handicap', $class));
        $iia->AddEquipment($this->getReference('Equipment_pierre', $class));
        $iia->AddEquipment($this->getReference('Equipment_bruit', $class));

        $this->addReference('iia', $iia);

        $manager->persist($iia);

        $castle = new Place();
        $castle->setName('Château de Laval');
        $castle->setAddress('1 Rue du Château, 53000 Laval');
        $castle->setCapacity(300);
        $castle->setSlug("Chateau-de-laval");
        $castle->setDescription('Le Château de Laval est un monument historique situé au cœur de la ville de Laval, offrant une vue imprenable sur la Mayenne.');

        $castle->AddEquipment($this->getReference('Equipment_chauffage', $class));

        $this->addReference('castle', $castle);

        $manager->persist($castle);

        $stade = new Place();
        $stade->setName('Stade Francis Le Basser');
        $stade->setAddress('Avenue Robert Buron, 53000 Laval');
        $stade->setCapacity(10000);
        $stade->setSlug("Stade-francis-le-basser");
        $stade->setDescription('Le Stade Francis Le Basser est le principal stade de football de Laval, accueillant les matchs du Stade Lavallois.');

        $stade->AddEquipment($this->getReference('Equipment_parking', $class));
        $stade->AddEquipment($this->getReference('Equipment_animaux', $class));
        $stade->AddEquipment($this->getReference('Equipment_handicap', $class));

        $this->addReference('stade', $stade);

        $manager->persist($stade);

        $espace_mayenne = new Place();
        $espace_mayenne->setName('Espace Mayenne');
        $espace_mayenne->setAddress('2 Rue Joséphine Baker, 53000 Laval');
        $espace_mayenne->setCapacity(1500);
        $espace_mayenne->setSlug("Espace-Mayenne");
        $espace_mayenne->setDescription('L\'Espace Mayenne est un centre culturel et de congrès situé à Laval, offrant des espaces pour des événements variés.');

        $espace_mayenne->addEquipment($this->getReference('Equipment_wifi', $class));
        $espace_mayenne->AddEquipment($this->getReference('Equipment_parking', $class));
        $espace_mayenne->AddEquipment($this->getReference('Equipment_cinema', $class));
        $espace_mayenne->AddEquipment($this->getReference('Equipment_cuisine', $class));
        $espace_mayenne->AddEquipment($this->getReference('Equipment_handicap', $class));
        $espace_mayenne->AddEquipment($this->getReference('Equipment_chauffage', $class));
        $espace_mayenne->AddEquipment($this->getReference('Equipment_bruit', $class));

        $this->addReference('espace_mayenne', $espace_mayenne);

        $manager->persist($espace_mayenne);

        $manager->flush();
    }
}
