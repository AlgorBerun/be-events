<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/linearicons.css',
        'css/font-awesome.min.css',
        'css/bootstrap.css',
        'css/magnific-popup.css',
        'css/nice-select.css',
        'css/animate.min.css',
        'css/owl.carousel.css',
        'css/main.css'

    ];
    public $js = [
        'js/vendor/jquery-2.2.4.min.js',
        'js/vendor/bootstrap.min.js',
        'js/easing.min.js',
        'js/hoverIntent.js',
        'js/superfish.min.js',
        'js/jquery.ajaxchimp.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.sticky.js',
        'js/jquery.nice-select.min.js',
        'js/parallax.min.js',
        'js/mail-script.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset'
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
