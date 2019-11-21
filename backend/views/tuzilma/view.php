<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->tuzilma->name;
?>
<div class="tuzilma-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('O\'zgartirish', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tuzilma.name',
            'text:html',
        ],
    ]) ?>

</div>
