<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/** no se esta utilizando esto eliminar**/
$this->title = $model->pkuser;
$this->params['breadcrumbs'][] = ['label' => 'Csusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="csuser-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pkuser], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pkuser], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pkuser',
            'nickname',
            'nombrecom',
            'apellidocom',
            'password',
            'email:email',
            'authkey',
            'accesstoken',
            'estado'
        ],
    ]) ?>

</div>
