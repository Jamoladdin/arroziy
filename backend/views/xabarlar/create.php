<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Xabarlar */

$this->title = 'Yangi xabar';
?>
<div class="xabarlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
