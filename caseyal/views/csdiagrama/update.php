<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Csdiagrama */

$this->title = 'Editando: ';
?>
<div class="csdiagrama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
