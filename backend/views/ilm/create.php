<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ilm */
/* @var $id integer */

$this->title = 'Yangi';
$this->params['breadcrumbs'][] = ['label' => $category, 'url' => ['index', 'id' => $id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ilm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id' => $id
    ]) ?>

</div>
