<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

?>

<div class="csteam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'estado')->widget(
        Select2::className(),
        [
            'hideSearch' => true,            
            'data' => ["T"=>"Activo", "F" => "Inactivo"],
            'language'  => 'es',
            'options'   => ['placeholder' => 'Seleccione estado de Equipo'],
            'pluginOptions' =>
                [
                    'allowClear' => true,
                ],
        ]
    )
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
