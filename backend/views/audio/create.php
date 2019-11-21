<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Audio */

$this->title = 'Yangi Audio';
?>
<div class="audio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
