<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Audio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audio-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php if($model->isNewRecord) echo $form->field($model, 'audio')->fileInput(['required'=>'required']);
    else echo $form->field($model, 'audio')->fileInput();
    ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
