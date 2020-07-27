<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MutolaaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $id integer */
/* @var $category string */

$this->title = $category;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mutolaa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yangi', ['create', 'id' => $id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'title',
//            'text:html',
//            'img',
            'date',
            //'slug',
            //'year',
            //'month',
            //'day',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
