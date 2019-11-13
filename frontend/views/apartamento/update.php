<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Apartamento */

$this->title = 'Update Apartamento: ' . $model->IdApartamento;
$this->params['breadcrumbs'][] = ['label' => 'Apartamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdApartamento, 'url' => ['view', 'id' => $model->IdApartamento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apartamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
