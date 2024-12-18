<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Book;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $users = [];
        $books = [];
        // $product = new Product();
        // $manager->persist($product);
        // Crée une instance de Faker pour générer des données aléatoires
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setNom($faker->userName());
            $user->setPrenom($faker->userName());
            $user->setPassword($faker->password());
            $user->setEmail($faker->email());
            $user->setRoles(['ROLE_USER']);
            $user->setDateNaissance($faker->dateTimeBetween('-50 years','now'));
            $user->setAdresse('');
            $user->setCodePostal($faker->phoneNumber());
            $user->setVille($faker->city());
            $user->setNumeroTelephone($faker->phoneNumber());
            $user->setStatut($faker->boolean(0.5));
            $manager->persist($user);
            $users[] = $user;
        };

        

        // Générer 10 livres par exemple
        for ($i = 0; $i < 100; $i++) {
            $book = new Book();
            $book->setTitre($faker->sentence(3)) // Génère un titre avec 3 mots
                 ->setAuteur($faker->name()) // Nom de l'auteur
                 ->setAnneePublication($faker->year()) // Année de publication
                 ->setResume($faker->paragraph()) // Résumé du livre
                 ->setImage($faker->imageUrl()) // URL d'une image aléatoire
                 ->setDisponibilite($faker->boolean()); // Disponibilité aléatoire (true/false)

            // Persiste l'entité Book
            $manager->persist($book);

         }
         $manager->flush();
    }
}
