<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Form\ActivityType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ActivityController extends AbstractController
{

    /**
     * @Route("/add-activity", name="add-activity")
     */
    public function addActivity(Request $request) {
        $new_activity = new Activity;
        $form = $this->createForm(ActivityType::class, $new_activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($new_activity);
            $entityManager->flush();
        }

        return $this->render('/add_activity/addActivity.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit-activity")
     */
    public function editActivity(Activity $activity = null, Request $request, EntityManagerInterface $manager) {

        $form = $this->createFormBuilder($activity)
        ->add('nom', TextType::class)
        ->add('type', TextType::class)
        ->add('tempsDeVisite', TextType::class)
        ->add('description', TextareaType::class)
        ->add('adresse', TextType::class)
        ->add('codePostal', TextType::class)
        ->add('localisation')
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $manager->persist($activity);
            $entityManager->flush();

            $this->addFlash('activity_edit_success', 'Activité ajoutée avec succès');
            return $this->redirectToRoute('add-activity');
        }

        return $this->render('/add_activity/editActivity.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
