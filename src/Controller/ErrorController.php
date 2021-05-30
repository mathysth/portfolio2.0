<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ErrorController extends AbstractController{

    public function show(): Response
    {
        return $this->render("errors/404.html.twig");
    }
}