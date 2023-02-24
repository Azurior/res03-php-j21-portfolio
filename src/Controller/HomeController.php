<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
    * @Route("/home")
    */

    public function Hello(): Response
    {

        // this looks exactly the same
        $text = "Bonjour tous le monde";

        return $this->render('home.html.twig', [
            'text' => $text,
        ]);
    }

}