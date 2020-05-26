<?php

namespace App\DataFixtures;

use App\Entity\Article;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++) // On boucle 10 fois afin de créer 10 articles
        {   // On instancie la classe Article afin de renseigner les propriétés private et d'envoyer les objets type Article
            $article = new Article; // CTRL + ALT + i pour importer automatiquement

            // On renseigne tous les setters de la classe Article afin d'ajouter des titres, du contenu etc qui seront insérés dans la BDD
            $article->setTitle("Titre de l'article n°$i")
                    ->setContent("<p>Contenu de l'article n°$i</p>")
                    ->setImage("https://picsum.photos/300")
                    ->setCreatedAt(new \DateTime()); // objet classe DateTime
                
            $manager->persist($article); // persist() est une méthode issue de la classe ObjectManager permettant de garder en mémoire les objets Articles Crées, il les fait persister dans le temps
        }

        $manager->flush(); // flush() est une méthode issue de la classe ObjectMAnager qui permet véritablement de générer l'insertion en BDD
    }
}
