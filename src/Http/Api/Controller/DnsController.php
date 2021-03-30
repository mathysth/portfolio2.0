<?php
namespace App\Http\Api\Controller;

use App\Http\Api\Utils\ParseResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DnsController extends AbstractController
{
    /**
     * Permet de vérifier la validite d'un domaine
     *
     * @Route("http/checkDns", name="dnsChecker", methods={"POST"})
     * @param Request $request
     * @return int|string
     */
    public function checkDns(Request $request)
    {
        $test = "google.com";
        $output = new ParseResponse();
        if ($test){
            if ( checkdnsrr($test, 'ANY') ) {
                $output->setInput("Domaine Indisponible");
                return $output->returnApiResponse();
            }else{
                $output->setInput("Domaine disponible");
                return $output->returnApiResponse();
            }
        }else{
            $output->setInput(500);
            return $output->returnApiResponse();
        }
    }
}