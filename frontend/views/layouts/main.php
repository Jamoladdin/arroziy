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
	<meta name="author" content="J.Axmedov">
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
                <div class="col-md-3 col-sm-4 col-xs-10">
                    <div class="logo">
                        <a href="/"><img src="<?=Yii::$app->request->baseUrl?>/img/logo/logo1.png" alt="Аррозий ўрта махсус билим юрти"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="content-wrapper one">
                        <!-- Main Menu Start -->
                        <div class="main-menu one text-right">
                            <nav style="display: block;">
                                <ul>
                                    <?php
                                    $categoryIlm = \common\models\CategoryIlm::find()->all();
                                    $categoryTuzilma = \common\models\Tuzilma::find()->all();
                                    $categoryMutola = \common\models\CategoryMutolaa::find()->all();
                                    $categoryTalaba = \common\models\Talabalarga::find()->all();
                                    $categoryAbiturient = \common\models\Abiturient::find()->all();
                                    ?>
                                    <li><a href="/" class="<?php if(Yii::$app->controller->action->id === 'index') echo 'active'?>">
                                            БОШ САҲИФА
                                        </a>
                                    </li>
                                    <li><a>ТУЗИЛМА</a>
                                        <ul>
                                            <?php foreach ($categoryTuzilma as $item){ ?>
                                                <li><a href="/tuzilma/<?= $item->slug?>"><?= $item->name?></a></li>
                                            <?php };?>
                                        </ul>
                                    </li>
                                    <li><a>МУТОЛАА</a>
                                        <ul>
                                            <?php foreach ($categoryMutola as $item){ ?>
                                                <li><a href="/mutolaa/<?= $item->slug?>"><?= $item->name?></a></li>
                                            <?php };?>
                                        </ul>
                                    </li>
                                    <li><a>ТАЛАБАЛАРГА</a>
                                        <ul>
                                            <?php foreach ($categoryTalaba as $item){ ?>
                                                <li><a href="/talabalarga/<?= $item->slug?>"><?= $item->name?></a></li>
                                            <?php };?>
                                        </ul>
                                    </li>
                                    <li class="hidden-sm"><a>АБИТУРИЕНТЛАРГА</a>
                                        <ul>
                                            <?php foreach ($categoryAbiturient as $item){ ?>
                                                <li><a href="/abiturientlarga/<?= $item->slug?>"><?= $item->name?></a></li>
                                            <?php };?>
                                        </ul>
                                    </li>
                                    <li><a>ИЛМ</a>
                                        <ul>
                                            <?php foreach ($categoryIlm as $item){ ?>
                                                <li><a href="/ilm/<?= $item->slug?>"><?= $item->name?></a></li>
                                            <?php };?>
                                        </ul>
                                    </li>
                                    <li><a>МЕДИА</a>
                                        <ul>
                                            <li><a href="/media/audio">Аудио</a></li>
                                            <li><a href="/media/foto">Фото</a></li>
                                            <li><a href="/media/video">Видео</a></li>
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
<footer class="footer-area pt-60">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-widget pr-60">
                        <div class="footer-logo pb-25">
                            <a href="/"><img src="<?=Yii::$app->request->baseUrl?>/img/logo/footer-logo2.png" alt="Аррозий ўрта махсус билим юрти"></a>
                        </div>
                        <p>Ижтимоий тармоқлардаги манзилларимиз</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://t.me/joinchat/AAAAAEfvKW6CI8sFvYdx_g"><i class="fa fa-send"></i></a></li>
                                <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.pinterest.com/devitemsllc/"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="https://twitter.com/devitemsllc"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>БЎЛИМЛАР</h3>
                        <ul>
                            <li><a href="/">Бош саҳифа</a></li>
                            <li><a href="#">Тузилма</a></li>
                            <li><a href="#">Мутолаа</a></li>
                            <li><a href="#">Талабаларга</a></li>
                            <li><a href="#">Абитуриентларга</a></li>
                            <li><a href="#">Илм</a></li>
                            <li><a href="#">Медиа</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>Мутолаа</h3>
                        <ul>
                            <?php foreach ($categoryIlm as $item){ ?>
                                <li><a href="/ilm/<?= $item->slug?>"><?= $item->name?></a></li>
                            <?php };?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>АЛОҚА</h3>
                        <p>Бизнинг манзил: Урганч шаҳар И.Дўсов кўча 2а-уй</p>
                        <p>+998  95  606  92  55</p>
                        <p>ar_roziy@mail.ru</p>
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
					<span>
						<!-- START WWW.UZ TOP-RATING -->
                        <SCRIPT language="javascript" type="text/javascript">
                            <!--
                            top_js="1.0";top_r="id=44205&r="+escape(document.referrer)+"&pg="+escape(window.location.href);document.cookie="smart_top=1; path=/"; top_r+="&c="+(document.cookie?"Y":"N")
                            //-->
                        </SCRIPT>
                        <SCRIPT language="javascript1.1" type="text/javascript">
                            <!--
                            top_js="1.1";top_r+="&j="+(navigator.javaEnabled()?"Y":"N")
                            //-->
                        </SCRIPT>
                        <SCRIPT language="javascript1.2" type="text/javascript">
                            <!--
                            top_js="1.2";top_r+="&wh="+screen.width+'x'+screen.height+"&px="+
(((navigator.appName.substring(0,3)=="Mic"))?screen.colorDepth:screen.pixelDepth)
                            //-->
                        </SCRIPT>
                        <SCRIPT language="javascript1.3" type="text/javascript">
                            <!--
                            top_js="1.3";
                            //-->
                        </SCRIPT>
                        <SCRIPT language="JavaScript" type="text/javascript">
                            <!--
                            top_rat="&col=0063AF&t=ffffff&p=DD7900";top_r+="&js="+top_js+"";document.write('<a href="http://www.uz/uz/res/visitor/index?id=44205" target=_top><img src="http://cnt0.www.uz/counter/collect?'+top_r+top_rat+'" width=88 height=31 border=0 alt="Топ рейтинг www.uz"></a>')//-->
</SCRIPT><NOSCRIPT><A href="http://www.uz/uz/res/visitor/index?id=44205" target=_top><IMG height=31 src="http://cnt0.www.uz/counter/collect?id=44205&pg=http%3A//uzinfocom.uz&&col=0063AF&amp;t=ffffff&amp;p=DD7900" width=88 border=0 alt="Топ рейтинг www.uz"></A></NOSCRIPT><!-- FINISH WWW.UZ TOP-RATING -->

                    </span>
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
