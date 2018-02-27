<?php

use yii\helpers\Html;

$this->title = 'Editando Diagrama';

?>
<div class="row">
    
    <input type="hidden" id="diagram-edit-username" value="<?= $username ?>">
    <input type="hidden" id="diagram-edit-project" value="<?= $idprojecto ?>">

    <div class="col-sm-1">
        <button type="button"
            class="btn btn-default btn-lg"
            data-toggle="tooltip" 
            title="Tabla de Base de datos">
            <span class="glyphicon glyphicon-th">
            </span>
        </button>
        <button type="button"
            class="btn btn-default btn-lg"
            data-toggle="tooltip" 
            title="Relacion de Base de datos"
            >
            <span class="glyphicon glyphicon-link">
            </span>
        </button>
        <button type="button"
            class="btn btn-default btn-lg"
            data-toggle="tooltip" 
            title="Cursor sin Data">
            <span class="glyphicon glyphicon-screenshot">
            </span>
        </button>
    
        <button type="button"
                data-toggle="modal"
                data-target="#sidebar-right"
                title="Abrir Chat online"
                class="btn btn-primary navbar-btn pull-left btn-lg">
                <span class="glyphicon glyphicon-comment">                
                </span>
        </button>
    </div>
    <p id="idResultado">Contenido</p>
    <!-- style="width:1000px; height:400px; background-color: #D8D8D8;" -->
    <div id="myDiagrama"
        class="col-sm-10"
        style="width:1000px; height:500px; background-color: #D8D8D8;"
        >
        mapa
    </div>
    <!-- chat online -->
    <div class="modal fade right" id="sidebar-right" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <!--encabezado-->
                <div class="modal-header">
                    <button type="button" 
                            class="close" 
                            data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Comunicacion</h4>
                </div>
                <!-- cuerpo -->
                <div class="modal-body">
                    <ul class="nav nav-pills nav-stacked text-center lead">
                        <li role="presentation" class="active">
                            <textarea name="di" id="chat" rows="15" class="form-control" readonly></textarea>
                        </li>
                        <hr>
                        <li>
                            <input type="text" id="message" class="form-control">
                        </li>
                    </ul>    
                    <hr>
                    <div class="btn-group-vertical center-block">
                        <a class="btn btn-success btn-lg" href="#" onClick="chat_sendMessage()">
                            <span class="glyphicon glyphicon-send"></span>  Enviar Mensaje
                        </a>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$script = <<< JS
    chat_joinToProjecto();
JS;

$script1 = <<< JS
    iniciarDiagrama();
JS;
$this->registerJs($script);
$this->registerJs($script1);

?>
