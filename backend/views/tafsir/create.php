<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tafsir */

$this->title = 'Yangi';
?>
<div class="tafsir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>