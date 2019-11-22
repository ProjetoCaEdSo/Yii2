<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Universidade';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="universidade-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Universidade', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdUniversidade',
            'Nome',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
