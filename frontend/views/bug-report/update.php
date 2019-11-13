<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BugReport */

$this->title = 'Update Bug Report: ' . $model->IdBug;
$this->params['breadcrumbs'][] = ['label' => 'Bug Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdBug, 'url' => ['view', 'id' => $model->IdBug]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bug-report-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
