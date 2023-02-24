<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
    * @Route("/", name="Accueil")
    */

    public function Hello(): Response
    {

        // this looks exactly the same
        
        
        return $this->render('/page/home.html.twig', [
            
        ]);
    }


    /**
    * @Route("/a-propos", name="A-propos")
    */

    public function About(): Response
    {

        // this looks exactly the same
        
        return $this->render('/page/about.html.twig', [
            
        ]);

    }
}