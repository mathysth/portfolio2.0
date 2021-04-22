<?php

namespace App\Twig;

use Symfony\Component\HttpFoundation\Request;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppFilterExtension extends AbstractExtension
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('setApiCorrectLinkFormat', [$this, 'setApiCorrectLinkFormat']),
        ];
    }


    public function setApiCorrectLinkFormat($input)
    {
        $output = "";
        $array = explode("/", $input);
        for ($i = 0; $i < count($array); $i++) {
            if ($i < 2) {
                $i = 2;
            }
            if ($i == 2) {
                $output .= $array[$i];
            } else {
                $output .= '/' . $array[$i];
            }
        }
        return $output;
    }

}
