<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Bot $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value' => \Yii::$app->getUser()->id])->label(false) ?>

    <?= $form->field($model, 'token')->hiddenInput(['maxlength' => true, 'value' => Yii::$app->security->generateRandomString() . '_' . time()])->label(false) ?>

    <?= $form->field($model, 'create_at')->hiddenInput(['value' => time()])->label(false) ?>


    <?= $form->field($model, 'active')->hiddenInput(['value' => 1])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
