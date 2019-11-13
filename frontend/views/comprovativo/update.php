<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comprovativo */

$this->title = 'Update Comprovativo: ' . $model->IdComprovativo;
$this->params['breadcrumbs'][] = ['label' => 'Comprovativos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdComprovativo, 'url' => ['view', 'id' => $model->IdComprovativo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comprovativo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
