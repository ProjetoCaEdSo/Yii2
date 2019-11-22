<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Utilizador */

$this->title = $model->IdUtilizador;
$this->params['breadcrumbs'][] = ['label' => 'Utilizadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="utilizador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdUtilizador], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdUtilizador], [
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
            'IdUtilizador',
            'Nome',
            'DataNasc',
            'NumCarCid',
            'Email:email',
            'Contacto',
            'Distrito',
            'Morada',
            'CodigoPostal',
            'DataRegis',
            'Tipo',
            'password_hash',
            'password_reset_token',
            'verification_token',
            'auth_key',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
