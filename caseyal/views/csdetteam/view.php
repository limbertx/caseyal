<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = "Miembro de equipo";
?>
<div class="csdetteam-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->pkdetteam], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->pkdetteam], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro de eliminar este miembro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fkteam0.descripcion',
            'fkintegrante0.nombrecom',
            'estado',
        ],
    ]) ?>

</div>
