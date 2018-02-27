<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Proyecto';
?>
<div class="csdiagrama-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nuevo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nombre',
            [
                'attribute' => 'fkteam',
                'value' => 'fkteam0.descripcion'
            ],


            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{editarDiagrama}',
                'controller' => 'Csdiagrama',
                'buttons' => [
                    'editarDiagrama' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon glyphicon-picture
"></span>', ['csdiagrama/editschema',
             'pkdiagrama' => $model->pkdiagrama
            ], [
                    'title' => 'Editar Diagrama',
                    ]);
                }
              ],
            ],            



            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
