<?php


namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

class AnaliticAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];

    public $js = [

        //'theme/vendor/apexcharts/apexcharts.min.js',

        'https://apexcharts.com/samples/assets/stock-prices.js',
        'https://apexcharts.com/samples/assets/irregular-data-series.js',
        'theme/js/pages/demo.apex-line.js',

    ];
    public $depends = [
        'yii\bootstrap4\BootstrapAsset',
    ];
}