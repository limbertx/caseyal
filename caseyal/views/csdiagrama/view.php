<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = "Detalles";
?>
<div class="csdiagrama-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->pkdiagrama], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->pkdiagrama], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro de eliminar item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nombre',
            'fkteam0.descripcion',
        ],
    ]) ?>
</div>
