<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comentario */

$this->title = 'Update Comentario: ' . $model->IdComentario;
$this->params['breadcrumbs'][] = ['label' => 'Comentarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdComentario, 'url' => ['view', 'id' => $model->IdComentario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comentario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
