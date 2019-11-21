<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Fiqh */

$this->title = $model->title;
?>
<div class="fiqh-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('O\'zgartirish', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'O\'chirmoqchimisiz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            'text:html',
            [
                'attribute' => 'img',
                'format' => ['image',['width'=>600,'height'=>400]],
                'options' => ['class' => ''],
                'value' => function($data) {
                    return '/backend/web/321/fq10/'.$data->img;
                }
            ],
            'date',
        ],
    ]) ?>

</div>
