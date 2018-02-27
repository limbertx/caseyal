<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="csuser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombrecom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidocom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_repeat')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'authkey')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'accesstoken')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'estado')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear usuario' : 'Guardar Cambios', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
