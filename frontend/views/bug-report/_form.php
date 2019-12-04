<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Utilizador;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\BugReport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bug-report-form">

    <div class="container-fluid">
    <?php $form = ActiveForm::begin(); ?>
        <div class="row">

            <div class="col-sm-12">
                <?= $form->field($model, 'Descricao')->textArea(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-8">
                <?= $form->field($model, 'IdUtilizador')->dropDownList(ArrayHelper::map(Utilizador::find()->all(),'IdUtilizador', 'Email'), ['prompt'=>''])->label('Email do Utilizador') ?>
            </div>

            <div class="col-sm-4">
                <label class="control-label">Data Relatório Bug</label>
                <?php if($model->DataEnviado!=null){ echo Html::tag('p', Html::encode($model->DataEnviado), ['class' => 'form-control']);
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
