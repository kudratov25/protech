<?php

namespace app\controllers;

use app\models\News;
use app\components\AccessControl;
use yii\filters\VerbFilter;

class NewsController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            "access" => [
                "class" => AccessControl::class,
                "only" => ["logout"],
                "rules" => [
                    [
                        "actions" => ["logout"],
                        "allow" => true,
                        "roles" => ["@"],
                    ],
                ],
            ],
            "verbs" => [
                "class" => VerbFilter::class,
                "actions" => [
                    "logout" => ["post"],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $news = News::find()->all();
        return $this->render('index', compact('news'));
    }
    public function actionView($id)
    {
        $new=News::findOne($id);
        return $this->render('view', compact('new'));
    }
}
