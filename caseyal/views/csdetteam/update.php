<?php

use yii\helpers\Html;

$this->title = 'Actualizar Miembro';
?>
<div class="csdetteam-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
