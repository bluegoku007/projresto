<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
     /**
     * @Route("/index", name="index")
     */
    public function index1(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        return $this->render('main/login1.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
     /**
     * @Route("/fam", name="fam")
     */
    public function fam(): Response
    {
        return $this->render('main/fam.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/adminn", name="adminn")
     */
    public function adminn(): Response
    {
        return $this->render('main/adminn.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/login1", name="login1")
     */
    public function login1(): Response
    {
        return $this->render('main/login1.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('main/about.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/service", name="service")
     */
    public function service(): Response
    {
        return $this->render('main/service.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
     /**
     * @Route("/menu", name="menu")
     */
    public function menu(): Response
    {
        return $this->render('main/menu.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
