<?php
namespace App\Utils;

use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class TranslationsUtils
{
    private static $instance;
    private static $sessionInstance;
    private $request;
    private $supportedLang = [
        "FR",
        "EN"
    ];

    /**
     * TranslationsUtils constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    /**
     * @return array
     */
    private function getJsonOfFilesInFolder(): array
    {
        $finder = new Finder();
        $filesFolders = $finder->files()->in(__DIR__."/../Translations/".self::getCurrentLang()."/");
        $json = [];

        if ($finder->hasResults()) {
            foreach ($filesFolders as $file) {
                array_push($json ,$file->getContents());
            }
        }
        return $json;
    }

    /**
     * @return mixed
     */
    public static function getCurrentLang(){
        $instance = null;
        if (!self::$instance){
            $instance = new Session();
            self::$instance = new Session();
        }else{
            $instance = self::$instance;
        }

        return (new Session())->get("lang");
    }

    /**
     * Retourne la chaine de caractères liée à la clé demandée
     *
     * @param $key
     * @param Request $request
     * @return mixed|string
     */
    public static function GetLangKey($key,Request $request){
        $instance = null;
        if (!self::$instance){
            $instance = new TranslationsUtils($request);
            self::$instance = new TranslationsUtils($request);
        }else{
            $instance = self::$instance;
        }
        $langJson = $instance->getJsonOfFilesInFolder();
        $error = false;
        for ($i = 0; $i < count($langJson);$i++){
            if (json_decode($langJson[$i]) == "" || json_decode($langJson[$i]) == null){
                    continue;
                }
            foreach (json_decode($langJson[$i]) as $k => $finalKey){
                if ($key == $k){
                    $error = false;
                    return $finalKey;
                }else{
                    $error = true;
                }
            }
        }
        if ($error){
            return "Error 500 : Key $key not found";
        }
    }
}
