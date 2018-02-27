<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->descripcion;
?>
<div class="csteam-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->pkteam], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->pkteam], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estas seguro de eliminar equipo de desarrollo?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codigo',
            'descripcion',
        ],
    ]) ?>

</div>
