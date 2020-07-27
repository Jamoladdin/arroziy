<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var common backend\models\Photo */

$this->title = 'Yangi';
$this->params['breadcrumbs'][] = ['label' => 'Suratlar', 'url' => 'index'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
