<?php

namespace App\Controller;

use App\Entity\Doctrine;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

final class DoctrineController extends AbstractController
{
    #[Route('/doctrine', name: 'app_doctrine')]
    public function index(): Response
    {
        return $this->render('doctrine/index.html.twig', [
            'controller_name' => 'DoctrineController',
            
        ]);
    }

    #[Route('/doctrine/{id}', name: 'doctrine_show')]
    public function show(Doctrine $doctrine): Response
    {
        
        return $this->render('doctrine/show1.html.twig', [
            'controller_name' => 'DoctrineController',
            'doctrine'=> $doctrine,
            
        ]);
        

        return new Response( $doctrine->getJson()['age']);

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }


    
}
