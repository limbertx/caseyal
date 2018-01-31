<?php
    use yii\bootstrap\Nav;
    use yii\helpers\Html;
    use  yii\helpers\Url;

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            ['label' => 'Perfil', 'url' => ['/csuser/update', 'id'=> Yii::$app->user->identity->getId()]],

            ['label' => 'Equipos', 'url' => ['/csteam/index']],
            ['label' => 'Proyectos', 'url' => ['/csdiagrama/index']],

            Yii::$app->user->isGuest ? (
                ['label' => 'Iniciar session', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Cerrar session (' . Yii::$app->user->identity->getUsername() . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
 ?>
