<?php
namespace App\Http\Api\Controller\Payments\Paypal;

use App\Http\Api\Data\Payments\Paypal\Basket;
use App\Http\Api\Data\Payments\Paypal\TransactionFactory;
use App\Http\Api\Utils\ParseResponse;
use App\Repository\ProduitsRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class Payment
 * @package App\Http\Api\Controller\Payments\Paypal
 * @Route("payment/paypal/")
 */
class Payment{

    /**
     * Permet de créer un payment paypal
     *
     * @Route("setup", name="paypal_setup", methods={"POST"})
     */
    public function setupPayment(SessionInterface $session,ProduitsRepository $produitsRepository){
        $ids = [
            "id" => "AfxEG_5HIGV4KA_KUaJs7anmLCJo_CX7F0w1uHdwJdsS6vu528N6uiTuhSO2AegyL5RgjtV7MvuJGkEP",
            "secret" => "EICtet2eR_oTsN7ynt7y633g9XEsHzgBKu6m1vaTslFiO0pqZPnflxhU8bdef8byyfA4GHshSzZzTuF6"
        ];
        $basket = Basket::setBasket($session,$produitsRepository);

        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                $ids['id'],
                $ids['secret']
            )
        );
        //$apiContext->setConfig(array('mode' => 'live'));

        $payment = new \PayPal\Api\Payment();
        $payment->addTransaction(TransactionFactory::fromBasket($basket));
        $payment->setIntent('sale');
        $redirectUrls = (new \PayPal\Api\RedirectUrls())
            ->setReturnUrl('https://mathystheolade.fr')
            ->setCancelUrl('https://mathystheolade.fr');
        $payment->setRedirectUrls($redirectUrls);
        $payment->setPayer((new \PayPal\Api\Payer())->setPaymentMethod('paypal'));
        try {
            $payment->create($apiContext);
            echo json_encode([
                'id' => $payment->getId()
            ]);
            return (new ParseResponse(""))->returnApiResponse(200);
        } catch (\PayPal\Exception\PayPalConnectionException $e) {
            var_dump(json_decode($e->getData()));
            return (new ParseResponse("error"))->returnApiResponse(500);
        }

    }
}