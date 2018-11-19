<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
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
         "css/bootstrap.min.css",
        // "css/font-awesome.min.css",
        "css/animate.css",
        "css/style.css",
    ];
    public $js = [
         "https://code.jquery.com/ui/1.12.1/jquery-ui.js",
         "https://code.jquery.com/jquery-1.12.4.js",
         "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js",
         "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js",
         "js/bootstrap.min.js",
       
       
        "https://code.jquery.com/jquery-3.2.1.slim.min.js",
        
        "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js",
        "js/jsjs.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
