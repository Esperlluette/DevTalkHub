<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\DLCV;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;

class DLCVController extends AbstractController
{
    #[Route('/dlcv', name: 'app_dlcv')]
    public function index(EntityManagerInterface $em): Response
    {
        $dl = new DLCV();
        $dl->setDate(new DateTime());
        $em->persist($dl);
        $em->flush();
        return $this->file('/var/www/html/dev_talk_hub/public/assets/img/cv_Jalian_Mannessier.jpg');
    }
}
