<?php
namespace App\Twig;

use App\Utils\Http\RedirectUtils;
use App\Utils\TranslationsUtils;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppFunctionExtension extends AbstractExtension
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
     * @return TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('redirect', [$this, 'redirect']),
            new TwigFunction('translate', [$this, 'TranslateTextByKey']),
        ];
    }

    /**
     * @param $key
     * @return string
     */
    public function TranslateTextByKey($key): string
    {
        return TranslationsUtils::GetLangKey($key,$this->request);
    }

    public function redirect($url){
        return new RedirectResponse($url,302);
    }

}
