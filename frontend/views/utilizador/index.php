<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Utilizadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utilizador-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utilizador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdUtilizador',
            'Nome',
            'DataNasc',
            'NumCarCid',
            'Email:email',
            //'Contacto',
            //'Distrito',
            //'Concelho',
            //'Freguesia',
            //'Morada',
            //'CodigoPostal',
            //'DataRegis',
            //'Tipo',
            //'IdUniversidade',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
