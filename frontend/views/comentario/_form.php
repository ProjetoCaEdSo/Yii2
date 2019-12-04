<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Comentario;
use frontend\models\Apartamento;
use frontend\models\Utilizador;

/* @var $this yii\web\View */
/* @var $model app\models\Comentario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentario-form">

    <div class="container-fluid">
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">

            <div class="col-sm-12">
                <?= $form->field($model, 'Mensagem')->textArea(['maxlength' => true]) ?>
            </div>
            
        </div>
        <div class="row">

            <div class="col-sm-6">
                <?= $form->field($model, 'IdUtilizador')->dropDownList(ArrayHelper::map(Utilizador::find()->all(),'IdUtilizador', 'Email'), ['prompt'=>''])->label('Email do Utilizador') ?>
            </div>

            <div class="col-sm-6">
                <?= $form->field($model, 'IdApartamento')->dropDownList(ArrayHelper::map(Apartamento::find()->all(),'IdApartamento', 'Titulo'), ['prompt'=>''])->label('Titulo do Apartamento') ?>
            </div>
        </div>

        <div class="row">
            
            <div class="col-sm-6">
                <?= $form->field($model, 'IdComentarioPai')->dropDownList(ArrayHelper::map(Comentario::find()->all(),'IdComentarioPai', 'Mensagem'), ['prompt'=>''])->label('Mensagem Principal') ?>
            </div>
            
            <div class="col-sm-6">
                <label class="control-label">Data Comentario</label>
                <?php if($model->DataComent!=null){ echo Html::tag('p', Html::encode($model->DataComent), ['class' => 'form-control']);
                    }
                    else{ echo Html::tag('p', Html::encode(date('d/m/y', time())), ['class' => 'form-control']);
                    } ?>
            </div>

        </div>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
