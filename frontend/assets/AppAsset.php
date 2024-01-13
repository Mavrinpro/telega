<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'theme/vendor/daterangepicker/daterangepicker.css',
        'theme/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css',
        ['theme/css/app-saas.min.css', 'id' => 'app-style'],
        'theme/css/icons.min.css',

        //'css/site.css',
        //'css/font-awesome/font-awesome.min.css',

    ];

    public $js = [
        'theme/js/vendor.min.js',
        '/theme/vendor/daterangepicker/moment.min.js',
        'theme/vendor/daterangepicker/daterangepicker.js',
        'theme/vendor/apexcharts/apexcharts.min.js',
        'theme/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js',
        'theme/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js',
        'theme/js/pages/demo.dashboard.js',
        'theme/js/app.min.js',
        'https://apexcharts.com/samples/assets/stock-prices.js',
        'https://apexcharts.com/samples/assets/irregular-data-series.js',
        'theme/js/pages/demo.apex-line.js',
        '//chat/supportboard/js/min/jquery.min.js',
        '//chat/supportboard/js/main.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap4\BootstrapAsset',
        //'yii\bootstrap4\BootstrapAsset',
    ];
}
