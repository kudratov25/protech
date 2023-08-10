<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 24.07.2023
 * Time: 23:22
 */

namespace app\components;

use yii\db\Command;
use Yii;

class BaseCommand extends Command
{
    public static $queryList = [];
    private $prepareCalled = false;
    public static $skipStack = [];

    protected function internalExecute($rawSql)
    {
        if (!YII_DEBUG || reset(self::$skipStack)) {
            return parent::internalExecute($rawSql);
        }

        array_unshift(self::$skipStack, true);

        $this->prepareCalled = false;
        $startTime = microtime(true);
        $result = parent::internalExecute($rawSql);
        $runTime = microtime(true) - $startTime;

        $token = hash("sha256", "mysql::" . $rawSql);

        if (!array_key_exists($token, self::$queryList)) {
            self::$queryList[$token] = [
                "type" => "mysql",
                "query" => $rawSql,
                "trace" => "",
                "counter" => 0,
                "runtime" => $runTime,
                "time" => time(),
            ];
        }

        self::$queryList[$token]["trace"] = self::appendTrace(
            self::$queryList[$token]["trace"]
        );
        self::$queryList[$token]["runtime"] = max(
            $runTime,
            self::$queryList[$token]["runtime"]
        );
        self::$queryList[$token]["time"] = time();
        self::$queryList[$token]["counter"]++;

        array_shift(self::$skipStack);

        return $result;
    }

    public function prepare($forRead = null)
    {
        $this->prepareCalled = true;
        return parent::prepare($forRead);
    }

    public static function appendTrace($old)
    {
        $trace = [];
        $root = Yii::$app->basePath;
        foreach (debug_backtrace() as $data) {
            $line =
                (isset($data["file"])
                    ? substr($data["file"], strlen($root))
                    : "") .
                ":" .
                (isset($data["line"]) ? $data["line"] : "") .
                " :: " .
                (isset($data["function"]) ? $data["function"] : "");
            if (
                strpos(
                    $line,
                    DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR
                ) !== false
            ) {
                continue;
            }

            $trace[] = $line;
        }

        $trace = implode("\n", $trace);
        $separator = "\n\n\n";
        $traces = explode($separator, $old);
        foreach ($traces as $t) {
            if ($t == $trace) {
                return $old;
            }
        }

        return $old . $separator . $trace;
    }
}
