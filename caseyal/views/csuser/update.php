<?php

use yii\helpers\Html;

$this->title = 'Perfil de usuario';
?>
<div class="csuser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
