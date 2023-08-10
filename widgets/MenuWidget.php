<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.07.2023
 * Time: 21:55
 */

namespace app\widgets;

use yii\base\Widget;
use app\helpers\Html;
use yii\helpers\Url;
use Yii;

class MenuWidget extends Widget
{
    public function run()
    {
        $currentRoute =
            Yii::$app->controller->id . "/" . Yii::$app->controller->action->id;

        $menuItems = [
            ["label" => Yii::t("common", "Главная"), "url" => Url::home()],
            [
                "label" => Yii::t("common", "О компании"),
                "url" => ["site/about"],
            ],
            [
                "label" => Yii::t("common", "Услуги"),
                "url" => ["site/our-services"],
            ],
            [
                "label" => Yii::t("common", "Проекты"),
                "url" => ["projects/index"],
            ],
            ["label" => Yii::t("common", "Новости"), "url" => ["news/index"]],
            [
                "label" => Yii::t("common", "Наша миссия"),
                "url" => ["site/our-mission"],
            ],
            [
                "label" => Yii::t("common", "Вакансии"),
                "url" => ["site/vacancies"],
            ],
            [
                "label" => Yii::t("common", "Контакты"),
                "url" => ["site/index", "#" => "map2-8a"],
            ],
        ];

        //CSS faqat shu widget ga
        $uniqueId = "navbarSupportedContent";

        $menuHtml =
            '<div id="' .
            $uniqueId .
            '" class="collapse navbar-collapse"><ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">';
        foreach ($menuItems as $item) {
            $isActive = Yii::$app->requestedRoute === $item["url"][0];
            $activeClass = $isActive ? "active" : "";
            $menuHtml .= '<li class="nav-item ' . $activeClass . '">';
            $menuHtml .= Html::a($item["label"], $item["url"], [
                "class" => "nav-link link text-primary display-4",
            ]);
            $menuHtml .= "</li>";
        }
        $menuHtml .= "</ul></div>";
        //qaysi menuda bo'lsa chiziqcha qo'yish
        $menuHtml .= "<style>#$uniqueId .nav-item.active a { text-decoration: underline; }</style>";

        return $menuHtml;
    }
}