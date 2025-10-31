<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $class = \App\Entity\Place::class;

        //region iia
        $comment = new Comment();

        $comment->setPlace($this->getReference("iia", $class));
        $comment->setComment("Pierre était super sympa");
        $comment->setName("Vigile");
        $comment->setValue("87");

        $comment1 = new Comment();

        $comment1->setPlace($this->getReference("iia", $class));
        $comment1->setComment("Il fait froid ! Installer un chauffage svp");
        $comment1->setName("Clément");
        $comment1->setValue("35");

        $comment2 = new Comment();

        $comment2->setPlace($this->getReference("iia", $class));
        $comment2->setComment("Pierre n'était pas dispo ce jour là, dommage");
        $comment2->setName("Léa");
        $comment2->setValue("68");

        $comment3 = new Comment();

        $comment3->setPlace($this->getReference("iia", $class));
        $comment3->setComment("Très bon locaux pour le prix demandé");
        $comment3->setName("Nicolas");
        $comment3->setValue("90");

        $comment4 = new Comment();

        $comment4->setPlace($this->getReference("iia", $class));
        $comment4->setComment("👍");
        $comment4->setName("Sophie");
        $comment4->setValue("82");

        $comment5 = new Comment();

        $comment5->setPlace($this->getReference("iia", $class));
        $comment5->setComment("Connexion de très mauvaise qualité. Ma partie de War Thunder a crache.");
        $comment5->setName("Ylan");
        $comment5->setValue("1");
        //endregion

        //region castle
        $comment1 = new Comment();

        $comment1->setPlace($this->getReference("castle", $class));
        $comment1->setComment("Le château est magnifique et bien entretenu.");
        $comment1->setName("Arthur");
        $comment1->setValue("92");

        $comment2 = new Comment();

        $comment2->setPlace($this->getReference("castle", $class));
        $comment2->setComment("Trop de contraintes expliquées sur place et non pas sur le site. Ne convient finalement pas à mes attentes.");
        $comment2->setName("Guillaume");
        $comment2->setValue("46");

        $comment3 = new Comment();

        $comment3->setPlace($this->getReference("castle", $class));
        $comment3->setComment("Superbe panorama depuis les tours !");
        $comment3->setName("Élodie");
        $comment3->setValue("95");
        //endregion

        //region stade
        $comment1 = new Comment();

        $comment1->setPlace($this->getReference("stade", $class));
        $comment1->setComment("On nous laisse énormément de liberté sur ce que l'on peut faire lors de la location. Vraiment incroyable. Je recommande vivement pour n'importe quel type d'événement comportant un peu de monde.");
        $comment1->setName("Maxime");
        $comment1->setValue("100");

        $comment2 = new Comment();

        $comment2->setPlace($this->getReference("stade", $class));
        $comment2->setComment("Grenoble better Laval devrait meme pas joué en lige 2");
        $comment2->setName("6xpred");
        $comment2->setValue("1");

        $comment3 = new Comment();

        $comment3->setPlace($this->getReference("stade", $class));
        $comment3->setComment("Les sièges pourraient être plus confortables. Rien à redire à part ça.");
        $comment3->setName("Clement");
        $comment3->setValue("78");

        $comment4 = new Comment();

        $comment4->setPlace($this->getReference("stade", $class));
        $comment4->setComment("Incroyable, meilleur location OAT. On a pu organisé un event fortnite.");
        $comment4->setName("Sophie");
        $comment4->setValue("98");

        $comment5 = new Comment();

        $comment5->setPlace($this->getReference("stade", $class));
        $comment5->setComment("Ne vous fiez pas à ce qui est dis sur la page de la location, le proprio est super sympa et permet plein de truc non dis.");
        $comment5->setName("Antoine");
        $comment5->setValue("87");

        $comment6 = new Comment();

        $comment6->setPlace($this->getReference("stade", $class));
        $comment6->setComment("Super ambiance, je reviendrai pour le prochain match !");
        $comment6->setName("Clément");
        $comment6->setValue("95");

        $comment7 = new Comment();

        $comment7->setPlace($this->getReference("stade", $class));
        $comment7->setComment("Les toilettes ne sont pas assez en évidence à mon goûts.");
        $comment7->setName("Élodie");
        $comment7->setValue("76");

        $comment8 = new Comment();

        $comment8->setPlace($this->getReference("stade", $class));
        $comment8->setComment("W Speed");
        $comment8->setName("SpeedFan80059");
        $comment8->setValue("88");
        //endregion

        //region espace mayenne
        $comment1 = new Comment();

        $comment1->setPlace($this->getReference("espace_mayenne", $class));
        $comment1->setComment("C'était encore en travaux lors de mon event. Gérer mieux vos plannings.");
        $comment1->setName("Didier");
        $comment1->setValue("36");

        $comment2 = new Comment();

        $comment2->setPlace($this->getReference("espace_mayenne", $class));
        $comment2->setComment("L'endroit est vraiment utilisable pour tout et n'importe quoi. ça fait très plaisir d'avoir ça à proximité.");
        $comment2->setName("Thomas");
        $comment2->setValue("74");
        //endregion

        $manager->flush();
    }
}
