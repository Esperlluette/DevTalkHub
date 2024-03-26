<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Messages;
use App\Entity\Category;
use Symfony\Component\Mime\Message;


class ListMessagesController extends AbstractController
{
    #[Route('/messages', name: 'app_list_messages')]
    public function index(EntityManagerInterface $em): Response
    {

        if ($_GET==null) {
            return $this->redirectToRoute('app_list_category');
        }

        $messages = $em->getRepository(Category::class)->findById($_GET["category"]);
        $messages = $messages[0]->getMessages();

        return $this->render('list_messages/index.html.twig', [
            'controller_name' => 'ListMessagesController',
            'messages' => $messages
        ]);
    }
}
