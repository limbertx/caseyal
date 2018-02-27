<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Equipos de desarrollo';
?>
<div class="csteam-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nuevo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'codigo',
            'descripcion',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{addmember}',
                'controller' => 'CsteamController',
                'buttons' => [
                    'addmember' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon glyphicon-user
"></span>', ['csdetteam/index',
             'fkteam' => $model->pkteam
            ], [
                    'title' => 'Adicionar Miembro',
                    ]);
                }
              ],
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
