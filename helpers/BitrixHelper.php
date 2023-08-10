<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 08.05.2023
 * Time: 00:01
 */

namespace app\helpers;

use Yii;
use yii\base\Component;
use yii\console\ExitCode;

class BitrixHelper extends Component
{
    public function createLead($name, $phone, $email, $utmSource)
    {
        try {
            $url = "https://[IMYa].bitrix24.ru/crm/configs/import/lead.php";
            $params = [
                "LOGIN" => Yii::$app->params["bitrix24Login"],
                "PASSWORD" => Yii::$app->params["bitrix24Password"],
                "TITLE" => str_replace(" ", "", $name),
                "PHONE_WORK" => str_replace(" ", "", $phone),
                "UTM_SOURCE" => str_replace(" ", "", $utmSource),
                "EMAIL_WORK" => str_replace(" ", "", $email),
                "ASSIGNED_BY_ID" => 15, //id
                "SOURCE_ID" => "WEB",
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            if ($httpCode !== 200) {
                $error = "Error: " . curl_error($ch);
                $this->infoError($error);
                throw new Exception($error);
            }

            curl_close($ch);

            return $response;
        } catch (Exception $e) {
            //xatolik ni print qilish
        }
    }
    //IP telefoniya uchun
    //Bitrix uchun call logni yuqoridagi function export qilib beradi
    public function makePhoneCall($ip, $port, $username, $password, $number)
    {
        $cmd = "asterisk -rx 'Action: Login\r\nUsername: $username\r\nSecret: $password\r\n\r\n'";
        $cmd .= " && sleep 1 && asterisk -rx 'Action: Originate\r\nChannel: SIP/$number\r\nExten: $number\r\nContext: from-internal\r\nPriority: 1\r\nCallerid: $username\r\nTimeout: 30000\r\n\r\n'";
        $cmd .= " && sleep 2 && asterisk -rx 'Action: Logoff\r\n\r\n'";

        $output = [];
        $status = null;
        exec("ssh $username@$ip -p $port '$cmd'", $output, $status);

        if ($status !== 0) {
            $error = implode("\n", $output);
            $this->infoError("Ошибка при звонке: $error");
            return "Ошибка при звонке: $error";
        }

        return "Звонок инициирован на $number";
    }
}
