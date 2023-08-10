<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov
 * Date: 11.02.2018
 * Time: 21:45
 */

namespace app\traits;

use app\helpers\Lang;
use Yii;
use yii\base\NotSupportedException;

trait ModelMultiLanguageTrait
{
    /**
     * @var bool $model->field qilganda, field in translateAttributes bo'lsa va
     * Agar TRUE bo'lsa:
     * - birinchi tizim tilidagi qiymatini ko'radi, agar bo'sh bo'lsa LANGUAGES {@see LANGUAGES} tartibdagi qiymat topilguncha qidiradi
     * Agar FALSE bo'lsa:
     * - empty bo'lsayam o'zini qiymatini qaytaradi
     */
    protected $translateAttributesReturnNonEmptyValue = true;

    /**
     * Multilang qiymatlarni ishlatish yoki ishlatmaslikni aniqlaydi
     * @var bool
     */
    protected static $useOriginalFieldValues = false;

    /**
     * {@see $this::$translateAttributesReturnNonEmptyValue} qiymatini TRUE qiladi
     */
    public function translateAttributesReturnNonEmptyValue()
    {
        $this->translateAttributesReturnNonEmptyValue = true;
    }

    /**
     * {@see $this::$translateAttributesReturnNonEmptyValue} qiymatini FALSE qiladi
     */
    public function translateAttributesReturnEmptyValue()
    {
        $this->translateAttributesReturnNonEmptyValue = false;
    }

    public static function setUseOriginalFieldValues($value = false)
    {
        $old = self::$useOriginalFieldValues;
        self::$useOriginalFieldValues = $value;
        return $old;
    }

    /**
     * {@see BaseActiveRecord::translateAttributes()} dagi qiymatdan kelib chiqib
     * FIELD ni tizim tilidagi vaqriantini yoki FIELD_[UZ|RU] bo'lsa
     * shu tildagi variantini qaytaradi
     * @param string $name
     * @return mixed|string
     */
    public function __get($name)
    {
        if (self::$useOriginalFieldValues) {
            return parent::__get($name);
        }

        $translateAttributes = static::translateAttributes();

        list($_name, $suffix) = $this->parseSuffix($name);

        if (in_array($_name, $translateAttributes)) {
            $name = $_name;
            $values = parent::__get($name);
            if (!is_array($values)) {
                return $values;
            }

            //suffix bilan kelsi, faqat o'zi qaytadi
            if ($suffix) {
                return array_key_exists($suffix, $values)
                    ? $values[$suffix]
                    : "";
            }

            //tizim tilini tekshiramiz
            $value = "";
            if (array_key_exists(Yii::$app->language, $values)) {
                $value = $values[Yii::$app->language];
            }

            if (is_array($value)) {
                return $values;
            }

            return $value;
        }
        return parent::__get($name);
    }

    /**
     * Agar $name translateAttributes ichidagi qiymat kelsa va
     * $value is_array bo'lsa, fieldni shu $value ni qiymatiga almashtiradi.
     * $value array bo'lmasa, tizim tilidagi qiymatni o'zgartiradi
     *
     * Agar $name_[uz|ru|...] kabi til prefixni bilan kelsa, faqat shu tilga aloqadorini
     * o'zgartiradi
     *
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        list($_name, $suffix) = $this->parseSuffix($name);
        $translateAttributes = static::translateAttributes();

        if (!$suffix) {
            return parent::__set($name, $value);
        }

        if (in_array($_name, $translateAttributes)) {
            $name = $_name;
            $values = parent::__get($name);
            $values[$suffix] = $value;
            $value = $values;
        }

        parent::__set($name, $value); // TODO: Change the autogenerated stub
    }

    /**
     * $name dan til prefixni suffix bo'lib kelgan bo'lsa ajratib qaytaradi
     * field_name ko'rinishidagilarni o'z holicha qaytaradi
     *
     * @param $name
     * @return array
     */
    private function parseSuffix($name)
    {
        $pos = strrpos($name, Lang::FIELD_LANG_SEPARATOR);
        $suffix = $pos === false ? "" : substr($name, $pos + 1);

        if (Lang::prefixExists($suffix)) {
            //_uz, _ru lar kelsa
            $name = substr($name, 0, $pos);
        }
        //agar _ chiziq kelsa leking LANG_PREFIX bo'lmasa, pustoy qilamiz
        else {
            $suffix = "";
        }

        return [$name, $suffix];
    }

    /**
     * Bazadagi qaysi COLUMN til bo'yicha chiqishi kerak
     * bo'lsa, ushbu funksiyada qaytariladi.
     *
     * @return array
     */
    public static function translateAttributes()
    {
        return [];
    }

    public static function translateFields()
    {
        throw new NotSupportedException();
    }
}