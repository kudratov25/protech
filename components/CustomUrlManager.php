<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 25.07.2023
 * Time: 3:18
 */

namespace app\components;

use codemix\localeurls\UrlManager as BaseUrlManager;

$lang = DEFAULT_LANGUAGE;

class CustomUrlManager extends BaseUrlManager
{
    public function createUrl($params)
    {
        $url = parent::createUrl($params);

        if (isset($params[0]) && $params[0] == "admin") {
            $url = "/admin";
        }
        
        $url = str_replace("/site/", "/", $url);

        return $url;
    }
}
