<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/static';
    public $css = [

        'backend/css/bootstrap.css',
        'vendor/fontawesome/css/font-awesome.min.css',
        'vendor/animo/animate+animo.css',

        'vendor/csspinner/csspinner.min.css',
        'backend/css/app.css',
    ];
    public $js = [
        //<!-- START Scripts-->
        //<!-- Main vendor Scripts-->
        'vendor/bootstrap/js/bootstrap.min.js',
        //<!-- Plugins-->
        'vendor/chosen/chosen.jquery.min.js',
        'vendor/slider/js/bootstrap-slider.js',
        'vendor/filestyle/bootstrap-filestyle.min.js',
        //<!-- Animo-->
        'vendor/animo/animo.min.js',
        //<!-- Sparklines-->
        'vendor/sparklines/jquery.sparkline.min.js',
        //<!-- Slimscroll-->
        'vendor/slimscroll/jquery.slimscroll.min.js',
        //<!-- START Page Custom Script-->
        //<!--  Flot Charts-->
        /*'vendor/flot/jquery.flot.min.js',
        'vendor/flot/jquery.flot.tooltip.min.js',
        'vendor/flot/jquery.flot.resize.min.js',
        'vendor/flot/jquery.flot.pie.min.js',
        'vendor/flot/jquery.flot.time.min.js',
        'vendor/flot/jquery.flot.categories.min.js',*/
        //<!--[if lt IE 8]>'js/excanvas.min.js'<![endif]-->
        //<!-- END Page Custom Script-->
        //<!-- App Main-->
        'backend/js/app.js',
        //<!-- END Scripts-->


    ];
}
