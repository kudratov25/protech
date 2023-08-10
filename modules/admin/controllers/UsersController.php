<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 16:51
 */

namespace app\modules\admin\controllers;

use Yii;
use app\components\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use app\helpers\Database;
use app\helpers\Html;
use app\models\User;
use yii\helpers\ArrayHelper;
use app\components\AccessControl;
use yii\filters\VerbFilter;
use app\components\RootController;
use app\models\UserRolesModel;
use app\components\ScenariosRootUser;
/**
 * Class UsersController
 * @package app\modules\admin\controllers
 */
class UsersController extends RootController
{
    public static $modelName = User::class;
    public $layout = "admin";

    public function behaviors()
    {
        return [
            "access" => [
                "class" => AccessControl::className(),
                "rules" => [
                    [
                        "actions" => [
                            "index",
                            "view",
                            "create",
                            "update",
                            "delete",
                            "add",
                            "edit",
                            "change-password",
                        ],
                        "allow" => true,
                        "roles" => ["@"],
                    ],
                    [
                        // other rules
                    ],
                ], // rules
            ], // access

            "verbs" => [
                "class" => VerbFilter::className(),
                "actions" => [
                    "delete" => ["post"],
                ],
            ], // verbs
        ]; // return
    } // behaviors

    /**
     * @return string
     */
    public function actionIndex()
    {
        $data = new ActiveDataProvider([
            "query" => static::$modelName::find(),
            "pagination" => [
                "pageSize" => 20,
            ],
        ]);

        return $this->render("index", [
            "data" => $data,
        ]);
    }

    /**
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\base\ExitException
     */
    public function actionAdd()
    {
        $user = new User();
        $user->created_at = date("Y-m-d H:i:s");
        $user->setScenario(User::SCENARIO_ADD);
        $user->ajaxValidation();
        $model = static::$modelName;
        $modelInstance = new $model();

        return $this->editBlock($modelInstance);
    }
    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\base\ExitException
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        return $this->editBlock($model);
    }

    /**
     * @param $model
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\base\ExitException
     */
    public function editBlock($model)
    {
        /** @var $model User */
        $model->setScenario(static::$modelName::SCENARIO_EDIT);
        if ($model->runValidate()) {
            Database::transaction(function () use (&$model, &$parent) {
                if (!empty($model->password)) {
                    $model->password = Yii::$app->security->generatePasswordHash(
                        $model->password
                    );
                } else {
                    $model->password = $model->getOldAttribute("password");
                }

                $model->save(false);
            });

            Html::alertSuccess(t("Данные успешно сохранено."));
            return $this->redirect(["index"]);
        }

        $roles = ArrayHelper::map(UserRolesModel::find()->all(), "id", "name");

        $model->password = "";
        return $this->render("edit", [
            "model" => $model,
            "roles" => $roles,
        ]);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionStatus($id)
    {
        /** @var User $model */
        $model = $this->findModel($id);
        Database::transaction(function () use (&$model) {
            $model->is_block = !$model->is_block;
            $model->save(false);
        });

        Yii::$app->session->setFlash("success", t("Данные успешно сохранено."));

        return $this->redirectTo(["index"]);
    }

    /**
     * @param $id
     * @return mixed
     * @throws NotFoundHttpException
     */
    private function findModel($id)
    {
        $model = static::$modelName
            ::find()
            ->where(["id" => $id])
            ->one();
        if (!$model) {
            throw new NotFoundHttpException();
        }

        return $model;
    }
}
