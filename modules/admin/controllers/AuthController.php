<?php

namespace app\modules\admin\controllers;

use app\models\User;
use app\models\UserLoginsLogModel;
use app\models\UserAttemptsModel;
use app\modules\admin\components\Controller;
use app\helpers\Html;
use Yii;
use app\components\RootController;

class AuthController extends RootController
{
    public $layout = "auth";

    /**
     * @return string|\yii\web\Response
     * @throws \yii\base\ExitException
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionLogin()
    {
        $this->view->title = t("Авторизоваться");

        $model = new User(["scenario" => User::SCENARIO_LOGIN]);

        // agar tizimga juda koʻp muvaffaqiyatsiz urinishlar boʻlsa, foydalanuvchi IP manzilini bloklash
        if (!UserAttemptsModel::check()) {
            $this->layout = "block";
            return $this->renderContent(
                "<h1 style='color:white;background-color:red;text-align:center;'>
            Ваш IP адрес " .
                    $_SERVER["REMOTE_ADDR"] .
                    " заблокирован в связи с большим количеством запросов.Пожалуйста, 
            попробуйте еще раз через 15 минут.</h1>"
            );
        }

        if ($model->runValidate() && $model->login()) {
            // log user session
            UserAttemptsModel::check(true);
            UserLoginsLogModel::insertLog();

           return $this->redirect(["/admin"]);

        }

        return $this->render("login", [
            "model" => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}
