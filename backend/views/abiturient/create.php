<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Abiturient */

$this->title = 'Yangi';
$this->params['breadcrumbs'][] = ['label' => 'Abiturientlarga', 'url' => 'index'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abiturient-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
