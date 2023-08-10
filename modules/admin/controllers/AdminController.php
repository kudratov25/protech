<?php

namespace app\modules\admin\controllers;

use app\models\Application;
use app\components\NotFoundHttpException;
use yii\web\Controller;
use app\models\User;
use app\helpers\Html;
use Yii;
use app\components\RootController;

use function PHPSTORM_META\type;
use function PHPUnit\Framework\isType;

/**
 * Admin controller for the `admin` module
 */
class AdminController extends RootController
{
    /**
     * Renders the index view for the module
     * @return string
     */
  
    public function actionIndex()
    {
        $messageCount = Application::find()
            ->where(["status" => 0])
            ->count();
        return $this->render("index", compact("messageCount"));
    }
    
    public function actionError()
    {
        return $this->render("error", [
            "name" => "Код ошибки 404",
            "message" => "Страница не найдена",
            "title" => "Не найдено",
        ]);
    }
    public function actionChangePassword()
    {
        $model = new User();
        $model->setScenario(User::SCENARIO_CHANGE_PASSWORD);
        if ($model->runValidate()) {
            $transaction = Yii::$app->db->beginTransaction();
            try {
                /** @var User $user */
                $user = Yii::$app->user->identity;

                $user->password = Yii::$app->security->generatePasswordHash(
                    $model->new_password
                );
                $user->save(false);

                $transaction->commit();
                Yii::$app->session->setFlash(
                    "success",
                    t("Пароль успешно изменен.")
                );
            } catch (\Exception $e) {
                Html::alertTransactionException($e);
                $transaction->rollBack();
            }

            return $this->redirect(["change-password"]);
        }

        return $this->render("change-password", [
            "model" => $model,
        ]);
    }
}
