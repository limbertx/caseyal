<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/sidebar.css',
    ];
    public $js = [
        
        'js/api/go-debug.js',
        //'js/api/go.js',
        'js/api/socket.io.js',

        'js/modelos/templateLink.js',
        'js/modelos/templateTable.js',
        'js/modelos/csTabla.js',
        'js/modelos/trama.js',

        'js/restclient/restTabla.js',
        'js/diagramador.js',
        'js/Constantes.js',
        'js/principal.js',
        'js/chatOnline.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

