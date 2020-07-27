<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CategoryIlm */

$this->title = 'Yangi';
$this->params['breadcrumbs'][] = ['label' => 'Ilm Kategoriyasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-ilm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
