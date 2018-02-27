<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\Csuser;
use yii\helpers\ArrayHelper;
?>

<div class="csdetteam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fkteam')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'fkintegrante')->widget(
        Select2::className(),
        [
            'hideSearch' => true,
            'data' => ArrayHelper::map(Csuser::find()->all(), 'pkuser', 'nickname'),
            'language'  => 'es',
            'options'   => ['placeholder' => 'Seleccione Miembro de equipo'],
            'pluginOptions' =>
                [
                    'allowClear' => true,
                ],
        ]
    )
    ?>    

    <?= $form->field($model, 'estado')->widget(
        Select2::className(),
        [
            'hideSearch' => true,            
            'data' => ["T"=>"Activo", "F" => "Inactivo"],
            'language'  => 'es',
            'options'   => ['placeholder' => 'Seleccione estado de miembro'],
            'pluginOptions' =>
                [
                    'allowClear' => true,
                ],
        ]
    )
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Adicionar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
