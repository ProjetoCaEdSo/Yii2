<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fiador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fiador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DataNasc')->textInput() ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Contacto')->textInput() ?>

    <?= $form->field($model, 'NumCarCid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mensalidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CasaPropria')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Distrito')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Concelho')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Freguesia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Morada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CodigoPostal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IdUtilizador')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
