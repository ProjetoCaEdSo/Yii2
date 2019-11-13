<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BugReport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bug-report-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DataEnviado')->textInput() ?>

    <?= $form->field($model, 'IdUtilizador')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
