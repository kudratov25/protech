<?php

namespace app\controllers;

use Yii;
use app\components\NotFoundHttpException;
use app\models\Projects;
use app\components\AccessControl;
use yii\filters\VerbFilter;

class ProjectsController extends BaseController
{
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
        $projects = Projects::find()->all();
        return $this->render("index", compact("projects"));
    }

    public function actionView($id)
    {
        $project = Projects::findOne($id);
        if ($project === null) {
            throw new NotFoundHttpException(
                "Запрашиваемая страница не существует."
            );
        }
        return $this->render("view", compact("project"));
    }
}
