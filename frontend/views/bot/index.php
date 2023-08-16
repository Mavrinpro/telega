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
<section class="mt-5">
    <div class="row">
        <div class="col-md-12">

            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a('Create Bot', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'name',
                    'user_id',
                    //'token',
                    [
                        'attribute' => 'token',
                        'format' => 'html',
                        'value' => function($model){
                            return '<a href="https://t.me/glazcentre_crm_bot?start='.$model->token.'">t.me/glazcentre_crm_bot?start</a>';
                        }
                    ],
                    'create_at',
                    //'update_at',
                    //'active',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Bot $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>

            <?php Pjax::end(); ?>

        </div>
    </div>
</section>


