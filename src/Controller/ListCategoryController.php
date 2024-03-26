<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Category;



class ListCategoryController extends AbstractController
{
    #[Route('/topics', name: 'app_list_category')]
    public function index(EntityManagerInterface $em): Response
    {

        //fetch all categories in the data base, display the total number of messages for each categories.
        $categories = $em->getRepository(Category::class)->findAll();


        
        return $this->render('list_category/index.html.twig', [
            'controller_name' => 'ListCategoryController',
            'categories' => $categories
        ]);
    }
}
