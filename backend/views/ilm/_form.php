<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Ilm */
/* @var $form yii\widgets\ActiveForm */
/* @var $id integer */
?>

<div class="ilm-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(),[
        'editorOptions' => [
            'inline' => false,
        ],
    ]) ?>

    <?php if($model->isNewRecord) echo $form->field($model, 'picture')->fileInput(['required'=>'required']);
    else echo $form->field($model, 'picture')->fileInput();
    ?>

    <?= $form->field($model, 'ilmid')->hiddenInput(['value' => $id])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlsh', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
