<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Favorito */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="favorito-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DataFavorito')->textInput() ?>

    <?= $form->field($model, 'IdUtilizador')->textInput() ?>

    <?= $form->field($model, 'IdApartamento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
