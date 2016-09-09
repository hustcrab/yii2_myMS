<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    //在这里写两个静态方法来调用外部js和CSS，解决加载顺序的问题
    //用法：在view里面直接调用，具体见/view/boston/about；
    public static function addScript($view,$jsFile){
        $view->registerJsFile($jsFile,[AppAsset::className(),'depends'=>'frontend\assets\AppAsset']);
    }
    public static function addCSS($view,$cssFile){
        $view->registerCssFile($cssFile,[AppAsset::className(),'depends'=>'frontend\assets\AppAsset']);
    }
}
