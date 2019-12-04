<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Utilizador;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Imagem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imagem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Imagem')->textInput() ?>

    <?= $form->field($model, 'IdApartamento')->dropDownList(ArrayHelper::map(Utilizador::find()->all(),'IdUtilizador', 'Email'), ['prompt'=>''])->label('Email do Utilizador') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
