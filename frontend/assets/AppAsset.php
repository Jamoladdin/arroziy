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
        'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800',
        'css/site.css',
        'css/meanmenu.css',
        'css/magnific-popup.css',
        'css/owl.carousel.min.css',
        'css/font-awesome.min.css',
        'css/style.css',
        'css/responsive.css',

    ];
    public $js = [
        'js/jquery.meanmenu.js',
        'js/jquery.magnific-popup.js',
        'js/owl.carousel.min.js',
        'js/plugins.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
}
