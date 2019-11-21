<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header class="top">

    <div class="header-area header-sticky fixed">
        <div class="container">

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="logo">
                        <a href="/"><img src="<?=Yii::$app->request->baseUrl?>/img/logo/logo1.png" alt="eduhome"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content-wrapper one">
                        <!-- Main Menu Start -->
                        <div class="main-menu one text-right">
                            <nav style="display: block;">
                                <ul>
                                    <li><a href="/" class="<?php if(Yii::$app->controller->action->id === 'index') echo 'active'?>">
                                            БОШ САҲИФА
                                        </a>
                                    </li>
                                    <li><a href="">ТУЗИЛМА</a>
                                        <ul>
                                            <li><a href="/history">Мадраса тарихи</a></li>
                                            <li><a href="/director">Раҳбарият</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">МУТОЛАА</a>
                                        <ul>
                                            <li><a href="/news">Хабарлар</a></li>
                                            <li><a href="/articles">Мақолалар</a></li>
                                            <li><a href="/suggest">Тавсия</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">ТАЛАБАЛАРГА</a>
                                        <ul>
                                            <li><a href="/moral">Илм талаб килиш одоблари</a></li>
                                            <li><a href="/library">Ахборот — ресурслари маркази</a></li>
                                            <li><a href="/dormitory">Талабалар турар жойи</a></li>
                                        </ul>
                                    </li>
                                    <li class="hidden-sm"><a href="">АБИТУРИЕНТЛАРГА</a>
                                        <ul>
                                            <li><a href="/note">Эслатма</a></li>
                                            <li><a href="/totaldocuments">Топширилган хужжатлар тўплами</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">ИЛМ</a>
                                        <ul>
                                            <li><a href="/kuron">Қуръон ва тажвид</a></li>
                                            <li><a href="/aqida">Ақида</a></li>
                                            <li><a href="/fiqh">Фиқҳ</a></li>
                                            <li><a href="/tafsir">Тафсир</a></li>
                                            <li><a href="/xadis">Ҳадис</a></li>
                                            <li><a href="/arab">Араб тили</a></li>
                                            <li><a href="/alloma">Юртимиз алломалари</a></li>
                                            <li><a href="/islom">Ислом тарихи</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">МЕДИА</a>
                                        <ul>
                                            <li><a href="/audio">Аудио</a></li>
                                            <li><a href="/photo">Фото</a></li>
                                            <li><a href="/video">Видео</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md one"></div>
                        <!-- Main Menu End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
<?= Alert::widget() ?>
<?= $content ?>

<!-- Footer Start -->
<footer class="footer-area">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-widget pr-60">
                        <div class="footer-logo pb-25">
                            <a href="/"><img src="<?=Yii::$app->request->baseUrl?>/img/logo/footer-logo2.png" alt="eduhome"></a>
                        </div>
                        <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and give you a coete account of the system. </p>
                        <div class="footer-social">
                            <ul>
                                <li><a href=""><i class="fa fa-send"></i></a></li>
                                <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>БЎЛИМЛАР</h3>
                        <ul>
                            <li><a href="/">Бош саҳифа</a></li>
                            <li><a href="/director">Тузилма</a></li>
                            <li><a href="/articles">Мутолаа</a></li>
                            <li><a href="/moral">Талабаларга</a></li>
                            <li><a href="/note">Абитуриентларга</a></li>
                            <li><a href="/kuron">Илм</a></li>
                            <li><a href="/photo">Медиа</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>МУТОЛАА</h3>
                        <ul>
                            <li><a href="/kuron">Қуръон ва тажвид</a></li>
                            <li><a href="/aqida">Ақида</a></li>
                            <li><a href="/fiqh">Фиқҳ</a></li>
                            <li><a href="tasvir">Тафсир</a></li>
                            <li><a href="/xadis">Ҳадис</a></li>
                            <li><a href="/arab"> Араб тили</a></li>
                            <li><a href="/alloma">Юртимиз алломалари</a></li>
                            <li><a href="/islom">Ислом тарихи</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>АЛОҚА</h3>
                        <p>Your address goes here, Street<br>City, Roadno 785 New York</p>
                        <p>+880  548  986  898  87</p>
                        <p>info@eduhome.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Copyright © 2019. All Right Reserved J.Axmedov</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
