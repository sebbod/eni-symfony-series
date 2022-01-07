<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/",name="main_home")
     */
    public function home()
    {
        //echo "coucou";
        return $this->render('main/home.html.twig');
        //die();
    }

    /**
     * @Route("/test",name="main_test")
     */
    public function test()
    {
        //echo "testounet";
        //die();
        $series = [
            "title" => "Game of Thrones",
            "year" => 2000,
        ];
        return $this->render('main/test.html.twig', [
            "series" => $series,
            "autreVariable" => "valeur"
        ]);
    }
}