<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tavsiya */

$this->title = 'Yangi tavsiya';
?>
<div class="tavsiya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
