<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CategoryAbiturient */

$this->title = 'Create Category Abiturient';
$this->params['breadcrumbs'][] = ['label' => 'Category Abiturients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-abiturient-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
