<?php

$params = require __DIR__ . "/params.php";
$db = require __DIR__ . "/db.php";
require_once dirname(__DIR__) . "/config/configuration.php"; //Buferizatsiya
require dirname(__DIR__) . "/config/aliases.php"; //Aliyaslar
require dirname(__DIR__) . "/config/defines.php"; //O'zgarmaslar

use yii\web\UrlNormalizer;

$params = require __DIR__ . "/params.php";
$db = require __DIR__ . "/db.php";

$config = [
    "id" => "basic",
    "basePath" => dirname(__DIR__),
    "bootstrap" => ["log"],
    "timeZone" => "Asia/Tashkent",
    "as AppBehavior" => "app\behaviors\AppBehavior",
    "aliases" => [
        "@bower" => "@vendor/bower-asset",
        "@npm" => "@vendor/npm-asset",
    ],
    "modules" => [
        "admin" => [
            "class" => "app\modules\admin\Module",
            "layout" => "admin",
            "defaultRoute" => "admin/index/",
        ],
    ],
    "components" => [
        "request" => [
            "cookieValidationKey" => "0vXDyjMF-lsKNyDHqvF4dJSiwt7HkmdZ",
            "baseUrl" => "",
        ],
        "cache" => [
            "class" => "yii\caching\FileCache",
        ],
        "user" => [
            "identityClass" => "app\models\User",
            "class" => "app\components\RootUser",
            "idParam" => "__user_id",
            "enableAutoLogin" => false,
            "identityCookie" => ["name" => "_admin_", "httpOnly" => true],
            "loginUrl" => "/admin/auth/login",
            "expire" => 0, 
        ],

        "session" => [
            "name" => "basic",
            "class" => "yii\web\Session",
            "timeout" => 3600, // sessiya 1 soat
            "cookieParams" => [
                "httpOnly" => true,
                "lifetime" => 3600, //seansni 1 soat davomida faol ushlab turadi
            ],
        ],
        "errorHandler" => [
            "errorAction" => "site/error",
        ],
        "mailer" => [
            "class" => \yii\symfonymailer\Mailer::class,
            "viewPath" => "@app/mail",
            // send all mails to a file by default.
            "useFileTransport" => true,
        ],
        "log" => [
            "traceLevel" => YII_DEBUG ? 3 : 0,
            "targets" => [
                [
                    "class" => "yii\log\FileTarget",
                    "levels" => ["error", "warning"],
                ],
            ],
        ],
        "db" => $db,

        "i18n" => [
            "translations" => [
                "common*" => [
                    "class" => "yii\i18n\PhpMessageSource",
                    "basePath" => "@app/messages",
                ],
                "app*" => [
                    "class" => "yii\i18n\PhpMessageSource",
                    "basePath" => "@app/messages",
                ],
            ],
        ],
        "urlManager" => [
            "class" => "app\components\CustomUrlManager",
            "languages" => ["uz", "ru", "en"],
            "enableDefaultLanguageUrlCode" => true,
            "enableLanguageDetection" => true,
            "enablePrettyUrl" => true,
            "showScriptName" => false,
            "rules" => [
                "admin" => "admin/admin/index",
                "admin/" => "admin/admin/index",
                "about" => "site/about",
                "error" => "site/error",
                "index" => "site/index",
                "our-services" => "site/our-services",
                "our-service/<id:\d+>" => "site/our-service",
                "our-mission" => "site/our-mission",
                "thank-you" => "site/thank-you",
                "vacancies" => "site/vacancies",
                "news" => "news/index",
                "news/<id:\w+>" => "news/view",
                "projects" => "projects/index",
                "project/<id:\d+>" => "projects/view",
                "<action>" => "site/<action>",
            ],
        ],
    ],
    "params" => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config["bootstrap"][] = "debug";
    $config["modules"]["debug"] = [
        "class" => "yii\debug\Module",
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config["bootstrap"][] = "gii";
    $config["modules"]["gii"] = [
        "class" => "yii\gii\Module",
        // uncomment the following to add your IP if you are not connecting from localhost.
        // 'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
