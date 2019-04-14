<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class FiController extends AbstractController
{
       /**
      * @Route("/index")
      */
    public  function index()
    {
      return new Response('<form action="includes/login.inc.php" method="post">
                <input type="text" name="email" placeholder="E-mail">
                <input type="password" name="pass" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
              </form>
              <a href="signup.php">Signup</a>');
    }

}
