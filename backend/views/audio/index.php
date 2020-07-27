<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AudioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Audio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Yangi Audio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            [
                'attribute' => 'name',
                'format' => 'raw',
                'value' => function($data){
                    return "<audio controls='controls'>
                        <source src='../../frontend/web/mediaaudio/" . $data->name  .   "' type='audio/mp3' />
                       </audio>";
                }
            ],
            'date',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
            ],
        ],
    ]); ?>
</div>
