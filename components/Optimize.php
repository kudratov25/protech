<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.07.2023
 * Time: 14:34
 */

namespace app\components;

use app\models\Advantage;
use app\models\AboutUs;
use app\models\Services;
use app\models\Projects;
use yii\data\Pagination;
use yii\db\Exception;
use Yii;
use yii\base\BaseObject;

class Optimize extends BaseObject
{
    public function simpleDataFetch()
    {
        $cache = Yii::$app->cache;
        $cacheKey = "simple-data-key";
        $data = $cache->get($cacheKey);

        if ($data === false) {
            try {
                $query = Advantage::find();

                $query->orderBy(["id" => SORT_ASC]);

                $countQuery = clone $query;
                $pages = new Pagination(["totalCount" => $countQuery->count()]);
                $models = $query
                    ->offset($pages->offset)
                    ->limit($pages->limit)
                    ->all();

                $data = ["models" => $models, "pages" => $pages];

                $cache->set($cacheKey, $data, 1800);
            } catch (Exception $e) {
                Yii::error(
                    "Не удалось получить данные: " . $e->getMessage(),
                    __METHOD__
                );
                $data = null;
            }
        }

        return $data;
    }

    public function actionFetchAllData()
    {
        $models = ["AboutUs", "Services", "Projects"];
        $data = [];

        foreach ($models as $model) {
            $class = "app\\models\\" . $model;

            try {
                $data[$model] = $class::find()->all();
            } catch (Exception $e) {
                Yii::error(
                    "Не удалось получить данные из {$model}: " .
                        $e->getMessage(),
                    __METHOD__
                );
                $data[$model] = [];
            }
        }

        return $this->render("view-all-data", ["data" => $data]);
    }
}
