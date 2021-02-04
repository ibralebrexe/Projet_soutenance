<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
   * @Route("/accueil", name="home")
   */
  public function home()
  {
    return $this->render('header.html.twig');
  }

   /**
   * @Route("/apropos", name="apropos")
   */
  public function apropos()
  {
    return $this->render('apropos.html.twig');
  }

  /**
   * @Route("/login", name="login")
   */
  public function login()
  {
    return $this->render('login.html.twig');
  }

}