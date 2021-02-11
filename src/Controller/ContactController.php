<?php

namespace App\Controller;


use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    /**
     * @Route("/contact", name="contact")
     */
    public function index(HttpFoundationRequest $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        $test = "blabla";

        if($form->isSubmitted() && $form->isValid()){
            $contact = $form->getData();

            // Envoi du mail
            $message = (new \Swift_Message('Contact'))
                // Expéditeur
                ->setFrom($contact['email'])

                // Destinataire
                ->setTo('infostourismecontact@gmail.com')

                // Création du message
                ->setBody(
                    $this->renderView(
                        'emails/contact.html.twig', compact('contact')
                    ),
                    'text/html'
                )
            ;

            // On envoie le message
            $mailer->send($message);

            $this->addFlash('message', 'Merci, votre message nous est bien parvenu ! ✅');
            return $this->redirectToRoute('contact');
        }

        return $this->render('contact.html.twig', [
            "contactF" => $form->createView() 
        ]);
    }  

}
