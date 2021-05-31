<?php
namespace App\Http\Api\Data\Payments\Paypal;

use App\Http\Api\Controller\BasketController;
use App\Http\Api\Utils\APIUtils;
use App\Repository\ProduitsRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * Class Basket
 * @package App\Http\Api\Controller\Payments\Paypal
 */
class Basket {

    /**
     * @var
     */
    private $products;

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     * @return Basket
     */
    public function setProducts($products): Basket
    {
        $this->products = $products;
        return $this;
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function addProduct(Product $product): Basket
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float {
        return array_reduce($this->getProducts(), function ($total, Product $product) {
            return $product->getPrice()  + $total;
        }, 0);
    }

    /**
     * @param $rate
     * @return float
     */
    public function getVatPrice($rate): float {
        return round($this->getPrice() * $rate * 100) / 100;
    }

    /**
     * @return array
     */
    public static function items(SessionInterface $session,ProduitsRepository $produitsRepository): array
    {
        /*
        foreach ($_SESSION['panier'] as $productDbKey => $productDbValue) {
           $productById = Shop::getProductById($productDbValue['id']);
           $product = new Product();
           $product->setName($productById['name']);
           $product->setPrice($productById['price'] * $productDbValue['quantite']);
           array_push($products, $product);
        }
        */
        $products = [];
        $basket = (new BasketController())->initBasket(APIUtils::startSession($session));
        for ($i = 0; $i < count($basket->get('basket'));$i++){
            foreach ($basket->get('basket')[$i] as $key => $productArray) {
                $produit = $produitsRepository->find($productArray['item']);
                $product = new Product();
                $product->setName($produit->getNom());
                $product->setPrice($productArray['qte'] * $produit->getPrix());
                array_push($products, $product);
            }
        }
        return $products;
    }

    /**
     * @return Basket
     */
    public static function setBasket(SessionInterface $session,ProduitsRepository $produitsRepository): Basket
    {
        return (new self())->setProducts(self::items($session,$produitsRepository));
    }

}