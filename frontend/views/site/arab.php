<?php
$this->title = 'Араб тили';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Араб тили, Arab tili'
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Arroziy.uz, Араб тили, Arab tili'
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
                            <h2>Араб тили</h2>
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
                    <h1 class="page-title">Араб тили</h1>
                    <?foreach ($model as $item):?>
                        <div class="myitem mb-100">
                            <h2 class="mt-20 mb-5"><?= $item->title?></h2>
                            <div class="myitem-info mb-10">
                            <span class="myitem-date">
                                <i class="fa fa-calendar"></i>
                                <?= $item->date?>
                            </span>
                            </div>
                            <img src="/backend/web/321/ar10/<?= $item->img?>" alt="" class="myitem-img">
                            <p class="myitem-text mt-10"><?= $item->text?></p>
                            <a href="/arabid/<?= $item->id?>" class="btn btn-danger myitem-btn mt-10 mb-10 pull-right clear">Тўлиқ ўқиш</a>
                        </div>
                        <hr>
                    <?endforeach;?>
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
                                <a href="/newsid/<?= $model2[0]->id?>"><img src="/backend/web/321/x10/<?=$model2[0]->img?>" style="width: 306px; height: 313px; object-fit: cover;" alt=""></a>
                                <h2><?= $model2[0]->title?></h2>
                                <p>Arroziy  /  <?= date('M d, Y', strtotime($model2[0]->date))?></p>
                            </div>
                        </div>
                        <?php for($i=1; $i<7; $i++){ if(!isset($model2[$i])) break ?>
                            <div class="single-post mb-30">
                                <div class="single-post-img">
                                    <a href="/newsid/<?= $model2[$i]->id?>"><img src="/backend/web/321/x10/<?=$model2[$i]->img?>" alt="">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="/newsid/<?= $model2[$i]->id?>"><?= mb_substr($model2[$i]->title, 0, 30).'...'?></a></h4>
                                    <p>Arroziy  /  <?= date('M d, Y', strtotime($model2[$i]->date))?></p>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="single-blog-widget mb-50">
                        <h3>билим олиш</h3>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->