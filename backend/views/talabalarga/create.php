<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Talabalarga */

$this->title = 'Yangi';
$this->params['breadcrumbs'][] = ['label' => 'Talabalarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talabalarga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
