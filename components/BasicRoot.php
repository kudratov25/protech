<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 30.04.2023
 * Time: 19:02
 */

namespace app\components;

use Yii;
use ReflectionClass;
use app\models\UserRolesModel;

abstract class BasicRoot
{
    private const CONSTANTS = [];

    //o`zgarmas va ssenariy

     $constants = \app\components\ScenariosRootUser::getConstants();

    public static function getList(): array
    {
        return self::getConstantsOfCalledClass();
    }

    public static function getLabel(string $value): string
    {
        return array_search($value, self::getList(), true);
    }

    public static function getLabels(): array
    {
        $labels = [];

        foreach (self::getList() as $constantValue) {
            $labels[$constantValue] = static::getLabel($constantValue);
        }

        return $labels;
    }

    public static function hasConstantWithValue(mixed $value): bool
    {
        return in_array($value, self::getList(), true);
    }

    public static function className(): string
    {
        return "\\" . static::class;
    }

    public static function getConstantDeclaration(mixed $value): ?string
    {
        $key = array_search($value, self::getList(), true);

        if (!$key) {
            return null;
        }

        return "\\" . static::class . "::" . $key;
    }

    private static function getConstantsOfCalledClass(): array
    {
        $calledClass = static::class;

        if (!array_key_exists($calledClass, self::CONSTANTS)) {
            $reflectionClass = new \ReflectionClass($calledClass);
            self::CONSTANTS[$calledClass] = $reflectionClass->getConstants();
            unset($reflectionClass);
        }

        return self::CONSTANTS[$calledClass];
    }
}
