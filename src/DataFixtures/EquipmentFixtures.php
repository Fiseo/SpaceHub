<?php

namespace App\DataFixtures;

use App\Entity\Equipment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EquipmentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $wifi = new Equipment();
        $wifi->setName('Wi-Fi');
        $wifi->setIcon('🛜');
        $manager->persist($wifi);
        $this->addReference('Equipment_wifi', $wifi);

        $parking = new Equipment();
        $parking->setName('Parking privé');
        $parking->setIcon('🚗');
        $manager->persist($parking);
        $this->addReference('Equipment_parking', $parking);

        $cinema = new Equipment();
        $cinema->setName('Salle de cinéma');
        $cinema->setIcon('🎞️');
        $manager->persist($cinema);
        $this->addReference('Equipment_cinema', $cinema);

        $cuisine = new Equipment();
        $cuisine->setName('Cuisine équipée');
        $cuisine->setIcon('🧑‍🍳');
        $manager->persist($cuisine);
        $this->addReference('Equipment_cuisine', $cuisine);

        $barbecue = new Equipment();
        $barbecue->setName('Barbecue');
        $barbecue->setIcon('🔥');
        $manager->persist($barbecue);
        $this->addReference('Equipment_barbecue', $barbecue);

        $animaux = new Equipment();
        $animaux->setName('Animaux autorisés');
        $animaux->setIcon('🐶');
        $manager->persist($animaux);
        $this->addReference('Equipment_animaux', $animaux);

        $handicap = new Equipment();
        $handicap->setName('Accès handicapé');
        $handicap->setIcon('👨‍🦽');
        $manager->persist($handicap);
        $this->addReference('Equipment_handicap', $handicap);

        $pierre = new Equipment();
        $pierre->setName('Pierre Jehan invitable');
        $pierre->setIcon('🗿');
        $manager->persist($pierre);
        $this->addReference('Equipment_pierre', $pierre);

        $chauffage = new Equipment();
        $chauffage->setName('Chauffage');
        $chauffage->setIcon('🔥');
        $manager->persist($chauffage);
        $this->addReference('Equipment_chauffage', $chauffage);

        $bruit = new Equipment();
        $bruit->setName('Nuisance sonore autorisée');
        $bruit->setIcon('🎶');
        $manager->persist($bruit);
        $this->addReference('Equipment_bruit', $bruit);

        $manager->flush();
    }
}
