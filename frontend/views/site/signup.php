<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;


$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            
                <?= $form->field($model, 'Tipo')->dropDownList(
                    ['' => '', 'a' => 'Estudante', 'b' => 'Estudante e Senhorio', 'c' => 'Senhorio'],
                    ['onchange'=> "trocar_visibilidade(this)"], ['id'=>'drop_tipo'])->label('Tipo de Usuário'); ?>
                    
                <div id="both">

                    <h3>Nome</h3>

                    <?= $form->field($model, 'Nome')->label('Primeiro Nome') ?>

                    <?= $form->field($model, 'Apelido')->label('Apelido') ?>

                    <h3>Contactos</h3>

                    <?= $form->field($model, 'Email')->label('Email') ?>

                    <?= $form->field($model, 'Telemovel')->label('Télemovel') ?>

                    <div id="tipo_senhorio">
                        <h3>Morada</h3>
                        <?= $form->field($model, 'Distrito')->label('Distrito') ?>
                        <?= $form->field($model, 'Morada')->label('Morada') ?>
                        <?= $form->field($model, 'CodigoPostal')->label('Código Postal') ?>
                    </div>

                    <h3>Outras Informações</h3>

                    <?= $form->field($model, 'NumCarCid')->label('Nº Identificacao Civil') ?>
                    
                    <?= $form->field($model, 'DataNasc')->widget(DatePicker::classname(), [
                        'options' => [
                            'class' => 'form-control',
                            'autocomplete' => 'off'],
                        'clientOptions' => [
                            'language' => 'en',
                            'yearRange' => '1950:2050',
                            'changeMonth' => true,
                            'changeYear' => true
                        ]])->label('Data Nascimento') ?>
                    <div id="tipo_estudante">
                        <?= $form->field($model, 'Universidade')->label('Universidade') ?>
                    </div>
                    
                    <?= $form->field($model, 'password')->passwordInput() ?>

                </div>
                
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<script>
    document.getElementById("both").style.display = "none";

    function trocar_visibilidade(dropdowntipo) {
        //var value = document.getElementById('drop_tipo').options[document.getElementById('drop_tipo').selectedIndex].text;
        var value = dropdowntipo.options[dropdowntipo.selectedIndex].value;
        if(value.localeCompare("a")==0||value.localeCompare("b")==0||value.localeCompare("c")==0){
            document.getElementById("both").style.display = "block";
        }else{
            document.getElementById("both").style.display = "none";
        }
        if(value.localeCompare("a")==0||value.localeCompare("b")==0){
            document.getElementById("tipo_estudante").style.display = "block";
        }else{
            document.getElementById("tipo_estudante").style.display = "none";
        }
        if(value.localeCompare("b")==0||value.localeCompare("c")==0){
            document.getElementById("tipo_senhorio").style.display = "block";
        }else{
            document.getElementById("tipo_senhorio").style.display = "none";
        }
    }
</script>
