<?php

/* @var $this yii\web\View */

$this->title = "Arroziy.uz";

$this->registerMetaTag([
    'name' => 'description',
    'content' => "Arroziy nomidagi o'tra maxsus islom bilim yurti rasmiy web sahifasi"
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => "arroziy, bosh sahifa, o'tra, maxsus, islom, bilim, yurti, o'zbekiston, xorazm, urganch, uz"
]);

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => "Arroziy nomidagi o'tra maxsus islom bilim yurti rasmiy web sahifasi"
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => "Arroziy nomidagi o'tra maxsus islom bilim yurti rasmiy web sahifasi"
]);
$this->registerMetaTag([
    'property' => 'og:url',
    'content' => 'http://arroziy.uz'
]);
$this->registerMetaTag([
    'property' => 'og:site_name',
    'content' => 'arroziy.uz'
]);
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
                                    <h3>ТAЪЛИМ ИНСОНИЯТНИ ТЎҒРИ ЙЎЛГA БОШЛAЙДИ</h3>
                                    <p>ТAЪЛИМ ИНСОНИЯТНИ ТЎҒРИ ЙЎЛГA БОШЛAЙДИ </p>
                                    <a class="default-btn" href="#">Кўпроқ </a>
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
                                    <p>Имом Фахриддин ар–Розий ислом мадрасаси 1992 йилда Хонка туманидаги «Холифаи Худойкули эшон бобо» жомеъ масжиди биносида уз фаолиятини бошлади. </p>
                                    <a class="default-btn" href="#">Кўпроқ </a>
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
<!-- NEWS Area Start -->
<div class="event-area three pt-60 pb-60 text-center">
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
                    <div class="single-event">
                        <div class="event-img">
                            <a href="/mutolaa/<?= $item->mutolaa->slug?>/<?= $item->year?>/<?= $item->month?>/<?= $item->day?>/<?= $item->slug?>"><img src="/images/<?= $item->img?>" alt="Аррозий ўрта махсус билим юрти">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                            <div class="event-date">
                                <h3><?= $item->day?><span><?= $item->month?></span></h3>
                            </div>
                        </div>
                        <div class="course-content">
                            <h3><a href="/mutolaa/<?= $item->mutolaa->slug?>/<?= $item->year?>/<?= $item->month?>/<?= $item->day?>/<?= $item->slug?>"><?= $item->title?></a></h3>
                            <a class="default-btn" href="/mutolaa/<?= $item->mutolaa->slug?>/<?= $item->year?>/<?= $item->month?>/<?= $item->day?>/<?= $item->slug?>">Тўлиқ ўқиш</a>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</div>
<!-- NEWS Area End -->
<!-- Choose Start -->
<section class="choose-area pb-85 pt-77">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-left-4 col-sm-8 col-md-offset-left-4">
                <div class="choose-content text-left">
                    <h2><?= $quron->title?> </h2>
                    <p><?= mb_substr(strip_tags($quron->text, ''), 0, 500)?>...</p>
                    <a class="default-btn" href="/ilm/<?= $quron->ilm->slug?>/<?= $quron->year?>/<?= $quron->month?>/<?= $quron->day?>/<?= $quron->slug?>">Тўлиқ ўқиш</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Choose Area End -->
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
                <div class="single-event bg-white mb-35">
                    <div class="event-date">
                        <h3><a href="/mutolaa/<?= $article[$i]->mutolaa->slug?>/<?= $article[$i]->year?>/<?= $article[$i]->month?>/<?= $article[$i]->day?>/<?= $article[$i]->slug?>"><?= $article[$i]->day?> <span><?= $article[$i]->month?></span></a></h3>
                    </div>
                    <div class="event-content text-left">
                        <div class="event-content-left">
                            <h4><a href="/mutolaa/<?= $article[$i]->mutolaa->slug?>/<?= $article[$i]->year?>/<?= $article[$i]->month?>/<?= $article[$i]->day?>/<?= $article[$i]->slug?>"><?= $article[$i]->title?></a></h4>
                            <ul>
                                <li><i class="fa fa-clock-o"></i><?= $article[$i]->date?></li>
                            </ul>
                        </div>
                        <div class="event-content-right">
                            <a class="default-btn" href="/mutolaa/<?= $article[$i]->mutolaa->slug?>/<?= $article[$i]->year?>/<?= $article[$i]->month?>/<?= $article[$i]->day?>/<?= $article[$i]->slug?>">ТЎЛИҚ ЎҚИШ</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="col-md-6 hidden-sm hidden-xs">
                <?php for ($i=4; $i<8; $i++){?>
                    <div class="single-event bg-white mb-35">
                        <div class="event-date">
                            <h3><a href="/mutolaa/<?= $article[$i]->mutolaa->slug?>/<?= $article[$i]->year?>/<?= $article[$i]->month?>/<?= $article[$i]->day?>/<?= $article[$i]->slug?>"><?= date('d', strtotime($article[$i]->date))?> <span><?= date('m', strtotime($article[$i]->date))?></span></a></h3>
                        </div>
                        <div class="event-content text-left">
                            <div class="event-content-left">
                                <h4><a href="/mutolaa/<?= $article[$i]->mutolaa->slug?>/<?= $article[$i]->year?>/<?= $article[$i]->month?>/<?= $article[$i]->day?>/<?= $article[$i]->slug?>"><?= $article[$i]->title?></a></h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i><?= $article[$i]->date?></li>
                                </ul>
                            </div>
                            <div class="event-content-right">
                                <a class="default-btn" href="/mutolaa/<?= $article[$i]->mutolaa->slug?>/<?= $article[$i]->year?>/<?= $article[$i]->month?>/<?= $article[$i]->day?>/<?= $article[$i]->slug?>">ТЎЛИҚ ЎҚИШ</a>
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
                                <img src="/images/<?= $item->img?>" alt="Аррозий ўрта махсус билим юрти">
                            </div>
                            <div class="testimonial-content">
                                <h4><a href="/mutolaa/<?= $item->mutolaa->slug?>/<?= $item->year?>/<?= $item->month?>/<?= $item->day?>/<?= $item->slug?>"><?= $item->title?></a></h4>
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
<div class="blog-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h2>АБИТУРИЕНТЛАР УЧУН</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <a href="/abiturientlarga/eslatma" class="col-md-3 col-sm-6 col-xs-12">
                <div class="abiturient-info">
                    <div class="abiturient-img"><i class="fa fa-exclamation fa-5x" aria-hidden="true"></i></div>
                    <div class="abiturient-content">Эслатма</div>
                </div>
            </a>
            <a href="/abiturientlarga/topshirilgan-hujjatlar-toplami" class="col-md-3 col-sm-6 col-xs-12">
                <div class="abiturient-info">
                    <div class="abiturient-img"><i class="fa fa-file-text-o fa-5x" aria-hidden="true"></i></div>
                    <div class="abiturient-content">Хужжатлар тўплами</div>
                </div>
            </a>
            <a href="/abiturientlarga/kop-soraladigan-savollar" class="col-md-3 hidden-sm col-xs-12">
                <div class="abiturient-info">
                    <div class="abiturient-img"><i class="fa fa-question-circle-o fa-5x" aria-hidden="true"></i></div>
                    <div class="abiturient-content">Кўп сўраладиган саволлар</div>
                </div>
            </a>
            <a href="/abiturientlarga/qabul-haqida" class="col-md-3 hidden-sm col-xs-12">
                <div class="abiturient-info">
                    <div class="abiturient-img"><i class="fa fa-bookmark-o fa-5x" aria-hidden="true"></i></div>
                    <div class="abiturient-content">Қабул хақида</div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Blog Area End -->
<!-- Blog Area Start -->
<div class="blog-area bg-light pt-80 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h2>ФОЙДАЛИ МАНБААЛАР</h2>
                </div>
            </div>
        </div>
        <div class="container">
			<div class="partner-owl owl-theme owl-carousel">
				<a href="http://www.bukhari.uz/" target="_blank">
					<div class="item"> <img src="/carousel/bukhari.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://fargonaziyo.uz/" target="_blank">
					<div class="item"> <img src="/carousel/fargonaziyo.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://fitrat.uz/" target="_blank">
					<div class="item"> <img src="/carousel/fitrat.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://hidoyat.uz/" target="_blank">
					<div class="item"> <img src="/carousel/hidoyat.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://imon.uz/" target="_blank">
					<div class="item"> <img src="/carousel/imon.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://islaminstitut.uz/" target="_blank">
					<div class="item"> <img src="/carousel/islaminstitut.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="https://islom.uz/" target="_blank">
					<div class="item"> <img src="/carousel/islom.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://islomota.uz/" target="_blank">
					<div class="item"> <img src="/carousel/islomota.uz.jpg" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="https://kukaldosh.uz/" target="_blank">
					<div class="item"> <img src="/carousel/kukaldosh.uz.jpg" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://mehrob.uz/" target="_blank">
					<div class="item"> <img src="/carousel/mehrob.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://mirarabmadrasa.uz/" target="_blank">
					<div class="item"> <img src="/carousel/mirarabmadrasa.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://muslimun.uz/" target="_blank">
					<div class="item"> <img src="/carousel/muslimun.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://naqshband.uz/" target="_blank">
					<div class="item"> <img src="/carousel/naqshband.uz.jpg" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="https://nasafziyo.uz/" target="_blank">
					<div class="item"> <img src="/carousel/nasafziyo.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://nasihat.uz/" target="_blank">
					<div class="item"> <img src="/carousel/nasihat.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://paziylet.uz/" target="_blank">
					<div class="item"> <img src="/carousel/paziylet.uz.jpg" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://ravza.uz/" target="_blank">
					<div class="item"> <img src="/carousel/ravza.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="https://religions.uz/" target="_blank">
					<div class="item"> <img src="/carousel/religions.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://sammuslim.uz/" target="_blank">
					<div class="item"> <img src="/carousel/sammuslim.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://sirdaryomuslim.uz/" target="_blank">
					<div class="item"> <img src="/carousel/sirdaryomuslim.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://surxonmuslim.uz/" target="_blank">
					<div class="item"> <img src="/carousel/surxonmuslim.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://vakillik.uz/" target="_blank">
					<div class="item"> <img src="/carousel/vakillik.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://xatib.uz/" target="_blank">
					<div class="item"> <img src="/carousel/xatib.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="" target="_blank">
					<div class="item"> <img src="/carousel/ziyo.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
				<a href="http://ziyonet.uz/" target="_blank">
					<div class="item"> <img src="/carousel/ziyonet.uz.png" alt="Аррозий ўрта махсус билим юрти"></div>
				</a>
			</div>
        </div>
    </div>
</div>
<!-- Blog Area End -->
<?php
$this->registerJs("
    $(document).ready(function(){
        $('.footer-carousel').owlCarousel({
            items:4,
		    loop:true,
		    margin:10,
		    autoplay:true,
		    autoplayTimeout:2000,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		        },
		        284:{
		            items:2,
		        },
		        600:{
		            items:4,
		        },
		        1000:{
		            items:6,
		        }
		    }
        });
    });"
    , \yii\web\View::POS_READY);
?>