<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Audio */

$this->title = 'Yangi Audio';
$this->params['breadcrumbs'][] = ['label' => 'Audio', 'url' => 'index'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
