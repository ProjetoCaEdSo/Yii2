<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Apelido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DataNasc')->textInput() ?>

    <?= $form->field($model, 'NumCarCid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telemovel')->textInput() ?>

    <?= $form->field($model, 'Distrito')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Morada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CodigoPostal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Universidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DataRegis')->textInput() ?>

    <?= $form->field($model, 'Tipo')->dropDownList([ 'Estudante' => 'Estudante', 'Senhorio' => 'Senhorio', 'Ambos' => 'Ambos', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verification_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
