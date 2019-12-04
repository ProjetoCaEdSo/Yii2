<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use frontend\models\Universidade;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Utilizador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="utilizador-form">

    <div class="container-fluid">
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">

            <div class="col-sm-2">
                <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-2">
                <?= $form->field($model, 'Apelido')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-4">
                <?= $form->field($model, 'DataNasc')->widget(DatePicker::classname(), [
                        'options' => [
                            'class' => 'form-control',
                            'autocomplete' => 'off'],
                        'clientOptions' => [
                            'language' => 'en',
                            'yearRange' => '1950:2050',
                            'changeMonth' => true,
                            'changeYear' => true
                        ]]) ?>
            </div>

            <div class="col-sm-4">
                <?= $form->field($model, 'NumCarCid')->textInput(['maxlength' => true]) ?>
            </div>
            
            <div class="col-sm-3">
                <?= $form->field($model, 'Tipo')->dropDownList([ 'Estudante' => 'Estudante', 'Senhorio' => 'Senhorio', 'Ambos' => 'Estudante e Senhorio', 'Admin' => 'Admin', ], ['prompt' => '']) ?>
            </div>

            <div class="col-sm-6">
                <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-3">
                <?= $form->field($model, 'Telemovel')->textInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <?= $form->field($model, 'Distrito')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-7">
                <?= $form->field($model, 'Morada')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-2">
                <?= $form->field($model, 'CodigoPostal')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-8">
                <?= $form->field($model, 'Universidade')->dropDownList(ArrayHelper::map(Universidade::find()->all(),'Nome', 'Nome'), ['prompt'=>''])->label('Universidade') ?>
            </div>

            <div class="col-sm-4">
                <label class="control-label">Data Registo</label>
                <?php if($model->DataRegis!=null){ echo Html::tag('p', Html::encode($model->DataRegis), ['class' => 'form-control']);
                    }
                    else{ echo Html::tag('p', Html::encode(date('d/m/y', time())), ['class' => 'form-control']);
                    } ?>
            </div>

        </div>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
