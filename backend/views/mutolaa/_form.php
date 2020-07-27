<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Mutolaa */
/* @var $form yii\widgets\ActiveForm */
/* @var $id integer */
/* @var $category string */
?>

<div class="mutolaa-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mutolaaid')->hiddenInput(['value' => $id])->label(false) ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(),[
        'editorOptions' => [
            'inline' => false,
        ],
    ]) ?>

    <?php if($model->isNewRecord) echo $form->field($model, 'picture')->fileInput(['required'=>'required']);
    else echo $form->field($model, 'picture')->fileInput();
    ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
