<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Training;

class TrainingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $class = new Training();
        $class->setTitle("Inititation aux 'kana' Niveau 1 - HIRAGANA 平仮名, ひらがな");
        $class->setContent("Cours d'écriture pour maîtiser le syllabaire Hirgana");
        $class->setDuration(100);
        $class->setSpots(7);
        $manager->persist($class);
        $manager->flush();

        $class = new Training();
        $class->setTitle("Inititation aux 'kana' Niveau 2 - KATAKANA 片仮名, カタカナ");
        $class->setContent("Cours d'écriture pour maîtiser le syllabaire Hirgana");
        $class->setDuration(100);
        $class->setSpots(4);
        $manager->persist($class);
        $manager->flush();

        $class = new Training();
        $class->setTitle("Lire et écrire en japonais - LES KANJI");
        $class->setContent("Cours d'écriture pour maîtiser les knajis / idéogrammes japonais");
        $class->setDuration(100);
        $class->setSpots(2);
        $manager->persist($class);

        $manager->flush();

        $class = new Training();
        $class->setTitle("私は日本語を少し話せます。 JEUX DE ROLES ET CONVERSATIONS DEBUTANT A1");
        $class->setContent("Atelier ludique pour apprendre à formuler des idées simple en japonais.");
        $class->setDuration(100);
        $class->setSpots(1);
        $manager->persist($class);

        $manager->flush();
    }
}
