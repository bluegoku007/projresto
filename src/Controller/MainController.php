<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="app_main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/login", name="app_main")
     */
    public function login(): Response
    {
        return $this->render('main/login.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
     /**
     * @Route("/fam", name="app_main")
     */
    public function fam(): Response
    {
        return $this->render('main/fam.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/adminn", name="app_main")
     */
    public function adminn(): Response
    {
        return $this->render('main/adminn.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/login1", name="app_main")
     */
    public function login1(): Response
    {
        return $this->render('main/login1.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
