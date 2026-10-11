<?php

namespace App\Controller;

use App\Repository\BaptemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\MessageGenerator;

final class BaptemeController extends AbstractController
{
    #[Route('/bapteme1', name: 'app_bapteme1')]
    public function index1(BaptemeRepository $BaptemeRepository): Response
    {
      return $this->render(
      'bapteme/index1.html.twig', 
      [
      'controller_name' => 'BaptemeController',
      'entite'=>['parent'=>'lannion'],
      'personnes'=> $BaptemeRepository->personnes($BaptemeRepository),
      ]
    );
    }

    #[Route('/bapteme2', name: 'app_bapteme2')]
    public function index2(BaptemeRepository $BaptemeRepository): Response
    {
      

    $thevar = $BaptemeRepository->personnes($BaptemeRepository);
    
  
    
      return $this->render(
      'bapteme/index2.html.twig', 
      [
      'controller_name' => 'BaptemeController',
      'personnes'=> $BaptemeRepository->personnes($BaptemeRepository),
      ]
    );
    }

  




}
