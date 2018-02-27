<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Csteam;

?>

<div class="csdiagrama-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fkteam')->widget(
        Select2::className(),
        [
            'hideSearch' => true,
            'data' => ArrayHelper::map(Csteam::find()->all(), 'pkteam', 'descripcion'),
            'language'  => 'es',
            'options'   => ['placeholder' => 'Seleccione equipo'],
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
