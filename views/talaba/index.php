<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TalabaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Talaba';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talaba-index">

    <h1><?=Html::encode($this->title)?></h1>

    <p>
        <?=Html::a('Yangi talaba qo\'shish', ['create'], ['class' => 'btn btn-success'])?>
    </p>

    <!-- <?php echo $this->render('_search', ['model' => $searchModel]); ?> -->

    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'ism',
        'familiya',
        'otasining_ismi',
        //'region_id',
        //'district_id',
        //'fakultet_id',
        //'kurs_id',
        //'guruh_id',
        //'yunalish_id',
        //'edlang_id',
        //'edtype_id',
        //'bino_id',
        //'qavat_id',
        //'xona_id',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]);?>


</div>
