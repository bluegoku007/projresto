<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function index(AuthenticationUtils $authenticationUtils):Response
    {
   
            //get the login error
            $error= $authenticationUtils->getLastAuthenticationError();
            //last username entered 
            $lastUserame= $authenticationUtils->getLastUsername();
            return $this->render('login/index.html.twig',[
                'last_username' => $lastUserame,
                'error' => $error,
            ]
        );
    }
}
