<?php

use yii\helpers\Html;

$this->title = 'Miembro de equipo';
?>
<div class="csdetteam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
