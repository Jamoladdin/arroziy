<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Talabalarga */

$this->title = 'Talabalarga: ' . $model->talabalarga->name;
?>
<div class="talabalarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
