<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EntityDrawRepository;
use App\Repository\EntityResultRepository;

class AffichageController extends AbstractController
{
    /**
     * @Route("/affichage", name="app_affichage")
     */
    public function index
    (

        EntityDrawRepository $drawRepository,
        EntityResultRepository $resultRepository
    )
    : Response
    {
       $draw = $drawRepository->findOneBy(["id" => 1]);
       $result = $resultRepository->findall(["draw_index" => $draw->getId()]);
       $date = $draw->getDrawnAt()->format("Y-M-D");
        return $this->render('affichage/index.html.twig', [
           "date" => $date,
           "result" => $result
        ]);
    }
}
