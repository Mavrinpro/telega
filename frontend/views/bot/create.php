<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bot $model */

$this->title = 'Create Bot';
$this->params['breadcrumbs'][] = ['label' => 'Bots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bot-create">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>

                </div>
            </div>
        </div>
    </div>

</section>