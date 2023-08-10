<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 18:48
 */

namespace app\components;

use app\components\NotFoundHttpException;
use Yii;
use app\components\RootBaseController;
use yii\filters\AccessControl;
use yii\ForbiddenHttpException;

class RootController extends RootBaseController
{
    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            "access" => [
                "class" => AccessControl::class,
                "rules" => [
                    [
                        "actions" => ["login", "logout"],
                        "allow" => true,
                        "roles" => ["?"],
                    ],
                    [
                        "allow" => true,
                        "roles" => ["@", "admin"],
                    ],
                ],
            ],
        ];
    }
    /**
     * @param \yii\base\Action $action
     * @return bool
     * @throws NotFoundHttpException
     * @throws \yii\web\BadRequestHttpException
     */

    public function beforeAction($action)
    {
        if (!Yii::$app->user->isGuest) {
            $controllerId = Yii::$app->controller->id;
            $actionId = Yii::$app->controller->action->id;
            //root ga allow hamma c id ga
            if (Yii::$app->user->identity->role_id == 1) {
                return parent::beforeAction($action);
            }
            if (
                $actionId === "logout" ||
                ($controllerId === "admin" &&
                    ($actionId === null ||
                        $actionId === "change-password" ||
                        $actionId === "index"))
            ) {
                return parent::beforeAction($action);
            }
            if (!RootUser::access("{$controllerId}/{$actionId}")) {
                Yii::$app->session->setFlash(
                    "error",
                    "У вас недостаточно прав для выполнения данного действия"
                );
                return $this->redirect(["admin/index"]);
            }
        }

        return parent::beforeAction($action);
    }
}
