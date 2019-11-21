<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CategoryTalabalarga */

$this->title = 'Create Category Talabalarga';
$this->params['breadcrumbs'][] = ['label' => 'Category Talabalargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-talabalarga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
