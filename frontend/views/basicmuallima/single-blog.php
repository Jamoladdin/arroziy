<?php
$this->title = $model->title;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $model->title
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => "arroziy,o'tra,maxsus,islom,bilim,yurti,o'zbekiston,xorazm,urganch,uz," . $keys
]);

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $this->title
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => mb_substr(strip_tags($model->text, ''), 0, 200)
]);

$this->registerMetaTag([
    'property' => 'og:url',
    'content' => 'http://arroziy.uz'.Yii::$app->request->url
]);

$this->registerMetaTag([
    'property' => 'og:site_name',
    'content' => 'arroziy.uz'
]);
?>
<!-- Banner Area Start -->
<div class="banner-area-wrapper">
    <div class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h1><?= $model->title?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Blog Start -->
<div class="blog-details-area pt-150 pb-140">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-details">
                    <div class="blog-details-img">
                        <img src="/images/<?= $model->img?>" alt="Аррозий ўрта махсус билим юрти">
                    </div>
                    <div class="blog-details-content">
                        <h2><?= $model->title?> </h2>
                        <?=$model->text?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-sidebar right text-left">
                    <div class="single-blog-widget mb-50">
                        <h3>янги хабарлар</h3>
                        <div class="single-blog-banner mb-30">
                            <div class="single-blog-banner">
                                <a href="/mutolaa/<?= $model2[0]->slug.'/'.$model2[0]->year.'/'.$model2[0]->month.'/'.$model2[0]->day.'/'.$model2[0]->slug?>"><img src="/images/<?=$model2[0]->img?>" style="width: 100%; min-height: 314px; object-fit: cover;" alt="Аррозий ўрта махсус билим юрти"></a>
                                <h2><a href="/mutolaa/<?= $model2[0]->slug.'/'.$model2[0]->year.'/'.$model2[0]->month.'/'.$model2[0]->day.'/'.$model2[0]->slug?>"><?= $model2[0]->title?></a></h2>
                                <p>Arroziy  /  <?= date('d-m, Y', strtotime($model2[0]->date))?></p>
                            </div>
                        </div>
                        <?php for($i=1; $i<7; $i++){ if(!isset($model2[$i])) break ?>
                            <div class="single-post mb-30">
                                <div class="single-post-img">
                                    <a href="/mutolaa/<?= $model2[$i]->slug.'/'.$model2[$i]->year.'/'.$model2[$i]->month.'/'.$model2[$i]->day.'/'.$model2[$i]->slug?>"><img src="/images/<?=$model2[$i]->img?>" alt="Аррозий ўрта махсус билим юрти">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="/mutolaa/<?= $model2[$i]->slug.'/'.$model2[$i]->year.'/'.$model2[$i]->month.'/'.$model2[$i]->day.'/'.$model2[$i]->slug?>"><?= $model2[$i]->title?></a></h4>
                                    <p>Arroziy  /  <?= date('d-m, Y', strtotime($model2[$i]->date))?></p>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="single-blog-widget mb-50">
                        <h3>билим олиш</h3>
                        <ul>
                            <?php foreach ($cilms as $item){ ?>
                                <li><a href="/ilm/<?= $item->slug?>"><?= $item->name?></a></li>
                            <?php };?>
                        </ul>
                    </div>

                    <div class="custom-calendar-wrap">
                        <div id="custom-inner" class="custom-inner">
                            <div class="custom-header">
                                <nav>
                                    <span id="custom-prev" class="custom-prev"></span>
                                    <span id="custom-next" class="custom-next"></span>
                                </nav>
                                <h2 id="custom-month" class="custom-month"></h2>
                                <h3 id="custom-year" class="custom-year"></h3>
                            </div>
                            <div id="calendar" class="fc-calendar-container"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
<?php
$this->registerCssFile('/css/calendar.css');
$this->registerJsFile("/js/jquery.calendario.js", ['depends' => [
    \yii\web\JqueryAsset::className()
]]);
?>