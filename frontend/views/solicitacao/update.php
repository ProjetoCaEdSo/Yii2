<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Solicitacao */

$this->title = 'Update Solicitacao: ' . $model->IdSolicitacao;
$this->params['breadcrumbs'][] = ['label' => 'Base Dados', 'url' => ['/site/dbase']];
$this->params['breadcrumbs'][] = ['label' => 'Solicitacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdSolicitacao, 'url' => ['view', 'id' => $model->IdSolicitacao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solicitacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
