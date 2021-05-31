<?php
namespace App\Controller;

use App\Http\Api\Controller\BasketController;
use App\Http\Api\Utils\APIUtils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController{

    /**
     * @Route("panier",name="panier")
     */
    public function show(SessionInterface $session){
        $basket = (new BasketController())->initBasket(APIUtils::startSession($session));

        return $this->render("pages/panier.html.twig",[
            'current_menu' => "panier",
            'produits' => $basket->get('basket')
        ]);
    }
}