<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
if (Yii::$app->controller->action->id === 'login') {
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
}
elseif (!Yii::$app->user->can('admin')) {
    Yii::$app->user->logout();
}
else {
    ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
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

<div class="wrap" id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
            <div class="sidebar-brand-icon">
                <i class="fas fa-user-circle"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if($this->context->route === 'site/index') echo 'active'?>">
            <a class="nav-link" href="/admin">
                <i class="fas fa-home"></i>
                <span>Bosh sahifa</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Asosiy menu
        </div>
        <!-- Nav Item - One Collapse Menu -->
        <li class="nav-item <?php if(Yii::$app->controller->id === 'tuzilma') echo 'active'?>">
            <a class="nav-link" href="/admin/tuzilma/index">
                <i class="fas fa-sitemap"></i>
                <span>TUZILMA</span>
            </a>
        </li>
        <!-- Nav Item - Two Collapse Menu -->
        <li class="nav-item <?php if(Yii::$app->controller->id === 'mutolaa') echo 'active'?>">
            <a class="nav-link <?php if(Yii::$app->controller->id !== 'mutolaa') echo 'collapsed'?>" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-book-reader"></i>
                <span>MUTOLA</span>
            </a>
            <div id="collapseTwo" class="collapse <?php if(Yii::$app->controller->id === 'mutolaa') echo 'show'?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Actions:</h6>
                    <?php
                    $tuzilma = \common\models\CategoryMutolaa::find()->orderBy(['id' => SORT_DESC])->all();
                    if($tuzilma!==null) {
                        foreach ($tuzilma as $item) {
                            ?>
                            <a class="collapse-item <?php if ($this->context->route === 'mutolaa/index/'.$item->id) echo 'active' ?>"
                               href="/admin/mutolaa/index/<?= $item->id?>"><?= $item->name?></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </li>
        <!-- Nav Item - Three Collapse Menu -->
        <li class="nav-item <?php if(Yii::$app->controller->id === 'talabalarga') echo 'active'?>">
            <a class="nav-link" href="/admin/talabalarga/index">
                <i class="fas fa-user-graduate"></i>
                <span>TALABALARGA</span>
            </a>
        </li>
        <!-- Nav Item - Four Menu -->
        <li class="nav-item <?php if(Yii::$app->controller->id === 'abiturient') echo 'active'?>">
            <a class="nav-link" href="/admin/abiturient/index">
                <i class="fas fa-user-friends"></i>
                <span>ABITURIENTLARGA</span>
            </a>
        </li>
        <!-- Nav Item - Five Menu -->
        <li class="nav-item <?php if(Yii::$app->controller->id === 'ilm') echo 'active'?>">
            <a class="nav-link <?php if(Yii::$app->controller->id !== 'ilm') echo 'collapsed'?>" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                <i class="fas fa-book"></i>
                <span>ILM</span>
            </a>
            <div id="collapseFive" class="collapse <?php if(Yii::$app->controller->id === 'ilm') echo 'show'?>" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Actions:</h6>
                    <?php
                    $tuzilma = \common\models\CategoryIlm::find()->orderBy(['id' => SORT_DESC])->all();
                    if($tuzilma!==null) {
                        foreach ($tuzilma as $item) {
                            ?>
                            <a class="collapse-item <?php if ($this->context->route === 'ilm/index/'.$item->id) echo 'active' ?>"
                               href="/admin/ilm/index/<?= $item->id?>"><?= $item->name?></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </li>        <!-- Nav Item - Five Menu -->
        <!-- Nav Item - Six Menu -->
        <li class="nav-item <?php if(Yii::$app->controller->id === 'audio' || Yii::$app->controller->id === 'video'|| Yii::$app->controller->id === 'photo') echo 'active'?>">
            <a class="nav-link <?php if(Yii::$app->controller->id !== 'audio' && Yii::$app->controller->id !== 'video' && Yii::$app->controller->id !== 'photo') echo 'collapsed'?>" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                <i class="fas fa-photo-video"></i>
                <span>MEDIA</span>
            </a>
            <div id="collapseSix" class="collapse <?php if(Yii::$app->controller->id === 'audio' || Yii::$app->controller->id === 'video' || Yii::$app->controller->id === 'photo') echo 'show'?>" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Actions:</h6>
                    <a class="collapse-item <?php if($this->context->route === 'audio/index') echo 'active'?>" href="/admin/audio/index">Audio</a>
                    <a class="collapse-item <?php if($this->context->route === 'photo/index') echo 'active'?>" href="/admin/photo/index">Foto</a>
                    <a class="collapse-item <?php if($this->context->route === 'video/index') echo 'active'?>" href="/admin/video/index">Video</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= yii::$app->user->identity->username?></span>
                            <div class="sidebar-brand-icon">
                                <i class="far fa-user-circle" style="color: #;"></i>
                            </div>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <?= Html::a(
                                Html::tag('i', '', ['class'=>'fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400']).
                                'Тизимдан чикиш',
                                ['/site/logout'],
                                ['data-method' => 'post', 'class' => 'dropdown-item']
                            ) ?>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->
            <div class="container">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
        <!-- End of Main Content -->
    </div>
</div>


<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php } ?>
