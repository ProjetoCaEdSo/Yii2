<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bug Report';
$this->params['breadcrumbs'][] = ['label' => 'Base Dados', 'url' => ['/site/dbase']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bug-report-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bug Report', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdBug',
            'Descricao',
            'DataEnviado',
            'IdUtilizador',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
