<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Equipo : ' . $model->descripcion;
?>
<div class="csdetteam-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Adicionar miembro', ['create', 'pkteam'=>$model->pkteam], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'fkintegrante',
                'value'     => 'fkintegrante0.nombrecom'
            ],
            'estado',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
