<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Audio */

$this->title = 'Yangilash: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Audio', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="audio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
