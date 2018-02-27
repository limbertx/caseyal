<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<div class="csuser-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pkuser') ?>

    <?= $form->field($model, 'nickname') ?>

    <?= $form->field($model, 'nombrecom') ?>

    <?= $form->field($model, 'apellidocom') ?>

    <?= $form->field($model, 'password') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
