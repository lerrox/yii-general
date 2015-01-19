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
        'stylesheets/application/bootstrap.css',
        'stylesheets/application/magnific-popup.css',
        'stylesheets/application/magnific-popup.css',
        'stylesheets/application/font-awesome.css',
        'stylesheets/application/flexslider.css',
        'stylesheets/application/style.css',
        'stylesheets/application/responsive.css',
    ];
    public $js = [
        'javascripts/application/jquery.min.js',
        'javascripts/application/jquery.migrate.js',
        'javascripts/application/jquery.magnific-popup.min.js',
        'javascripts/application/bootstrap.js',
        'javascripts/application/jquery.imagesloaded.min.js',
        'javascripts/application/jquery.isotope.min.js',
        'http://maps.google.com/maps/api/js?sensor=false',
        'javascripts/application/gmap3.min.js',
        'javascripts/application/smooth-scroll.js',
        'javascripts/application/jquery.flexslider.js',
        'javascripts/application/retina-1.1.0.min.js',
        'javascripts/application/plugins-scroll.js',
        'javascripts/application/script.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
