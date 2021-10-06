<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Xonalar */

$this->title = 'Create Xonalar';
$this->params['breadcrumbs'][] = ['label' => 'Xonalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xonalar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
