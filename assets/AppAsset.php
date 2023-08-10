<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/resources/web/assets/mobirise-icons2/mobirise2.css',
        '/resources/web/assets/mobirise-icons/mobirise-icons.css',
        '/resources/icon54/style.css',
        '/resources/bootstrap/css/bootstrap.min.css',
        '/resources/bootstrap/css/bootstrap-grid.min.css',
        '/resources/bootstrap/css/bootstrap-reboot.min.css',
        '/resources/animatecss/animate.css',
        '/resources/popup-overlay-plugin/style.css',
        '/resources/dropdown/css/style.css',
        '/resources/socicon/css/styles.css',
        '/resources/theme/css/style.css',
        '/resources/custom/style.css',
        

        // google fonts
        '//fonts.googleapis.com/css?family=Be+Vietnam+Pro:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap',
        
        
        '/resources/mobirise/css/mbr-additional.css',
        // 'css/site.css',

    ];
    public $js = [
        '/resources/bootstrap/js/bootstrap.bundle.min.js',
        '/resources/smoothscroll/smooth-scroll.js',
        '/resources/ytplayer/index.js',
        '/resources/dropdown/js/navbar-dropdown.js',
        '/resources/vimeoplayer/player.js',
        '/resources/mbr-tabs/mbr-tabs.js',
        '/resources/embla/embla.min.js',
        '/resources/embla/script.js',
        '/resources/theme/js/script.js',
        '/resources/slidervideo/script.js'

    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
