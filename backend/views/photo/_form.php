<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Photo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photo-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Saqlash' : 'Saqlash', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>