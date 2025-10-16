<?php

namespace App\DataFixtures;

use App\Entity\Equipement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EquipementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $wifi = new Equipement();
        $wifi->setName('Wi-Fi');
        $wifi->setIcon('🛜');
        $manager->persist($wifi);
        $this->addReference('equipement_wifi', $wifi);

        $parking = new Equipement();
        $parking->setName('Parking privé');
        $parking->setIcon('🚗');
        $manager->persist($parking);
        $this->addReference('equipement_parking', $parking);

        $cinema = new Equipement();
        $cinema->setName('Salle de cinéma');
        $cinema->setIcon('🎞️');
        $manager->persist($cinema);
        $this->addReference('equipement_cinema', $cinema);

        $cuisine = new Equipement();
        $cuisine->setName('Cuisine équipée');
        $cuisine->setIcon('🧑‍🍳');
        $manager->persist($cuisine);
        $this->addReference('equipement_cuisine', $cuisine);

        $barbecue = new Equipement();
        $barbecue->setName('Barbecue');
        $barbecue->setIcon('🔥');
        $manager->persist($barbecue);
        $this->addReference('equipement_barbecue', $barbecue);

        $animaux = new Equipement();
        $animaux->setName('Animaux autorisés');
        $animaux->setIcon('🐶');
        $manager->persist($animaux);
        $this->addReference('equipement_animaux', $animaux);

        $handicap = new Equipement();
        $handicap->setName('Accès handicapé');
        $handicap->setIcon('👨‍🦽');
        $manager->persist($handicap);
        $this->addReference('equipement_handicap', $handicap);

        $pierre = new Equipement();
        $pierre->setName('Pierre Jehan invitable');
        $pierre->setIcon('🗿');
        $manager->persist($pierre);
        $this->addReference('equipement_pierre', $pierre);

        $chauffage = new Equipement();
        $chauffage->setName('Chauffage');
        $chauffage->setIcon('🔥');
        $manager->persist($chauffage);
        $this->addReference('equipement_chauffage', $chauffage);

        $bruit = new Equipement();
        $bruit->setName('Nuisance sonore autorisée');
        $bruit->setIcon('🎶');
        $manager->persist($bruit);
        $this->addReference('equipement_bruit', $bruit);

        $manager->flush();
    }
}
