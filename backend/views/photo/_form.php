<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Photo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photo-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?php if($model->isNewRecord) echo $form->field($model, 'picture')->fileInput(['required'=>'required']);
    else echo $form->field($model, 'picture')->fileInput();
    ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
