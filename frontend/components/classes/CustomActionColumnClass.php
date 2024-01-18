<?php

namespace frontend\components\classes;

use yii\grid\ActionColumn;
use yii\helpers\Html;

class CustomActionColumnClass extends ActionColumn
{
    public $icons = [
        'eye-open' => '<i class="mdi mdi-eye action-icon text-success"></i>',
        'pencil' => '<i class="mdi mdi-square-edit-outline action-icon text-warning"></i>',
        'trash' => '<i class="mdi mdi-trash-can action-icon text-danger"></i>',
    ];

    public $header;
    //public $header = Html::a('Сбросить фильтр', [$model], ['class' => 'btn btn-sm btn-outline-primary']);
    //public $header = '<a href="/" class="btn btn-sm btn-outline-primary">Сбросить фильтр</a>';
    protected function renderHeaderCellContent()
    {
        return Html::a('Сбросить', [$model], ['class' => 'btn btn-sm btn-outline-primary']);
    }
//
//    public function __construct()
//    {
//        $this->header = Html::a('Сбросить фильтр', [$model], ['class' => 'btn btn-sm btn-outline-primary']);
//
//    }





}