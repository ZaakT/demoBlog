<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    // Un commentaire commençant par @ est une annotation très importante, Symfony explique que lorsque l'on lancera www.monsite.com/blog on fera appel à la méthode index()
    // Pas besoin de préciser 

    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blog/home.html.twig', [
            'title' => 'Bienvenue sur notre blog SYMFONY',
            'age' => 25
        ]);
        
    }


}
