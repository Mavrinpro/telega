<?php

use app\models\Bot;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\BotLeads $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bots';
$this->params['breadcrumbs'][] = $this->title;
?>

    <div class="row">
        <div class="col-md-12">

            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a('Create Bot', ['create'], ['class' => 'btn btn-success']) ?>
            </p>


            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


            <?php
            echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_list',
                'viewParams' => [
                    'fullView' => true,
                    'context' => 'main-page',
                    // ...
                ],
                'layout' => "{summary}\n<div class='row'>{items}</div>\n{pager}",
                'summary' => 'Показано {count} из {totalCount}',
                'summaryOptions' => [
                    'tag' => 'span',
                    'class' => 'badge bg-light text-muted mb-2'
                ],
                //            'options' => [
                //                'tag' => false,
                //                'class' => 'row'
                //            ],
                'itemOptions' => [
                    'tag' => false,
                ],

            ]);
            ?>



        </div>
    </div>


