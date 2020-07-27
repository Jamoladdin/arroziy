<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mutolaa */
/* @var $id integer */

$this->title = 'Yangilash: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => $model->mutolaa->name, 'url' => ['index', 'id' => $id]];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="mutolaa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id' => $id
    ]) ?>

</div>
