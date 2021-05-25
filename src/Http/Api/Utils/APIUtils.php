<?php
namespace App\Http\Api\Utils;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("http/utils")
 */
class APIUtils{

    /**
     * @return Session
     */
    public static function startSession(SessionInterface $session){
        try {
            $session->start();
        }catch (\Exception $e){

        }
        return $session;
    }

}