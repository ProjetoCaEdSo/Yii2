<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Apartamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apartamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Preco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Aprovado')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Distrito')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Concelho')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Freguesia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Morada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CodPostal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fianca')->textInput() ?>

    <?= $form->field($model, 'DataAnuncio')->textInput() ?>

    <?= $form->field($model, 'Fumador')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Mobilado')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Internet')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'NumQuartos')->textInput() ?>

    <?= $form->field($model, 'TipoApart')->dropDownList([ 'T0' => 'T0', 'T1' => 'T1', 'T2' => 'T2', 'T3' => 'T3', 'T4' => 'T4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Cozinha')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Parking')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Animais')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Casais')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Genero')->dropDownList([ 'F' => 'F', 'M' => 'M', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'NumWC')->textInput() ?>

    <?= $form->field($model, 'IdUtilizador')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
