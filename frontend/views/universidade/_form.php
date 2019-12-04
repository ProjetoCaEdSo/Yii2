<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Universidade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="universidade-form">

    <div class="container-fluid">
    <?php $form = ActiveForm::begin(); ?>
        <div class="row">

            <div class="col-sm-8">
            <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-4">
            <?= $form->field($model, 'Distrito')->textInput(['maxlength' => true]) ?>
            </div>

        </div>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
