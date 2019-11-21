<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\IslomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Islom Tarixi';
?>
<div class="islom-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yangi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>