<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 17:08
 */

namespace app\modules\admin\controllers;

use app\models\UserRolesModel;
use app\models\UserPermissionsModel;
use Yii;
use app\components\RootController;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use app\helpers\Html;
use app\components\ActiveDataProvider;
use app\helpers\Database;
use yii\web\NotFoundHttpException;

/**
 * Class RolesController
 * @package app\controllers
 */
class RolesController extends RootController
{
    public function init()
    {
        parent::init();
    }

    /**
     * @param int $id
     * @return string|\yii\web\Response
     */
    public function actionPermission($id = 1)
    {
        $roles = UserRolesModel::find()->all();

        $allperms = $this->findActions();
        $userperms = ArrayHelper::map(
            UserPermissionsModel::find()
                ->where(["role_id" => $id])
                ->all(),
            "route",
            "access"
        );
        if (isset($_POST["save"])) {
            $_POST["perms"] =
                isset($_POST["perms"]) && is_array($_POST["perms"])
                    ? $_POST["perms"]
                    : [];

            foreach ($allperms as $class => $data) {
                foreach ($data as $d) {
                    $access = 0;
                    if (isset($_POST["perms"][$d])) {
                        $access = $_POST["perms"][$d] ? 1 : 0;
                    }

                    UserPermissionsModel::updatePermission($id, $d, $access);
                }
            }

            Yii::$app->session->setFlash("success", t("Успешно сохранено."));
            return $this->redirect(["permission", "id" => $id]);
        }

        return $this->render("permission", [
            "allperms" => $allperms,
            "userperms" => $userperms,
            "roles" => $roles,
            "id" => $id,
        ]);
    }
    private function findActions(): array
    {
        $controllers = \yii\helpers\FileHelper::findFiles(
            Yii::getAlias("@app/modules/admin/controllers"),
            ["recursive" => true]
        );
        $actions = [];
        foreach ($controllers as $controller) {
            $contents = file_get_contents($controller);
            $controllerId = Inflector::camel2id(
                substr(basename($controller), 0, -14)
            );
            $controllerIdFull = ucfirst($controllerId) . "Controller";
            $actions[$controllerIdFull] = [];
            preg_match_all(
                "/public function action(\w+?)\(/",
                $contents,
                $result
            );
            foreach ($result[1] as $action) {
                $actionId = Inflector::camel2id($action);
                $route = $controllerId . "/" . $actionId;
                $actions[$controllerIdFull][] = $route;
            }
        }
        asort($actions);

        return $actions;
    }

    public function actionIndex()
    {
        $data = new ActiveDataProvider([
            "query" => UserRolesModel::find(),
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
     * @throws \yii\base\ExitException
     */
    public function actionAdd()
    {
        return $this->edit(new UserRolesModel());
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\base\ExitException
     */
    public function actionUpdate($id)
    {
        $model = UserRolesModel::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException();
        }
        return $this->edit($model);
    }

    /**
     * @param UserRolesModel $model
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\base\ExitException 
     */
    public function edit(UserRolesModel $model)
    {
        $model->setScenario(UserRolesModel::SCENARIO_EDIT);
        if ($model->runValidate()) {
            Database::transaction(function () use (&$model, &$parent) {
                $model->save(false);
            });

             Yii::$app->session->setFlash("success", t("Успешно сохранено."));
            return $this->redirect(["index"]);
        }

        return $this->render("edit", [
            "model" => $model,
        ]);
    }
}
