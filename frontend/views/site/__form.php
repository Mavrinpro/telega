<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */

/** @var \frontend\models\IndexForm $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\IndexForm;
/** @var yii\web\View $this */

?>
<?php $form = ActiveForm::begin([
    'id' => 'contact',
    'validateOnBlur' => true,
    'enableClientValidation' => true,
    'errorCssClass' => 'error',
    'fieldConfig' => [
        'errorOptions' => [
            'encode' => true,
            'class' => 'help-block',

        ],
    ],

    'options' => [
        'class' =>'form mt-5',


    ],

]); ?>
<p class="title text-center">Оставить заявку на консультацию</p>
<div class="d-flex justify-content-center flex-column flex-md-row">
    <div class="form-group mr-md-3">

        <?= $form->field($model, 'name', ['errorOptions' => ['tag' => 'div', 'class' => 'text-danger']])->textInput(['class' => 'form-control br-50 p-4', 'placeholder' => 'Имя', ])->label(false) ?>
    </div>
    <div class="form-group mr-md-3">
        <?= $form->field($model, 'phone', ['errorOptions' => ['tag' => 'div', 'class' => 'text-danger']])->textInput(['class' => 'form-control br-50 p-4', 'placeholder' => '89090000000'])->label(false) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-lg bg_dark_blue text-light br-50 btn-block', 'name' => 'contact-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<!--<form class="form mt-5" id="recl2903" method="POST" >-->
<!--    <p class="title text-center">Оставить заявку на консультацию</p>-->
<!--    <div class="d-flex justify-content-center flex-column flex-md-row">-->
<!--        <div class="form-group mr-md-3">-->
<!--            <input type="text" placeholder="Ваше имя" name="name" class="form-control br-50 p-4">-->
<!--        </div>-->
<!--        <div class="form-group mr-md-3">-->
<!--            <input placeholder="Номер телефона/email" name="contact" class="form-control br-50 p-4">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <input type="button" class="btn btn-lg btn-primary br-50 btn-block" onclick="call('recl2903')" value="Отправить">-->
<!--        </div>-->
<!--        <input type="hidden" name="recaptcha_response" id="recaptchaResponse2903"-->
<!--               value="03AIIukzjrgyG8aoQwMpVRVGD3ICYsSELMgIRjMzG4paxzrLzWYJMcG6SaDVNG9m92J7jyszEWz0UrLTQQuAc5oST8VymzZx9Q3VNbcysMmb8wqeLJ1u39j_pAP3c3PFYp4byj_RxTALqghgSo1eBe4dga7VR1mKwxgAufViz9v3VkLDlozGd8cPCCQ8TGEHCoKTjdGlidSo-todY6FqFa61RthZnBDqLxbLTnOj_ToecgNRCm9d5TPjezS7oFZN1kwDCl4UjRbOrIo6T8RZa25fiQ2JkoGWlHcI-DIm3x04dHgsMHwQQcHjn-oIZPi1ylAt9B_Dc8gPzeLdt0FapfjUHH_WxNmt0w6L5VTmnhcS-p6GFeK_qKe9bMgmvVZ1x7AW7i9eUql0amdSi4ECccaQyNxx79mAC_QUIkChhSFhRGIst-Fl5ZicY1j33pvSR9uDsI4VhNMm122XW2iRbkU3FGVwx1Ux5pQ1bzb8KDvZUKTm_qbjJGHb0FqDTKCWuQFNlwqJhmDKU4">-->
<!--        <input type="hidden" name="wintype" value="aftertext">-->
<!--    </div>-->
<!--    <div id="recl2903res"></div>-->
<!--</form>-->
