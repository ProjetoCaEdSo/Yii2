<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apartamento';
$this->params['breadcrumbs'][] = ['label' => 'Base Dados', 'url' => ['/site/dbase']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apartamento-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Apartamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdApartamento',
            'Titulo',
            'Preco',
            'Aprovado',
            'Distrito',
            //'Concelho',
            //'Freguesia',
            //'Morada',
            //'CodPostal',
            //'Descricao',
            //'Fianca',
            //'DataAnuncio',
            //'Fumador',
            //'Mobilado',
            //'Internet',
            //'NumQuartos',
            //'TipoApart',
            //'Cozinha',
            //'Parking',
            //'Animais',
            //'Casais',
            //'Genero',
            //'NumWC',
            //'IdUtilizador',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
