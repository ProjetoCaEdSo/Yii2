<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Base de Dados';
$this->params['breadcrumbs'][] = $this->title;
//$Tabelas = $model->
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <h3>Tabela que pretende modificar/ver</h3>
        
    <?= Html::a('Apartamento', ['/apartamento'], ['class'=>'btn btn-primary tabela']) ?>
    <br><br>
    <?= Html::a('Bug Report', ['/bug-report'], ['class'=>'btn btn-primary tabela']) ?>
    <br><br>
    <?= Html::a('Comentário', ['/comentario'], ['class'=>'btn btn-primary tabela']) ?>
    <br><br>
    <?= Html::a('Favorito', ['/favorito'], ['class'=>'btn btn-primary tabela']) ?>
    <br><br>
    <?= Html::a('Imagem', ['/imagem'], ['class'=>'btn btn-primary tabela']) ?>
    <br><br>
    <?= Html::a('Solicitação', ['/solicitacao'], ['class'=>'btn btn-primary tabela']) ?>
    <br><br>
    <?= Html::a('Universidade', ['/universidade'], ['class'=>'btn btn-primary tabela']) ?>
    <br><br>
    <?= Html::a('Utilizador', ['/utilizador'], ['class'=>'btn btn-primary tabela']) ?>
<!--
    <a href="http://cesa.com/index.php?r=apartamento">
    <button type="button" onclick="url" class="btn btn-primary tabela">Apartamento</button>
    </a>
    <br><br>
    <a href="http://cesa.com/index.php?r=bug-report">
    <button type="button" class="btn btn-primary tabela">Bug Report</button>
    </a>
    <br><br>
    <a href="http://cesa.com/index.php?r=comentario">
    <button type="button" class="btn btn-primary tabela">Comentario</button>
    </a>
    <br><br>
    <a href="http://cesa.com/index.php?r=comprovativo">
    <button type="button" class="btn btn-primary tabela">Comprovativo</button>
    </a>
    <br><br>
    <a href="http://cesa.com/index.php?r=favorito">
    <button type="button" class="btn btn-primary tabela">Favorito</button>
    </a>
    <br><br>
    <a href="http://cesa.com/index.php?r=fiador">
    <button type="button" class="btn btn-primary tabela">Fiador</button>
    </a>
    <br><br>
    <a href="http://cesa.com/index.php?r=solicitacao">
    <button type="button" class="btn btn-primary tabela">Solicitação</button>
    </a>
    <br><br>
    <a href="http://cesa.com/index.php?r=universidade">
    <button type="button" class="btn btn-primary tabela">Universidade</button>
    </a>
    <br><br>
    <a href="http://cesa.com/index.php?r=utilizador">
    <button type="button" class="btn btn-primary tabela">Utilizador</button>
    </a>-->

</div>
<style>
    .tabela {
        font-size: 150%;
        width: 370px;
    }
</style>
