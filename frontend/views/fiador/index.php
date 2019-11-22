<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fiador';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fiador-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fiador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdFiador',
            'Nome',
            'DataNasc',
            'Email:email',
            'Contacto',
            //'NumCarCid',
            //'Mensalidade',
            //'CasaPropria',
            //'Distrito',
            //'Concelho',
            //'Freguesia',
            //'Morada',
            //'CodigoPostal',
            //'IdUtilizador',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
