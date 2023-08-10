<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.07.2023
 * Time: 21:04
 */

namespace app\extensions\slug;

use app\components\BaseActiveRecord;
use yii\base\Behavior;
use yii\base\Event;
use yii\db\ActiveRecord;
use yii\helpers\Inflector;

/**
 * Class LangSluggableBehavior
 * @package app\extensions\slug
 */
class LangSluggableBehavior extends Behavior
{
    public $attribute;
    public $slugAttribute = "slug";

    /** @var
     * @deprecated
     */
    public $type;

    /** @var bool
     * @deprecated
     */
    public $appendId = true;

    /**
     * @var bool
     * @deprecated
     */
    public $appendLang = true;

    public function events()
    {
        return [
            ActiveRecord::EVENT_BEFORE_INSERT => "beforeInsert",
            ActiveRecord::EVENT_BEFORE_UPDATE => "beforeUpdate",
        ];
    }

    /**
     * @param $event Event
     */
    public function beforeInsert($event)
    {
        /** @var BaseActiveRecord $sender */
        $sender = $event->sender;

        $this->beforeSave($sender);
    }

    /**
     * @param $event Event
     */
    public function beforeUpdate($event)
    {
        /** @var BaseActiveRecord $sender */
        $sender = $event->sender;

        $this->beforeSave($sender);
    }

    /**
     * @param $model BaseActiveRecord
     */
    private function beforeSave($model)
    {
        $value = $model->getAttribute($this->attribute);
        if (is_array($value)) {
            foreach ($value as $k => $v) {
                $value[$k] = $this->generateSlug($model, $v, $k);
            }
        } else {
            $value = $this->generateSlug($model, $value);
        }

        $model->{$this->slugAttribute} = $value;
    }

    /**
     * @param $model BaseActiveRecord
     * @param $value
     * @param string $lang
     * @return string
     */
    public function generateSlug($model, $value, $lang = "")
    {
        $value = Inflector::slug($value);

        $suffix = "";

        return $value . ($suffix ? "{$suffix}" : "");
    }
}
