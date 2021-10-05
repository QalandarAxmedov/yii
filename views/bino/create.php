<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bino */

$this->title = 'Create Bino';
$this->params['breadcrumbs'][] = ['label' => 'Binos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bino-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
