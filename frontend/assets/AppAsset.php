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
        'css/bootstrap.min.css',
        'css/animate.css',
        'css/meanmenu.css',
        'css/magnific-popup.css',
        'css/owl.carousel.min.css',
        'css/font-awesome.min.css',
        'css/et-line-icon.css',
        'css/reset.css',
        'css/ionicons.min.css',
        'css/material-design-iconic-font.min.css',
        'css/style.css',
        'css/responsive.css',

    ];
    public $js = [
        'js/vendor/modernizr-2.8.3.min.js',
        'js/vendor/jquery-1.12.0.min.js',
        'js/bootstrap.min.js',
        'js/jquery.meanmenu.js',
        'js/jquery.magnific-popup.js',
        'js/ajax-mail.js',
        'js/owl.carousel.min.js',
        'js/jquery.mb.YTPlayer.js',
        'js/jquery.nicescroll.min.js',
        'js/plugins.js',
        'js/main.js',
        'js/minimize-zoom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
}
