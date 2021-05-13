<?php
namespace App\Http\Api\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("basket")
 */
class BasketController{

    /**
     * Permet de vérifier la validite d'un domaine
     *
     * @Route("/addBasket", name="addToBasket", methods={"POST"})
     * @param Request $request
     */
    public function addToBasket(Request $request)
    {
        echo 1;
    }
}