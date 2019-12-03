<?php

use yii\helpers\Html;
use frontend\models\Apartamento;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Comentario */

$this->title = 'Create Comentario';
$this->params['breadcrumbs'][] = ['label' => 'Comentarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comentario-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= 
        $apart = Apartamento::find()->all();
        $listApart = ArrayHelper::map($apart,'IdApartamento', 'Titulo'); 
    ?>
    <?= $this->render('_form', [
        'model' => $model,
        'listApart' => $listApart,
    ]) ?>

</div>
