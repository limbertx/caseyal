<?php

use yii\helpers\Html;

$this->title = $model->descripcion;
?>
<div class="csteam-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
