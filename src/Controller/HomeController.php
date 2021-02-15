<?php

namespace App\Controller;

use App\Entity\Activity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Ville;
use App\Entity\Pays;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;
use Symfony\Component\HttpFoundation\Request;
use App\Form\SearchType;



class HomeController extends AbstractController
{
    /**
   * @Route("/", name="home")
   */
  public function home()
  {

    $form = $this->createForm(SearchType::class);
    $activités = $this->getDoctrine()->getRepository(Activity::class)->findAll();
    $villes = $this->getDoctrine()->getRepository(Ville::class)->findAll();
    $pays = $this->getDoctrine()->getRepository(Pays::class)->MyFindAll();

    return $this->render('home.html.twig', [
      "villes" => $villes,
      "activités" => $activités,
      "pays" => $pays,
      "search_form" => $form->createView() 
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
   * @Route("/cookie", name="cookie")
   */
  public function cookie()
  {
    return $this->render('cookie.html.twig');
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

  /**
   * @Route("/mention", name="mention")
   */

  public function mention()
  {
    return $this->render('mention.html.twig');
  }

  /**
   * @Route("/politique", name="politique")
   */

  public function politique()
  {
    return $this->render('politique.html.twig');
  }
}