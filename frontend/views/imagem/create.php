<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Imagem */

$this->title = 'Create Imagem';
$this->params['breadcrumbs'][] = ['label' => 'Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imagem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    <br>

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

        oFReader.readAsDataURL(Butt[num].files[0]);

        oFReader.onload = function (oFREvent) {
            Img[num].src = oFREvent.target.result;
        };
    };
</script>
