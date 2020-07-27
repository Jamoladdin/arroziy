<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ilm */

$this->title = 'Yangilash: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => $model->ilm->name, 'url' => ['index', 'id' => $model->ilmid]];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="ilm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id' => $id
    ]) ?>

</div>
