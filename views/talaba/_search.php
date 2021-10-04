<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TalabaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talaba-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ism') ?>

    <?= $form->field($model, 'familiya') ?>

    <?= $form->field($model, 'otasining_ismi') ?>

    <?= $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'fakultet_id') ?>

    <?php // echo $form->field($model, 'kurs_id') ?>

    <?php // echo $form->field($model, 'guruh_id') ?>

    <?php // echo $form->field($model, 'yunalish_id') ?>

    <?php // echo $form->field($model, 'edlang_id') ?>

    <?php // echo $form->field($model, 'edtype_id') ?>

    <?php // echo $form->field($model, 'bino_id') ?>

    <?php // echo $form->field($model, 'qavat_id') ?>

    <?php // echo $form->field($model, 'xona_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
