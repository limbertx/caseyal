<?php

use yii\helpers\Html;

$this->title = 'Cuenta de usuario';
?>
<div class="csuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
