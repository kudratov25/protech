<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 14:01
 */

define("IS_LOCAL_SERVER", false);
defined("RESENT_TIMEOUT") or define("RESENT_TIMEOUT", 120);
defined("NO_REPLY_EMAIL") or define("NO_REPLY_EMAIL", "noreply@protech.uz");
define('OFFICE_IP', ['94.154.10.84/32', '127.0.0.1/32']);


const PROJECT_HOST_INFO = "";
const WEBSITE_SCHEMA = "http";

const LANG_KEY = "lang";

const DEFAULT_LANGUAGE = "ru";
const SYSTEM_DEFAULT_LANGUAGE = "ru";

const LANG_RU = "ru";
const LANG_UZ = "uz";
const LANG_EN = "en";

const LANGUAGES = [
    LANG_UZ => "O`zbek",
    LANG_RU => "Русский",
    LANG_EN => "English",
];
if (!isset($GLOBALS["LANGUAGES"])) {
    $GLOBALS["LANGUAGES"] = [
        LANG_UZ => "O`zbek",
        LANG_RU => "Русский",
        LANG_EN => "English",
    ];
}

defined("EXTRA_LANGUAGES") or
    define("EXTRA_LANGUAGES", [
        LANG_EN => "English",
    ]);

defined("EXTRA_LANGUAGES_SHORT") or
    define("EXTRA_LANGUAGES_SHORT", [
        LANG_EN => "Eng",
    ]);

if (!isset($GLOBALS["LANGUAGES_SHORT"])) {
    $GLOBALS["LANGUAGES_SHORT"] = [
        LANG_UZ => "O'zb",
        LANG_RU => "Руc",
        LANG_EN => "Eng",
    ];
}
