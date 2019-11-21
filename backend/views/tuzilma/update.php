<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tuzilma */

$this->title = 'O\'zgartirish: ' . $model->tuzilma->name;
?>
<div class="tuzilma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
