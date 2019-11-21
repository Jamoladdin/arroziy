<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AbiturientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Abiturientga';
?>
<div class="abiturient-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Yangi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'abiturient.name',
            'text:html',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
