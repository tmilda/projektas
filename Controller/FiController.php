<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class FiController extends AbstractController
{
       /**
      * @Route("/")
      */
    public  function index()
    {
      return $this->render('fi/login.html.twig');
    }

    /**
    * @Route("/login.php")
    */
    public  function login()
    {
      return $this->render('fi/login.html.twig');
    }
    /**
    * @Route("/signup.php")
    */
    public function signup()
    {
      return $this->render('fi/signup.html.twig');
    }
}
