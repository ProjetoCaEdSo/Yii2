<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdUtilizador',
            'Nome',
            'Apelido',
            'DataNasc',
            'NumCarCid',
            //'Email:email',
            //'Telemovel',
            //'Distrito',
            //'Morada',
            //'CodigoPostal',
            //'Universidade',
            //'DataRegis',
            //'Tipo',
            //'password_hash',
            //'password_reset_token',
            //'verification_token',
            //'auth_key',
            //'status',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
