<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\DLCV;
use App\Repository\DLCVRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;

class CVController extends AbstractController
{
    #[Route('/cv', name: 'app_cv')]
    public function index(EntityManagerInterface $em): Response
    {
        $dl = new DLCV();
        $dl->setDate(new DateTime());
        $em->persist($dl);
        $em->flush();

        return $this->render('cv/index.html.twig');
    }
}
