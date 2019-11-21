<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Arab */

$this->title = $model->title;
?>
<div class="arab-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('O\'zgartirish', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'text:html',
            [
                'attribute' => 'img',
                'format' => ['image',['width'=>600,'height'=>400]],
                'options' => ['class' => ''],
                'value' => function($data) {
                    return '/backend/web/321/ar10/'.$data->img;
                }
            ],
            'date',
        ],
    ]) ?>

</div>
