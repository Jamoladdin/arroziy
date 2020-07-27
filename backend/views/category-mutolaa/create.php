<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CategoryMutolaa */

$this->title = 'Yangi';
$this->params['breadcrumbs'][] = ['label' => 'Mutolaa Kategoriyalari', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-mutolaa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
