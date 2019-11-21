<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Abiturient */

$this->title = 'O\'zgartirish: ' . $model->abiturient->name;
?>
<div class="abiturient-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
