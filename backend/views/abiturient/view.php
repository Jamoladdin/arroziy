<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Abiturient */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Abiturientlarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abiturient-view">

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
            'name',
            'text:html',
        ],
    ]) ?>

</div>
