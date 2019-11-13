<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Apartamento */

$this->title = $model->IdApartamento;
$this->params['breadcrumbs'][] = ['label' => 'Apartamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="apartamento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdApartamento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdApartamento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdApartamento',
            'Preco',
            'Aprovado',
            'Distrito',
            'Concelho',
            'Freguesia',
            'Morada',
            'CodPostal',
            'Descricao',
            'Fianca',
            'DataAnuncio',
            'Fumador',
            'Mobilado',
            'Internet',
            'NumQuartos',
            'TipoApart',
            'Cozinha',
            'Parking',
            'Animais',
            'Casais',
            'Genero',
            'NumWC',
            'IdUtilizador',
        ],
    ]) ?>

</div>
