<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Mutolaa */
/* @var $id integer */
/* @var $category string */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => $model->mutolaa->name, 'url' => ['index', 'id' => $model->mutolaaid]];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mutolaa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a("O'chirish", ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => "Haqiqatan ham ushbu malumotni o'chirmoqchimisiz?",
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'title',
            'text:html',
            [
                'attribute' => 'img',
                'format' => ['image',['width'=>600,'height'=>400]],
                'options' => ['class' => ''],
                'value' => function($data) {
                    return '../../frontend/web/images/'.$data->img;
                }
            ],
            'date',
            'readed',
            'year',
            'month',
            'day',
        ],
    ]) ?>

</div>
