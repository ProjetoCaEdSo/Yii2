<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comprovativos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comprovativo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Comprovativo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdComprovativo',
            'Matricula',
            'IdUtilizador',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
