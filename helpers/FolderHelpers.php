<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.02.2023
 * Time: 02:27
 */

namespace app\helpers;

use Yii;
use yii\web\UploadedFile;
use app\helpers\Time;

class FolderHelpers
{
    /**
     *
     * @param string $date
     * @return string
     */
    public static function dirName($date)
    {
        $year = date("Y", strtotime($date));
        $month = date("m", strtotime($date));

        $year_dir_name =
            Yii::getAlias("@webroot") .
            DIRECTORY_SEPARATOR .
            "uploads" .
            DIRECTORY_SEPARATOR .
            "user" .
            DIRECTORY_SEPARATOR .
            $year;
        $month_dir_name =
            $year_dir_name . DIRECTORY_SEPARATOR . $month . DIRECTORY_SEPARATOR;

        if (!is_dir($year_dir_name)) {
            mkdir($year_dir_name, 0755, true);
        }

        if (!is_dir($month_dir_name)) {
            mkdir($month_dir_name, 0755, true);
        }

        return "/uploads/user/" . $year . "/" . $month . "/";
    }
}
