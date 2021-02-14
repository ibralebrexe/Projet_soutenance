<?php

namespace App\Controller;

use App\Entity\Activity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Location;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;
use Symfony\Component\HttpFoundation\Request;




class HomeController extends AbstractController
{
    /**
   * @Route("/", name="home")
   */
  public function home()
  {

    $activités = $this->getDoctrine()->getRepository(Activity::class)->findAll();
    $locations = $this->getDoctrine()->getRepository(Location::class)->findAll();

    return $this->render('home.html.twig', [
      "locations" => $locations,
      "activités" => $activités
    ]);
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