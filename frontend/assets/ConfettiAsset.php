<?php


namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

class ConfettiAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];

    public $js = [

        'confetti/confettikit.min.js',

    ];
    public $depends = [
        //'yii\bootstrap4\BootstrapAsset',
    ];
}