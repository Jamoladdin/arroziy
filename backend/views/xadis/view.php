<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Xadis */

$this->title = $model->title;
?>
<div class="xadis-view">

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
            'id',
            'title',
            'text:html',
            [
                'attribute' => 'img',
                'format' => ['image',['width'=>600,'height'=>400]],
                'options' => ['class' => ''],
                'value' => function($data) {
                    return '/backend/web/321/xs10/'.$data->img;
                }
            ],
            'date',
        ],
    ]) ?>

</div>
