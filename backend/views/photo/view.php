<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Photo */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Suratlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
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
            'date',
            [
                'attribute' => 'name',
                'format' => 'image',
                'options' => ['class' => ''],
                'value' => function($data) {
                    return '../../frontend/web/mediaphoto/'.$data->name;
                }
            ],
        ],
    ]) ?>

</div>
