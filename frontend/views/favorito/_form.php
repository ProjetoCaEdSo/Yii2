<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Utilizador;
use frontend\models\Apartamento;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Favorito */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="favorito-form">

    <div class="container-fluid">
    <?php $form = ActiveForm::begin(); ?>
        <div class="row">

            <div class="col-sm-5">
                <?= $form->field($model, 'IdUtilizador')->dropDownList(ArrayHelper::map(Utilizador::find()->all(),'IdUtilizador', 'Email'), ['prompt'=>''])->label('Email do Utilizador') ?>
            </div>

            <div class="col-sm-5">
                <?= $form->field($model, 'IdApartamento')->dropDownList(ArrayHelper::map(Apartamento::find()->all(),'IdApartamento', 'Titulo'), ['prompt'=>''])->label('Titulo do Apartamento') ?>
            </div>

            <div class="col-sm-2">
                <label class="control-label">Data Favorito</label>
                <?php if($model->DataFavorito!=null){ echo Html::tag('p', Html::encode($model->DataFavorito), ['class' => 'form-control']);
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
