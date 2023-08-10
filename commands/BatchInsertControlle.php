<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.07.2023
 * Time: 23:42
 */

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\models\Clients;

//bu clientlar rasmini hammasini upload qilish uchun kerak. 
// ko'p datali modellar da ham foydalansak bo'ladi
class BatchInsertController extends Controller
{
    public function actionIndex()
    {
        //rasm papkasi
        $directory = "uploads/clients/2023-07-27/";

        $files = glob(
            Yii::getAlias("@app/web/" . $directory . "*.{jpg,png,gif}"),
            GLOB_BRACE
        );

        foreach ($files as $i => $file) {
            //model
            $client = new Clients();

            $client->image = str_replace(Yii::getAlias("@app/web/"), "", $file);
            $client->name = strval($i + 2);

            if (!$client->save()) {
                Yii::error(
                    "Failed to save client: " . print_r($client->errors, true)
                );
            }
        }
    }
}
