<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="csdiagrama-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pkdiagrama') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'fkteam') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
