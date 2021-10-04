<?php

use app\models\Course;
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

    <?php $form = ActiveForm::begin();?>

    <?=$form->field($model, 'ism')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'familiya')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'otasining_ismi')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'region_id')->dropDownList(
    ArrayHelper::map(Region::find()->all(), 'id', 'name'),
    [
        'prompt' => 'Hududni tanlang',
        'onchange' => '
            $.post( "' . urldecode(Yii::$app->urlManager->createUrl('district/lists?id=')) . '"+$(this).val(), function( data ) {
              $( "#talaba-district_id" ).html( data );
            });
        ']);?>


    <?=$form->field($model, 'district_id')->dropDownList(
    [
        'prompt' => '-Tumanni tanlang-',
    ]);?>
    <?=$form->field($model, 'fakultet_id')->dropDownList(
    ArrayHelper::map(Faculty::find()->all(), 'id', 'name'),
    [
        'prompt' => '-Fakultetni tanlang-',
    ]
);?>
    <?=$form->field($model, 'kurs_id')->dropDownList(
    ArrayHelper::map(Course::find()->all(), 'id', 'name'),
    [
        'prompt' => '-Kursni tanlang-',
    ]
);?>

    <?=$form->field($model, 'guruh_id')->textInput()?>

    <?=$form->field($model, 'yunalish_id')->textInput()?>

    <?=$form->field($model, 'edlang_id')->textInput()?>

    <?=$form->field($model, 'edtype_id')->textInput()?>

    <?=$form->field($model, 'bino_id')->textInput()?>

    <?=$form->field($model, 'qavat_id')->textInput()?>

    <?=$form->field($model, 'xona_id')->textInput()?>

    <div class="form-group">
        <?=Html::submitButton('Save', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end();?>

</div>
