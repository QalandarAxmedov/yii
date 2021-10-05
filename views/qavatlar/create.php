<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Qavatlar */

$this->title = 'Create Qavatlar';
$this->params['breadcrumbs'][] = ['label' => 'Qavatlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qavatlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
