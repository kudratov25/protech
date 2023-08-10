<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 24.07.2023
 * Time: 23:04
 */

namespace app\components;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\widgets\ActiveForm;
use yii\base\Model;
use app\helpers\Lang;
use app\traits\ValidatorTrait;
use app\traits\ModelMultiLanguageTrait;;

class BaseActiveRecord extends \yii\db\ActiveRecord
{
    use ValidatorTrait;
    use ModelMultiLanguageTrait;

    /**
     * @return mixed
     */
    public static function validateFull()
    {
        $args = func_get_args();
        call_user_func_array([static::class, "validateAjax"], $args);
        return call_user_func_array([static::class, "validatePost"], $args);
    }

    /**
     * @throws NotFoundHttpException
     * @throws \yii\base\ExitException
     *  @deprecated $model->runValidate ishlatilsin.
     */
    public function ajaxValidation()
    {
        self::validateAjax($this);
    }

    /**
     * Agar kelayotgan request AJAX bo'lsa,
     * ushbu modelga yuklab validatsiyadan o'tkazadi va
     * clientga jo'natadi.
     *
     * Qo'llanishi:
     * $model->ajaxValidation()
     * @param array $list
     * @throws NotFoundHttpException Agar ma'lumotlar yuklanishda xatolik yuz bersa
     * @throws NotFoundHttpException
     * @throws \yii\base\ExitException
     */
    public static function validateAjax()
    {
        if (!Yii::$app->request->isPost) {
            return;
        }

        if (!Yii::$app->request->isAjax) {
            return;
        }
        if (Yii::$app->request->isPjax) {
            return;
        }

        Yii::$app->response->format = Response::FORMAT_JSON;

        $models = func_get_args();
        foreach ($models as $model) {
            if (is_array($model)) {
                if (!self::loadMultiple($model, Yii::$app->request->post())) {
                    throw new NotFoundHttpException();
                }
            } else {
                /** @var $model BaseActiveRecord */
                if (!$model->load(Yii::$app->request->post())) {
                    throw new NotFoundHttpException();
                }
            }
        }

        $result = [];
        foreach ($models as $model) {
            if (is_array($model)) {
                $result = array_merge(
                    ActiveForm::validateMultiple($model),
                    $result
                );
            } else {
                $result = array_merge(ActiveForm::validate($model), $result);
            }
        }

        Yii::$app->response->data = $result;
        Yii::$app->end();
    }

    /**
     * @throws NotFoundHttpException
     * @deprecated $model->runValidate ishlatilsin.
     */
    public function postValidation()
    {
        if (!Yii::$app->request->isPost) {
            return false;
        }

        return $this->load(Yii::$app->request->post()) && $this->validate();
    }
    /**
     * Agar kelayotgan request POST bo'lsa
     * ushbu modelga yuklab validatsiyadan o'tkazadi
     * Agar hammasi to'g'ri bo'lsa TRUE aks holda FALSE qaytaradi.
     *
     * @return bool
     * @throws NotFoundHttpException
     */
    public static function validatePost()
    {
        if (!Yii::$app->request->isPost) {
            return false;
        }

        $models = func_get_args();

        foreach ($models as $model) {
            if (is_array($model)) {
                if (!self::loadMultiple($model, Yii::$app->request->post())) {
                    throw new NotFoundHttpException();
                }
            } else {
                /** @var $model BaseActiveRecord */
                if (!$model->load(Yii::$app->request->post())) {
                    throw new NotFoundHttpException();
                }
            }
        }

        foreach ($models as $model) {
            if (is_array($model)) {
                if (!Model::validateMultiple($model)) {
                    return false;
                }
            } else {
                if (!$model->validate()) {
                    return false;
                }
            }
        }
        return true;
    }
    public function s($scenarios)
    {
        foreach ($scenarios as $scenario => $fields) {
            $scenarios[$scenario] = $this->f($fields);
        }

        return $scenarios;
    }
    /**
     * $fields dagi massivni tekshirib, agar ichida
     * {@see BaseActiveRecord::translateAttributes()} ga mos kelgan
     * field kelsa, shularni {@see LANGUAGES} dagi tillar bo'yicha
     * oxiriga suffix qo'yib qaytaradi
     *
     * @param $fields
     * @return array
     */
    protected function f($fields)
    {
        $result = [];
        foreach ($fields as $field) {
            if (in_array($field, static::translateAttributes())) {
                $result = array_merge($result, Lang::fields($field));
            } else {
                $result[] = $field;
            }
        }

        return $result;
    }
    public function r()
    {
        $rules = $trimAttrs = [];
        $args = func_get_args();
        foreach ($args as $arg) {
            $rules = array_merge($rules, $arg);
        }

        foreach ($rules as $n => $rule) {
            if (!is_array($rule[0])) {
                $fields = [$rule[0]];
            } else {
                $fields = $rule[0];
            }

            $rule[0] = $this->f($fields);

            if ($rule[1] == "string") {
                $rule["tooLong"] =
                    $rule["tooLong"] ??
                    t(
                        "Поле должен содержать максимум {max, plural, =1{# символ} one{# символов} few{# символа} many{# символов} other{# символов}}."
                    );

                $rule["tooShort"] =
                    $rule["tooSmall"] ??
                    t(
                        "Поле должен содержать минимум {min, plural, =1{# символ} one{# символов} few{# символа} many{# символов} other{# символов}}."
                    );

                $rule["message"] =
                    $rule["message"] ??
                    t("Значение «{attribute}» должно быть строкой.");

                $trimAttrs = array_merge($trimAttrs, $rule[0]);
            } elseif ($rule[1] == "required" && !isset($rule["message"])) {
                $rule["message"] = isset($rule["combo"])
                    ? t("Выберите параметр")
                    : t("Поле обязательно для заполнения");
                unset($rule["combo"]);
            } elseif (
                in_array($rule[1], [
                    "match",
                    "in",
                    "exists",
                    "boolean",
                    "date",
                    "time",
                ]) &&
                !isset($rule["message"])
            ) {
                $rule["message"] = t("Неверное значение");
            } elseif (in_array($rule[1], ["integer", "number", "double"])) {
                if ($rule[1] == "integer") {
                    $rule["message"] =
                        $rule["message"] ??
                        t("Значение «{attribute}» должно быть целым числом.");
                } else {
                    $rule["message"] =
                        $rule["message"] ??
                        t("Значение «{attribute}» должно быть числом.");
                }

                $rule["tooSmall"] =
                    $rule["max"] ??
                    t("Значение «{attribute}» должно быть не меньше {min}.");

                $rule["tooBig"] =
                    $rule["message"] ??
                    t("Значение «{attribute}» не должно превышать {max}.");
            } elseif (in_array($rule[1], ["url"]) && !isset($rule["message"])) {
                $rule["message"] = t("Неверный адрес URL");
            } elseif (
                in_array($rule[1], ["email"]) &&
                !isset($rule["message"])
            ) {
                $rule["message"] = t("Неверный адрес e-mail");
            } elseif (
                in_array($rule[1], ["compare"]) &&
                !isset($rule["message"])
            ) {
                $rule["message"] = t("Значение не совпадает");
            } elseif (
                in_array($rule[1], ["file", 'base\validators\FileValidator'])
            ) {
                $rule["message"] =
                    $rule["message"] ?? t("Ошибка загрузки файла");

                $rule["uploadRequired"] =
                    $rule["uploadRequired"] ?? t("Пожалуйста загрузите файл");

                $rule["wrongExtension"] =
                    $rule["wrongExtension"] ??
                    t("Загрузить можно только форматы: {extensions}");

                $rule["tooBig"] =
                    $rule["tooBig"] ??
                    t("Размер файла не должен превышать {formattedLimit}.");

                $rule["tooSmall"] =
                    $rule["tooSmall"] ??
                    t("Размер файла не должен быть меньше {formattedLimit}.");

                $rule["wrongMimeType"] =
                    $rule["wrongMimeType"] ??
                    t("Загрузить можно только форматы: {mimeTypes}");
            } elseif (in_array($rule[1], ["image"])) {
                $rule["message"] =
                    $rule["message"] ?? t("Ошибка загрузки файла");

                $rule["wrongExtension"] =
                    $rule["wrongExtension"] ??
                    t("Загрузить можно только форматы: {extensions}");

                $rule["tooBig"] =
                    $rule["tooBig"] ??
                    t("Размер файла не должен превышать {formattedLimit}.");

                $rule["tooSmall"] =
                    $rule["tooSmall"] ??
                    t("Размер файла не должен быть меньше {formattedLimit}.");

                $rule["wrongMimeType"] =
                    $rule["wrongMimeType"] ??
                    t("Загрузить можно только форматы: {mimeTypes}");

                $rule["uploadRequired"] =
                    $rule["uploadRequired"] ?? t("Пожалуйста загрузите фото");

                $rule["notImage"] =
                    $rule["notImage"] ??
                    t("Вы загрузили фото неверного формата");

                $rule["underWidth"] =
                    $rule["underWidth"] ??
                    t(
                        "Ширина фото слишком маленькая. Ширина не должна быть меньше {limit, number} пикс."
                    );

                $rule["underHeight"] =
                    $rule["underHeight"] ??
                    t(
                        "Высота фото слишком маленькая. Высота не должна быть меньше {limit, number} пикс."
                    );

                $rule["overWidth"] =
                    $rule["overWidth"] ??
                    t(
                        "Ширина фото слишком большая. Ширина не должна быть больше {limit, number} пикс."
                    );

                $rule["overHeight"] =
                    $rule["overHeight"] ??
                    t(
                        "Высота фото слишком большая. Высота не должна быть больше {limit, number} пикс."
                    );
            }

            $rules[$n] = $rule;
        }

        array_unshift($rules, [$trimAttrs, "trim"]);

        return $rules;
    }

    /**
     * @return mixed
     */
    public function runValidate()
    {
        $args = func_get_args();
        array_unshift($args, $this);
        return call_user_func_array([static::class, "validateFull"], $args);
    }
}
