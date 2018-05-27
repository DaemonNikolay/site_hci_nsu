<?php

namespace app\assets;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/site.css",
        "web/assets_main/css/bootstrap.min.css",
        "web/assets_main/css/font-awesome.min.css",
        "web/assets_main/css/animate.min.css",
        "web/assets_main/css/lightbox.css",
        "web/assets_main/css/main.css",
        "web/assets_main/css/responsive.css",
    ];
    public $js = [
//        "web/assets_main/js/html5shiv.js",
//	    "web/assets_main/js/respond.min.js",
        "web/assets_main/js/jquery.js",
        "web/assets_main/js/bootstrap.min.js",
        "web/assets_main/js/lightbox.min.js",
        "web/assets_main/js/wow.min.js",
        "web/assets_main/js/main.js",  
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
