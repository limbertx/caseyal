<?php

use yii\helpers\Html;

$this->title = 'Diagrama';
?>
<div class="csdiagrama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
