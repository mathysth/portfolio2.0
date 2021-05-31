<?php
namespace App\Http\Api\Controller;

use App\Http\Api\Utils\APIUtils;
use App\Http\Api\Utils\ParseResponse;
use App\Repository\ProduitsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("basket")
 */
class BasketController
{

    /**
     * Initialise le panier
     *
     * @param Session $session
     * @return Session
     */
    public function initBasket(Session $session)
    {
        if (!$session->get('basket')) {
            $session->set('basket', []);
        }
        return $session;
    }

    /**
     * Permet d'ajouter ou modifier un produit dans le panier
     *
     * @Route("/addBasket", name="addToBasket", methods={"POST"})
     */
    public function addToBasket(ProduitsRepository $produitsRepository, SessionInterface $session): Response
    {
        $productQuantity = (int)$_POST['explode']['value'];
        $product = $produitsRepository->findProduct((int)$_POST['explode']['productId']);
        $basket = $this->initBasket(APIUtils::startSession($session));

        $array = $basket->get('basket');
        $isIn = false;

        $countTotalProduct = count($array);
        if ($countTotalProduct > 0){
            $start = array_key_first($array);
        }else{
            $start = 0;
        }

        for ($i = 0; $i < count($array) + $start; $i++) {
            if(array_key_exists($i,$array)) {
                foreach ($array[$i] as $key => $item) {
                    if ((int)$_POST['explode']['productId'] == $key) {
                        $isIn = true;
                        break;
                    } else {
                        $isIn = false;
                    }
                }
                // Permet de casser la deuxieme boucle
                if ($isIn) {
                    break;
                }
            }
        }

        if (!$isIn) {
            array_push($array, [$product->getId() => ['item' => $product, 'qte' => $productQuantity]]);
        }else{
            for($i = 0; $i < count($array);$i++){
                foreach ($array[$i] as $key => $item) {
                    if ((int)$_POST['explode']['productId'] == $key) {
                        $array[$i][$key]['qte'] = $productQuantity;
                        break;
                    }
                }
            }
        }

        var_dump($array);
        $basket->set('basket', $array);

        return (new ParseResponse("success"))->returnApiResponse();
    }


    /**
     * Permet de supprimer  un produit du  panier
     *
     * @Route("/deleteFromBasket", name="deleteFromBasket", methods={"POST"})
     */
    public function deleteFromBasket(SessionInterface $session): Response
    {
        $basket = $this->initBasket(APIUtils::startSession($session));

        $array = $basket->get('basket');

        $countTotalProduct = count($array);
        if ($countTotalProduct > 0){
            $start = array_key_first($array);
        }else{
            $start = 0;
        }

        for ($i = 0; $i < count($array) + $start; $i++) {
            if(array_key_exists($i,$array)) {
                foreach ($array[$i] as $key => $item) {
                    if ((int)$_POST['explode']['productId'] == $key) {
                        var_dump((int)$_POST['explode']['productId']);
                        unset($array[$i][$key]);
                        break;
                    }
                }
            }
        }

        var_dump($array);
        $basket->set('basket', $array);

        return (new ParseResponse("success"))->returnApiResponse();
    }

}