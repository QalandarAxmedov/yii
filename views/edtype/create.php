<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EdType */

$this->title = 'Create Ed Type';
$this->params['breadcrumbs'][] = ['label' => 'Ed Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ed-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
