<?php
namespace App\Http\Api\Controller\Payments\Paypal;

use App\Http\Api\Data\Payments\Paypal\Basket;
use App\Http\Api\Data\Payments\Paypal\TransactionFactory;
use App\Http\Api\Utils\ParseResponse;
use App\Repository\ProduitsRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ConfirmCheckout
 * @package App\Http\Api\Controller\Payments\Paypal
 * @Route("payment/paypal/")
 */
class ConfirmCheckout
{

    /**
     * Permet d'executer un payment paypal
     * 
     * @Route("confirmPayment", name="paypal_confirm", methods={"POST"})
     */
    public function executePayment(SessionInterface $session, ProduitsRepository $produitsRepository){
        $ids = [
            "id" => "AfxEG_5HIGV4KA_KUaJs7anmLCJo_CX7F0w1uHdwJdsS6vu528N6uiTuhSO2AegyL5RgjtV7MvuJGkEP",
            "secret" => "EICtet2eR_oTsN7ynt7y633g9XEsHzgBKu6m1vaTslFiO0pqZPnflxhU8bdef8byyfA4GHshSzZzTuF6"
        ];
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                $ids['id'],
                $ids['secret']
            )
        );
        //$apiContext->setConfig(array('mode' => 'live'));
        $basket = Basket::setBasket($session,$produitsRepository);
        $payment = \PayPal\Api\Payment::get($_POST['paymentID'], $apiContext);

        $execution = (new \PayPal\Api\PaymentExecution())
            ->setPayerId($_POST['payerID'])
            ->addTransaction( TransactionFactory::fromBasket($basket));

        try {
            echo json_encode([
                'payerID' => $_POST['payerID'],
                'paymentID' => $_POST['paymentID']
            ]);
            $payment->execute($execution, $apiContext);
        } catch (\PayPal\Exception\PayPalConnectionException $e) {
            //header('HTTP 500 Internal Server Error', true, 500);
            var_dump(json_decode($e->getData()));
        }
        return (new ParseResponse(""))->returnApiResponse();

    }

}