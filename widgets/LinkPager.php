<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 03.05.2023
 * Time: 14:50
 */

namespace app\widgets;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class LinkPager extends \yii\widgets\LinkPager
{
    /**
     * @var array
     */
    public $options = ["class" => "paginate", "tag" => "div"];

    public $linkContainerOptions = ["tag" => false];

    /**
     * @var array
     */
    public $prevPageCssClass = "pre_end";
    public $lastPageCssClass = "next_end";

    protected function renderPageButton(
        $label,
        $page,
        $class,
        $disabled,
        $active
    ) {
        $options = ["class" => $class === "" ? null : $class];
        if ($active) {
            Html::addCssClass($options, $this->activePageCssClass);
            $label = "<strong>" . $label . "</strong>";
        }
        if ($disabled) {
            Html::addCssClass($options, $this->disabledPageCssClass);
            return Html::tag("span", $label);
        }
        $linkOptions = $this->linkOptions;
        $linkOptions["data-page"] = $page;

        return Html::a(
            $label,
            $this->pagination->createUrl($page),
            $linkOptions
        );
    }
}
