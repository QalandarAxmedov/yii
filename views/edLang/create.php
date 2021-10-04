<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EdLang */

$this->title = 'Create Ed Lang';
$this->params['breadcrumbs'][] = ['label' => 'Ed Langs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ed-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
