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



class HomeController extends AbstractController
{
    /**
   * @Route("/", name="home")
   */
  public function home()
  {

    $activités = $this->getDoctrine()->getRepository(Activity::class)->findAll();

    return $this->render('home.html.twig', [
      "activités" => $activités,
    ]);
  }

  /**
   * @Route("/show/{id}", name="activite_show")
   */
  public function show($id): Response
  {
    $activités = $this->getDoctrine()->getRepository(Activity::class)->find($id);
    $villes = $this->getDoctrine()->getRepository(Ville::class)->find($id);
    $pays = $this->getDoctrine()->getRepository(Pays::class)->find($id);

    
    if (!$activités) {
      throw new Exception("Erreur : Il n'y a aucune activité avec l'id : $id");
    }

    return $this->render('detail.html.twig', [
      'activités' => $activités,
      'villes' => $villes,
      'pays' => $pays
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