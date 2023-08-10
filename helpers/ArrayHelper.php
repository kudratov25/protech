<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov
 * Date: 11.12.2019
 * Time: 11:27
 */

namespace app\helpers;

use yii\helpers\ArrayHelper as YiiArrayHelper;

class ArrayHelper extends YiiArrayHelper
{
    /**
     * Kalitlarni saqlash uchun massivni birlashtirish operatsiyasini bajaradi.
     * Kirish massivining ofset va uzunlik bilan aniqlangan qismini almashtiradi
     *
     * @param array $input Kirish massivi.
     * @param int|string $offset Ofset - qo'shilish boshlanadigan indeks.
     * @param int|string $length Uzunlik.
     * @param array $replacement O'zgartirish massivi va standart boʻsh massiv.
     */
    public static function array_splice_assoc(
        &$input,
        $offset,
        $length,
        $replacement = []
    ) {
        $replacement = (array) $replacement;
        $key_indices = array_flip(array_keys($input));
        if (isset($input[$offset]) && is_string($offset)) {
            $offset = $key_indices[$offset];
        }
        if (isset($input[$length]) && is_string($length)) {
            $length = $key_indices[$length] - $offset;
        }

        $input =
            array_slice($input, 0, $offset, true) +
            $replacement +
            array_slice($input, $offset + $length, null, true);
    }
    /**
     * Kalitlarni saqlab, ma'lum bir pozitsiyada massivga qiymat kiritadi.
     *
     * @param array $array Kirish massivi.
     * @param int|string|null $key Kiritilgan qiymat uchun ishlatiladigan kalit. Standart 0, massiv hajmi + 1 dan foydalanadi.
     * @param mixed $value Kiritish uchun qiymat.
     * @param int|null $position Kiritish uchun joy. Standart false bo'lib va oxirida qo'shiladi.
     * @return array O'zgartirilgan massiv.
     */

    public static function push(&$array, $key = null, $value, $position = null)
    {
        if (!$position) {
            $position = count($array);
        }
        if (!$key) {
            $key = count($array) + 1;
        }
        $array =
            array_slice($array, 0, $position, true) + [
                $key => $value,
            ] +
            array_slice($array, $position, count($array) - 1, true);
        return $array;
    }
    /**
     * Bir nechta massivda shart mavjudligini tekshiradi.
     *
     * @param array $needleCondition Tekshirish sharti kalit-qiymat juftliklari qatori sifatida berilgan.
     * @param array $multipleArray Qidirish uchun massiv.
     * @return bool Massivda shart mavjudligi.
     */
    public static function inMultipleArray(
        $needleCondition,
        array $multipleArray
    ) {
        $needleCondition = array_map(
            function ($key, $value) {
                return "\$item->$key==$value";
            },
            array_keys($needleCondition),
            $needleCondition
        );

        $needleCondition = implode(" && ", $needleCondition);
        $needleCondition = "\$result = ($needleCondition);";

        foreach ($multipleArray as $item) {
            eval($needleCondition);
            return $result;
        }
    }
    /**
     * Kirish massivi qiymatlariga o'zgartirish funksiyasini qo'llash orqali yangi massiv yaratadi.
     *
     * @param array $array Kirish massivi.
     * @param mixed $to Qo'llash uchun o'zgartirish funksiya.
     * @param mixed|null $group Natijalarni guruhlash uchun ixtiyoriy parametr. Standart false.
     * @return array O'zgartirilgan massiv.
     */

    public static function mapWithoutKey($array, $to, $group = null)
    {
        $result = [];
        foreach ($array as $element) {
            $value = static::getValue($element, $to);
            if ($group !== null) {
                $result[static::getValue($element, $group)][] = $value;
            } else {
                $result[] = $value;
            }
        }
        return $result;
    }
}
