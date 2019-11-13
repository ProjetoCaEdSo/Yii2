<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comprovativo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comprovativo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Matricula')->textInput() ?>

    <?= $form->field($model, 'IdUtilizador')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
