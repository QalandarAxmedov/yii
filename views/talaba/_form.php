<?php

use app\models\Course;
use app\models\EdLang;
use app\models\Faculty;
use app\models\Region;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Talaba */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talaba-form">

    <?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
]);?>
<div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">

    <?=$form->field($model, 'ism')->textInput(['maxlength' => true, 'placeholder' => "Ismingizni kiriting"])->label(false)?>

    <?=$form->field($model, 'familiya')->textInput(['maxlength' => true, 'disabled' => true])?>

    <?=$form->field($model, 'otasining_ismi')->textInput(['maxlength' => true])?>

            <!-- <?=Html::submitButton('Login', ['class' => 'btn btn-primary'])?> -->
        </div>
    </div>
    <?=$form->field($model, 'region_id')->dropDownList(
    ArrayHelper::map(Region::find()->all(), 'id', 'name'),
    [
        'prompt' => 'Hududni tanlang',
        'onchange' => '
            $.post( "' . urldecode(Yii::$app->urlManager->createUrl('district/lists?id=')) . '"+$(this).val()+"&faculty_id=", function( data ) {
              $( "#talaba-district_id" ).html( data );
            });
        '])->label("Hudud");?>


    <?=$form->field($model, 'district_id')->dropDownList(
    [
        'prompt' => 'Tumanni tanlang',

    ])->label("Tuman/shahar nomi");?>
    <?=$form->field($model, 'fakultet_id')->dropDownList(
    ArrayHelper::map(Faculty::find()->all(), 'id', 'name'),
    [
        'prompt' => 'Fakultetni tanlang',
    ]
)->label("Fakultet nomi");?>
    <?=$form->field($model, 'kurs_id')->dropDownList(
    ArrayHelper::map(Course::find()->all(), 'id', 'name'),
    [
        'prompt' => 'Kursni tanlang',
        'onchange' => '
        $.post(
            "/program/lists?faculty_id="
                +$("#talaba-fakultet_id").val() + "&course_id=" + $(this).val(),
            function(data) {
                  $( "#talaba-yunalish_id").html(data)
            }
        )',
    ]
);?>

    <?=$form->field($model, 'guruh_id')->textInput()?>
    <?=$form->field($model, 'yunalish_id')->dropDownList(
    [
        'prompt' => 'Yo\'nalishni tanlang',
    ]);?>

    <?=$form->field($model, 'edlang_id')->dropDownList(
    ArrayHelper::map(EdLang::find()->all(), 'id', 'name'),
    [
        'prompt' => 'Ta\'lim tilini tanlang',
    ]);?>

    <?=$form->field($model, 'edtype_id')->textInput()?>

    <?=$form->field($model, 'bino_id')->textInput()?>

    <?=$form->field($model, 'qavat_id')->textInput()?>

    <?=$form->field($model, 'xona_id')->textInput()?>

    <div class="form-group">
        <?=Html::submitButton('Save', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end();?>

</div>
