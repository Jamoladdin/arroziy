<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Quron */

$this->title = 'Yangi (Quron va Tajvid)';
?>
<div class="quron-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
