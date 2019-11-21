<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Maqolalar */

$this->title = 'O\'zgartirish: ' . $model->title;
?>
<div class="maqolalar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
