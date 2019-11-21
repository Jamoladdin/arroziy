<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CategoryTuzilma */

$this->title = 'Create Category Tuzilma';
$this->params['breadcrumbs'][] = ['label' => 'Category Tuzilmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-tuzilma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
