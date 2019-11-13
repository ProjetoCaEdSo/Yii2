<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fiador */

$this->title = 'Update Fiador: ' . $model->IdFiador;
$this->params['breadcrumbs'][] = ['label' => 'Fiadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdFiador, 'url' => ['view', 'id' => $model->IdFiador]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fiador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
