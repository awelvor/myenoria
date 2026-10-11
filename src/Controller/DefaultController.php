<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/message')]
    public function message(MessageGenerator $messageGenerator): Response
    {
        $message = $messageGenerator->getHappyMessage();

        return new Response($message);
    }
}