<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Xabarlar */

$this->title = 'O\'zgartirish: ' . $model->title;
?>
<div class="xabarlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
