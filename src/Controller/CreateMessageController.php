<?php

namespace App\Controller;

use App\Entity\Messages;
use App\Form\MessageType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class CreateMessageController extends AbstractController
{
    #[Route('/create/message', name: 'app_create_message')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {

        $message = new Messages();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $message->setAuthor($this->getUser());
            $entityManager->persist($message);
            $entityManager->flush();
        }

        return $this->render('create_message/index.html.twig', [
            'controller_name' => 'CreateMessageController',
            'form' => $form->createView()
        ]);
    }
}
