<?php
namespace App\Http\Api\Utils;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ParseResponse{
    private $input;

    /**
     * ParseResponse constructor.
     * @param $input
     */
    public function __construct($input = null)
    {
        $this->input = $input;
    }

    public function setInput($input){
        $this->input = $input;
    }

    public function returnApiResponse($status = 200): Response{
        return new Response($this->input,$status);
    }

    public function returnApiJsonResponse($status = 200): JsonResponse
    {
        return new JsonResponse($this->input,$status);
    }
}