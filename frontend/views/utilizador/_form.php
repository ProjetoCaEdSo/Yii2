<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Utilizador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="utilizador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DataNasc')->textInput() ?>

    <?= $form->field($model, 'NumCarCid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Contacto')->textInput() ?>

    <?= $form->field($model, 'Distrito')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Concelho')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Freguesia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Morada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CodigoPostal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DataRegis')->textInput() ?>

    <?= $form->field($model, 'Tipo')->dropDownList([ 'Estudante' => 'Estudante', 'Senhorio' => 'Senhorio', 'Ambos' => 'Ambos', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'IdUniversidade')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
