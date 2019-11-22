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
            
                <?= $form->field($model, 'tipo_de_usuario')->dropDownList(['a' => '', 'b' => 'Estudante', 'c' => 'Estudante e Senhorio', 'd' => 'Senhorio'], ['onchange'=> "trocar_visibilidade(this)"], ['id'=>'drop_tipo']); ?>
                    
                <div id="both">

                    <h3>Nome</h3>

                    <?= $form->field($model, 'primeiro_nome')//->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'apelido') ?>

                    <h3>Contactos</h3>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'telemovel') ?>

                    <div id="tipo_senhorio">
                        <h3>Morada</h3>
                        <?= $form->field($model, 'distrito') ?>
                        <?= $form->field($model, 'morada') ?>
                        <?= $form->field($model, 'codigo_postal') ?>
                    </div>

                    <h3>Outras Informações</h3>

                    <?= $form->field($model, 'n_identificacao_civil') ?>
                    
                    <p><b>Data Nascimento</b></p>

                    <?= DatePicker::widget([
                        'model' => $model,
                        'attribute' => "data_nascimento",
                        'dateFormat' => 'dd-MM-yyyy'
                    ]) ?>
                    
                    <div id="tipo_estudante">
                        <?= $form->field($model, 'universidade') ?>
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
        if(value.localeCompare("a")==0){
            document.getElementById("both").style.display = "none";
        }else{
            document.getElementById("both").style.display = "block";
            if(value.localeCompare("b")==0||value.localeCompare("c")==0){
                document.getElementById("tipo_estudante").style.display = "block";
            }else{
                document.getElementById("tipo_estudante").style.display = "none";
            }
            if(value.localeCompare("c")==0||value.localeCompare("d")==0){
                document.getElementById("tipo_senhorio").style.display = "block";
            }else{
                document.getElementById("tipo_senhorio").style.display = "none";
            }
        }
    }
</script>
