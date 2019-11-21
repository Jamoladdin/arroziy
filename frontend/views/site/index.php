<?php

/* @var $this yii\web\View */

$this->title = 'Бош саҳифа';
?>
<!-- Background Area Start -->
<section id="slider-container" class="slider-area">
    <div class="slider-owl owl-theme owl-carousel">
        <!-- Start Slingle Slide -->
        <div class="single-slide item" style="background-image: url(img/slider/slider1.jpg)">
            <!-- Start Slider Content -->
            <div class="slider-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-left-5">
                            <div class="slide-content-wrapper">
                                <div class="slide-content">
                                    <h3>ТAЪЛИМ ИНСОНИЯТНИ </h3>
                                    <h2>ТЎҒРИ ЙЎЛГA БОШЛAЙДИ </h2>
                                    <p>ТAЪЛИМ ИНСОНИЯТНИ ТЎҒРИ ЙЎЛГA БОШЛAЙДИ </p>
                                    <a class="default-btn" href="/history">Кўпроқ </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Slider Content -->
        </div>
        <!-- End Slingle Slide -->
        <!-- Start Slingle Slide -->
        <div class="single-slide item" style="background-image: url(img/slider/slider2.jpg)">
            <!-- Start Slider Content -->
            <div class="slider-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-left-5">
                            <div class="slide-content-wrapper text-left">
                                <div class="slide-content">
                                    <h3>МАДРАСА ТАРИҲИ </h3>
                                    <p>Мадраса бунёд этилган. </p>
                                    <a class="default-btn" href="/history">Кўпроқ </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Slider Content -->
        </div>
        <!-- End Slingle Slide -->
    </div>
</section>
<!-- Background Area End -->
<!-- Service Start -->
<div class="service-area two pt-80 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service text-center">
                    <div style="height: 200px;">
                        <h3><a href="/history">МАДРАСА ТАРИХИ</a></h3>
                        <p>МАДРАСА ТАРИХИ</p>
                    </div>
                    <a href="/history" class="btn btn-info">Тўлиқ ўқиш</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service text-center">
                    <div style="height: 200px;">
                        <h3><a href="/dormitory">ТАЛАБАЛАР ТУРАР ЖОЙИ</a></h3>
                        <p>Ўзбекистон мусулмонлари идораси раҳнамолигида Назарбек талабалар турар жойи таъмирланган. Ётоқхона 100 ўринга мўлжалланган.</p>
                    </div>
                    <a href="/dormitory" class="btn btn-info">Тўлиқ ўқиш</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service text-center">
                    <div style="height: 200px;">
                        <h3><a href="/moral">АХБОРОТ - РЕСУРС МАРКАЗИ</a></h3>
                        <p>АРМ 2 та қироатхона ва 1 та фонд китоблари сақланадиган хонадан иборат. Ҳозирда билим юрт АРМ фондида жами 11935 та китоб мавжуд.</p>
                    </div>
                    <a href="/moral" class="btn btn-info">Тўлиқ ўқиш</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
<!-- Choose Start -->
<section class="choose-area pb-85 pt-77">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-left-4 col-sm-8 col-md-offset-left-4">
                <div class="choose-content text-left">
                    <h2>Илм ҳазинадир, унинг калити еса сўрашрир. </h2>
                    <p>Севикли Пайғамбаримиз Муҳаммад мустафо соллаллоҳу алайҳи васаллам: "Илм талаб қилиш ҳар бир муслим учун фарздир", деганлар. </p>
                    <p class="choose-option">     Яхшилаб мулоҳаза қилсак илмдан юз ўгириш жами яхшиликдан юз ўгириш демакдир. Илмни баъзи сабабларга кўра ташлаб кетмоқчи бўлганларнинг аксарияти мажбурликдан, оила боқолмаслиги, хотираси сустлиги эмас, қалбларидаги махфий дунёга бўлган шаҳватдандир. Негаки, илм олиш, уни ўрганиш, ўрганганларини такрорлаш, ёдда сақлаш, унга амал қилиш жуда ҳам мушкул иш бўлганидан, кўп толиби илмлар оила қуриб ёхуд ўзини савдо сотиққа уриб, илм машаққатига тоқат қиломайдилар. Осон йўлларни танлаб кетадилар. </p>
                    <a class="default-btn" href="course-details.html">Тўлиқ ўқиш</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Choose Area End -->
<!-- NEWS Area Start -->
<div class="courses-area pt-60 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h2>ЯНГИЛИКЛАР</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?foreach ($news as $item):?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-course">
                    <div class="course-img">
                        <a href="/newsid/<?= $item->id?>"><img src="/backend/web/321/x10/<?= $item->img?>" alt="course">
                            <div class="course-hover">
                                <i class="fa fa-link"></i>
                            </div>
                        </a>
                    </div>
                    <div class="course-content">
                        <h3><a href="/newsid/<?= $item->id?>"><?= $item->title?></a></h3>
                        <a class="default-btn" href="/newsid/<?= $item->id?>">Тўлиқ ўқиш</a>
                    </div>
                </div>
            </div>
            <?endforeach;?>
        </div>
    </div>
</div>
<!-- NEWS Area End -->
<!-- ARTICLE Area Start -->
<div class="event-area one text-center pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h2>МАҚОЛАЛАР</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <?php for ($i=0; $i<4; $i++){?>
                <div class="single-event mb-35">
                    <div class="event-date">
                        <h3><a href="/articlesid/<?= $article[$i]->id?>"><?= date('d', strtotime($article[$i]->date))?> <span><?= date('M', strtotime($article[$i]->date))?></span></a></h3>
                    </div>
                    <div class="event-content text-left">
                        <div class="event-content-left">
                            <h4><a href="/articlesid/<?= $article[$i]->id?>"><?= $article[$i]->title?></a></h4>
                            <ul>
                                <li><i class="fa fa-clock-o"></i><?= $article[$i]->date?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="col-md-6 hidden-sm hidden-xs">
                <?php for ($i=4; $i<8; $i++){?>
                    <div class="single-event mb-35">
                        <div class="event-date">
                            <h3><a href="/articlesid/<?= $article[$i]->id?>"><?= date('d', strtotime($article[$i]->date))?> <span><?= date('M', strtotime($article[$i]->date))?></span></a></h3>
                        </div>
                        <div class="event-content text-left">
                            <div class="event-content-left">
                                <h4><a href="/articlesid/<?= $article[$i]->id?>"><?= $article[$i]->title?></a></h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i><?= $article[$i]->date?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<!-- ARTICLE Area End -->
<!-- Testimonial Area Start -->
<div class="testimonial-area pt-110 pb-105 text-center">
    <div class="container">
        <div class="row">
            <div class="section-title" style="position: relative; z-index: 1">
                <h2 style="color: #fff">ТАВСИЯЛАР</h2>
            </div>
            <div class="testimonial-owl owl-theme owl-carousel">
                <?foreach ($suggest as $item):?>
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <div class="single-testimonial">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="/backend/web/321/ty10/<?= $item->img?>" alt="">
                            </div>
                            <div class="testimonial-content">
                                <h4><a href="/tavsiyaid"><?= $item->title?></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?endforeach;?>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End -->
<!-- Blog Area Start -->
<div class="blog-area pt-80 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h2>АБИТУРИЕНТЛАР УЧУН</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-blog" style="height: 200px">
                    <div class="blog-img"><i class="fa fa-bookmark-o fa-5x" aria-hidden="true"></i></div>
                    <div class="blog-content">Қабул хақида</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-blog" style="height: 200px">
                    <div class="blog-img"><i class="fa fa-exclamation fa-5x" aria-hidden="true"></i></div>
                    <div class="blog-content">Эслатма</div>
                </div>
            </div>
            <div class="col-md-3 hidden-sm col-xs-12">
                <div class="single-blog" style="height: 200px">
                    <div class="blog-img"><i class="fa fa-file-text-o fa-5x" aria-hidden="true"></i></div>
                    <div class="blog-content">Хужжатлар тўплами</div>
                </div>
            </div>
            <div class="col-md-3 hidden-sm col-xs-12">
                <div class="single-blog" style="height: 200px">
                    <div class="blog-img"><i class="fa fa-folder-open-o fa-5x" aria-hidden="true"></i></div>
                    <div class="blog-content">Топширилган хужжатлар</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->