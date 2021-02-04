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
    return $this->render('home.html.twig');
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

   /**
   * @Route("/aide", name="aide")
   */
  public function aide()
  {
    return $this->render('aide.html.twig');
  }

   /**
   * @Route("/sav", name="sav")
   */
  public function sav()
  {
    return $this->render('sav.html.twig');
  }
   /**
   * @Route("/faq", name="faq")
   */

  public function faq()
  {
    return $this->render('faq.html.twig');
  }
}