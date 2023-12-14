<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $em): Response
    {

        //Fetch total members 


        $totalMembers = $em->getRepository(User::class)->count([]);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'totalMembers'=>$totalMembers
        ]);
    }
}
