<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Apartamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apartamento-form">
    <div class="container-fluid">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">

            <div class="col-sm-9">
            <?= $form->field($model, 'Titulo')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-3">
            <?= $form->field($model, 'Preco')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-4">
            <?= $form->field($model, 'Distrito')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-4">
            <?= $form->field($model, 'Concelho')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-4">
            <?= $form->field($model, 'Freguesia')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-9">
            <?= $form->field($model, 'Morada')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-3">
            <?= $form->field($model, 'CodPostal')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <label class="control-label">Imagens</label>
        <div class="row">
            <div class="col-sm-2">
                <a href="#" id="taga1" onclick="return ClickChange(0)">
                    <img class="uploadPreview" style="width: 150px; height: 112px;" src="imagens/AdicionaImagem.png" />
                </a>
                <input class="uploadImage" type="file" name="myPhoto1" onchange="PreviewImage(0);" style="display:none;" />
            </div>
            
            <div class="col-sm-2">
                <a href="#" id="taga2" onclick="return ClickChange(1)">
                    <img class="uploadPreview" style="width: 150px; height: 112px;" src="imagens/AdicionaImagem.png" />
                </a>
                <input class="uploadImage" type="file" name="myPhoto2" onchange="PreviewImage(1);" style="display:none;" />
            </div>

            <div class="col-sm-2">
                <a href="#" id="taga2" onclick="return ClickChange(2)">
                    <img class="uploadPreview" style="width: 150px; height: 112px;" src="imagens/AdicionaImagem.png" />
                </a>
                <input class="uploadImage" type="file" name="myPhoto3" onchange="PreviewImage(2);" style="display:none;" />
            </div>

            <div class="col-sm-2">
                <a href="#" id="taga4" onclick="return ClickChange(3)">
                    <img class="uploadPreview" style="width: 150px; height: 112px;" src="imagens/AdicionaImagem.png" />
                </a>
                <input class="uploadImage" type="file" name="myPhoto4" onchange="PreviewImage(3);" style="display:none;" />
            </div>

            <div class="col-sm-2">
                <a href="#" id="taga5" onclick="return ClickChange(4)">
                    <img class="uploadPreview" style="width: 150px; height: 112px;" src="imagens/AdicionaImagem.png" />
                </a>
                <input class="uploadImage" type="file" name="myPhoto5" onchange="PreviewImage(4);" style="display:none;" />
            </div>

            <div class="col-sm-2">
                <a href="#" id="taga6" onclick="return ClickChange(5)">
                    <img class="uploadPreview" style="width: 150px; height: 112px;" src="imagens/AdicionaImagem.png" />
                </a>
                <input class="uploadImage" type="file" name="myPhoto6" onchange="PreviewImage(5);" style="display:none;" />
            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-sm-2">
                <a href="#" id="taga7" onclick="return ClickChange(6)">
                    <img class="uploadPreview" style="width: 150px; height: 112px;" src="imagens/AdicionaImagem.png" />
                </a>
                <input class="uploadImage" type="file" name="myPhoto7" onchange="PreviewImage(6);" style="display:none;" />
            </div>

            <div class="col-sm-2">
                <a href="#" id="taga8" onclick="return ClickChange(7)">
                    <img class="uploadPreview" style="width: 150px; height: 112px;" src="imagens/AdicionaImagem.png" />
                </a>
                <input class="uploadImage" type="file" name="myPhoto8" onchange="PreviewImage(7);" style="display:none;" />
            </div>

            <div class="col-sm-2">
                <a href="#" id="taga9" onclick="return ClickChange(8)">
                    <img class="uploadPreview" style="width: 150px; height: 112px;" src="imagens/AdicionaImagem.png" />
                </a>
                <input class="uploadImage" type="file" name="myPhoto9" onchange="PreviewImage(8);" style="display:none;" />
            </div>

            <div class="col-sm-2">
                <a href="#" id="taga10" onclick="return ClickChange(9)">
                    <img class="uploadPreview" style="width: 150px; height: 112px;" src="imagens/AdicionaImagem.png" />
                </a>
                <input class="uploadImage" type="file" name="myPhoto10" onchange="PreviewImage(9);" style="display:none;" />
            </div>

            <div class="col-sm-2">
                <a href="#" id="taga11" onclick="return ClickChange(10)">
                    <img class="uploadPreview" style="width: 150px; height: 112px;" src="imagens/AdicionaImagem.png" />
                </a>
                <input class="uploadImage" type="file" name="myPhoto11" onchange="PreviewImage(10);" style="display:none;" />
            </div>

            <div class="col-sm-2">
                <a href="#" id="taga12" onclick="return ClickChange(11)">
                    <img class="uploadPreview" style="width: 150px; height: 112px;" src="imagens/AdicionaImagem.png" />
                </a>
                <input class="uploadImage" type="file" name="myPhoto12" onchange="PreviewImage(11);" style="display:none;" />
            </div>
        </div>
        
        <br>
        <div class="row">
            <div class="col-sm-12">
            <?= $form->field($model, 'Descricao')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-6">
            <?= $form->field($model, 'Fianca')->textInput() ?>
            </div>

            <div class="col-sm-6">
            <?= $form->field($model, 'DataAnuncio')->textInput(['value'=> $data, 'disabled' => true]) ?>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-2">
            <?= $form->field($model, 'Fumador')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>
            </div>

            <div class="col-sm-2">
            <?= $form->field($model, 'Mobilado')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>
            </div>

            <div class="col-sm-2">
            <?= $form->field($model, 'Internet')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>
            </div>

            <div class="col-sm-2">
            <?= $form->field($model, 'NumQuartos')->textInput() ?>
            </div>

            <div class="col-sm-2">
            <?= $form->field($model, 'TipoApart')->dropDownList([ 'T0' => 'T0', 'T1' => 'T1', 'T2' => 'T2', 'T3' => 'T3', 'T4' => 'T4', ], ['prompt' => '']) ?>
            </div>

            <div class="col-sm-2">
            <?= $form->field($model, 'Cozinha')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>
            </div>

            <div class="col-sm-2">
            <?= $form->field($model, 'Parking')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>
            </div>

            <div class="col-sm-2">
            <?= $form->field($model, 'Animais')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>
            </div>

            <div class="col-sm-2">
            <?= $form->field($model, 'Casais')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>
            </div>

            <div class="col-sm-2">
            <?= $form->field($model, 'Genero')->dropDownList([ 'F' => 'F', 'M' => 'M', 'A' => 'A', ], ['prompt' => '']) ?>
            </div>

            <div class="col-sm-2">
            <?= $form->field($model, 'NumWC')->textInput() ?>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-10">
            <?= $form->field($model, 'IdUtilizador')->textInput() ?>
            </div>

            <div class="col-sm-2">
            <?= $form->field($model, 'Aprovado')->dropDownList([ 'Sim' => 'Sim', 'Não' => 'Não', ], ['prompt' => '']) ?>
            </div>

        </div>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

</div>

<script type="text/javascript">
    function ClickChange(num){
        var Butt = document.querySelectorAll(".uploadImage");
        Butt[num].click();
    };
    function PreviewImage(num) {
        var oFReader = new FileReader();

        var Butt = document.querySelectorAll(".uploadImage");
        var Img = document.querySelectorAll(".uploadPreview");
        try{
            oFReader.readAsDataURL(Butt[num].files[0]);
            
            oFReader.onload = function (oFREvent) {
                Img[num].src = oFREvent.target.result;
            };
        }catch(NullPointerException){
            Img[num].src = "imagens/AdicionaImagem.png";
        }
    };
</script>
