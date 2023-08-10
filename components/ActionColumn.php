<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 24.07.2023
 * Time: 23:01
 */
namespace app\components;

use app\helpers\Html;
use app\components\BaseActionColumn;

class ActionColumn extends BaseActionColumn
{
    public function init()
    {
        parent::init();
        $this->buttons = [
            "update" => function ($url, $model, $key) {
                return Html::a(
                    t("Редактировать"),
                    ["update", "id" => $model->id],
                    ["class" => "btn btn-primary btn-xs"]
                );
            },
            "delete" => function ($url, $model, $key) {
                return Html::a(t("Удалить"), null, [
                    "class" => "btn btn-danger btn-xs confirm",
                    "data-confirm" => t(
                        "Вы действительно хотите удалить \"{f}\"?",
                        ["f" => Html::encode($model->id)]
                    ),
                ]);
            },
        ];

        $this->template = "{delete} {update}";
    }
}
