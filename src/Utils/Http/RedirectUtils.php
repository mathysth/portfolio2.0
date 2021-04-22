<?php
namespace App\Utils\Http;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class RedirectUtils extends AbstractController{

    private $request;
    private $urlToRedirect;

    public function __construct(Request $request){
       $this->request = $request;
    }

    /**
     * @param mixed $urlToRedirect
     */
    public function setUrlToRedirect($urlToRedirect): void
    {
        $this->urlToRedirect = $urlToRedirect;
    }

    public function redirectToExistingUrl($url)
    {
      return $url;
    }

    public function redirectToExistingRoute($route,$param = null){
      return $this->redirectToRoute($route,$param);
    }

}
