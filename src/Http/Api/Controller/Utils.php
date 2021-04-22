<?php
namespace App\Http\Api\Controller;

use App\Http\Api\Utils\ParseResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("http/utils")
 */
class Utils{

    /**
     * @Route("/ajax", name="ajax_request")
     */
    public function ajaxAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {
            return (new ParseResponse(array('data' => 'this is a json response')))->returnApiJsonResponse();
        }
        return (new ParseResponse('This is not ajax!'))->returnApiResponse(400);
    }
}