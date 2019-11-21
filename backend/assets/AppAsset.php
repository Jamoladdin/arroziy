<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $baseUrl = '/backend/web/';

    public $css = [
        'css/site.css',
        'temp/vendor/fontawesome-free/css/all.min.css',
        'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        'temp/css/sb-admin-2.min.css',
        'temp/css/sb-admin-2.css',
    ];
    public $js = [
        //        'temp/vendor/jquery/jquery.min.js',
        'temp/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'temp/vendor/jquery-easing/jquery.easing.min.js',
        'temp/js/sb-admin-2.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
}
