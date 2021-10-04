<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EdLang */

$this->title = 'Update Ed Lang: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ed Langs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ed-lang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
