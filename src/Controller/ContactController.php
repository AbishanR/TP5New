<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contacts", name="contacts", methods={"GET"})
     */
    public function listeContacts(): Response
    {
        $manager=$this->getDoctrine()->getManager();
        return $this->render('contact/listeContacts.html.twig');
    }
}
