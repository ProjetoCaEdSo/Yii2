<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Imagem */

$this->title = 'Update Imagem: ' . $model->IdImagem;
$this->params['breadcrumbs'][] = ['label' => 'Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdImagem, 'url' => ['view', 'id' => $model->IdImagem]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="imagem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
