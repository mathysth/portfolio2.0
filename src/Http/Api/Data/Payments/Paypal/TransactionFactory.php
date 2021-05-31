<?php

namespace App\Http\Api\Data\Payments\Paypal;

use PayPal\Api\Transaction;

class TransactionFactory
{

    static function fromBasket(Basket $basket, float $vatRate = 0): Transaction
    {
        $list = new \PayPal\Api\ItemList();
        foreach ($basket->getProducts() as $product) {
            $item = (new \PayPal\Api\Item())
                ->setName($product->getName())
                ->setPrice($product->getPrice())
                ->setCurrency('EUR')
                ->setQuantity(1);
            $list->addItem($item);
        }
        $details = (new \PayPal\Api\Details())
            ->setTax($basket->getVatPrice($vatRate))
            ->setSubtotal($basket->getPrice());

        $amount = (new \PayPal\Api\Amount())
            ->setTotal(($basket->getPrice() + $basket->getVatPrice($vatRate)))
            ->setCurrency("EUR")
            ->setDetails($details);

        return (new \PayPal\Api\Transaction())
            ->setItemList($list)
            ->setDescription('Achat test sur Mathystheolade.fr')
            ->setAmount($amount);
    }

}