<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 31.07.2023
 * Time: 0:17
 */

namespace app\widgets;

use Yii;
use yii\base\InvalidConfigException;
use yii\web\View;
use yii\base\Widget;
use app\modules\admin\models\Api;

class JivoChat extends Widget
{
    public $widgetId;

    public function init()
    {
        $this->widgetId = $this->getWidgetId();

        if ($this->widgetId === null) {
            throw new InvalidConfigException("Не указан Jivosite ID");
        }

        parent::init();
    }

    public function getWidgetId()
    {
        if ($this->widgetId !== null) {
            return $this->widgetId;
        }

        $apiModel = Api::findOne(["id" => 1]);
        return $apiModel !== null ? $apiModel->widgetId : null;
    }

    public function run()
    {
        $this->registerJivoChatScript();
    }

    protected function registerJivoChatScript()
    {
        $js = <<<JS
    (function() {
    var widget_id = '{$this->widgetId}';
    var d = document;
    var w = window;

    function l() {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = '//code.jivosite.com/script/widget/' + widget_id;
        var ss = document.getElementsByTagName('script')[0];
        ss.parentNode.insertBefore(s, ss);
    }
    if (d.readyState == 'complete') {
        l();
    } else {
        if (w.attachEvent) {
            w.attachEvent('onload', l);
        } else {
            w.addEventListener('load', l, false);
        }
    }
})();
JS;

        $this->view->registerJs($js, View::POS_END);
    }
}
