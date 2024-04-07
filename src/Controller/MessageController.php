<?php

namespace App\Controller;

use App\Entity\Messages;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    #[Route('/message', name: 'app_message')]
    public function index(EntityManagerInterface $em): Response
    {

        if ($_GET == null) {
            return $this->redirectToRoute('app_list_category');
        }

        try {
            $userid = $this->getUser()->getId() ?? 0;
        } catch (\Throwable $th) {
            $userid = 0;
        }

        $message = $em->getRepository(Messages::class)->findById($_GET["msg"]);
        return $this->render('message/index.html.twig', [
            'controller_name' => 'MessageController',
            'message' => $message,
            'userid' => $userid,
        ]);
    }
}
