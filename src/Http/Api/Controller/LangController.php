<?php
namespace App\Http\Api\Controller;

use App\Http\Api\Utils\ParseResponse;
use App\Utils\TranslationsUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("http/utils/lang")
 */
class LangController
{
    /**
     * Retourne l'action permettant de get la lang en js
     *
     * @Route("/get", name="Lang_get", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function getCurrentLang(Request $request)
    {
        return (new ParseResponse(TranslationsUtils::getCurrentLang()))->returnApiResponse();
    }

    /**
     * Paramètre la langue du site et retourne la langue demandé
     *
     * @Route("/set", name="Lang_set", methods={"POST"})
     * @return Response
     */
    public function setCurrentLang(): Response
    {
        if (isset($_POST['explode']['lang'])){
            $currentLang = ($_POST['explode']['lang'] ==! "")?$_POST['explode']['lang']:"FR";
            $session = $this->startSession();
            $session->set("lang", $currentLang);
            $_SESSION['currentLang'] = $currentLang;
            return (new ParseResponse($currentLang))->returnApiResponse();
        }else{
            return (new ParseResponse("error"))->returnApiResponse(500);
        }
    }

    /**
     * @return Session
     */
    private function startSession(){
        $session = new Session();
        try {
            $session->start();
        }catch (\Exception $e){

        }
        return $session;
    }
}