<?php
$this->title = 'Фото';

$this->registerMetaTag([
    'name' => 'description',
    'content' => "Arroziy nomidagi o'tra maxsus islom bilim yurti bilan bog'liq fotolavhalar"
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => "arroziy, o'tra, maxsus, islom, bilim, yurti, foto, fotolavhalar, rasm, surat, o'zbekiston, xorazm, urganch, uz"
]);

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => "Foto"
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => "Arroziy nomidagi o'tra maxsus islom bilim yurti bilan bog'liq fotolavhalar"
]);

$this->registerMetaTag([
    'property' => 'og:url',
    'content' => 'http://arroziy.uz/media/foto'
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
                            <h1>Фото</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Blog Start -->
<div class="blog-area event-area three text-center pt-90 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="media-photo media row pt-40">
                        <?foreach ($model as $item):?>
                        <div class="photo-item mb-20 col-sm-6 col-xs-12">
                            <div class="image__wrapper">
                                <a href="/mediaphoto/<?= $item->name?>" class="image-popup">
                                    <img src="/mediaphoto/<?= $item->name?>" alt="Аррозий ўрта махсус билим юрти">
                                </a>
                            </div>
                        </div>
                        <?endforeach;?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pagination">
                            <ul>
                                <?php
                                echo \yii\widgets\LinkPager::widget([
                                    'pagination' => $pages,
                                    'registerLinkTags' => true,
                                    'maxButtonCount' => 5,    // Set maximum number of page buttons that can be displayed
                                    'nextPageCssClass' => 'pagination-next',
                                    'prevPageCssClass' => 'pagination-prev',
                                    'disabledPageCssClass' => '',
                                ]);
                                ?>
                            </ul>
                        </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->