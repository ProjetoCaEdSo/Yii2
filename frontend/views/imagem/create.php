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
    <div>
        <a href="#" id="taga1" onclick="return ClickChange(0)">
            <img class="uploadPreview" style="width: 100px; height: 75px;" />
        </a>
        <input class="uploadImage" type="file" name="myPhoto1" onchange="PreviewImage(0);" style="display:none;" />
    </div>
    <div>
        <a href="#" id="taga2" onclick="return ClickChange(1)">
            <img class="uploadPreview" style="width: 100px; height: 75px;" />
        </a>
        <input class="uploadImage" type="file" name="myPhoto2" onchange="PreviewImage(1);" style="display:none;" />
    </div>
    <div>
        <a href="#" id="taga3" onclick="return ClickChange(2)">
            <img class="uploadPreview" style="width: 100px; height: 75px;" />
        </a>
        <input class="uploadImage" type="file" name="myPhoto3" onchange="PreviewImage(2);" style="display:none;" />
    </div>
    <div>
        <a href="#" id="taga4" onclick="return ClickChange(3)">
            <img class="uploadPreview" style="width: 100px; height: 75px;" />
        </a>
        <input class="uploadImage" type="file" name="myPhoto4" onchange="PreviewImage(3);" style="display:none;" />
    </div>
    <div>
        <a href="#" id="taga5" onclick="return ClickChange(4)">
            <img class="uploadPreview" style="width: 100px; height: 75px;" />
        </a>
        <input class="uploadImage" type="file" name="myPhoto5" onchange="PreviewImage(4);" style="display:none;" />
    </div>
    <div>
        <a href="#" id="taga6" onclick="return ClickChange(5)">
            <img class="uploadPreview" style="width: 100px; height: 75px;" />
        </a>
        <input class="uploadImage" type="file" name="myPhoto6" onchange="PreviewImage(5);" style="display:none;" />
    </div>
    <div>
        <a href="#" id="taga7" onclick="return ClickChange(6)">
            <img class="uploadPreview" style="width: 100px; height: 75px;" />
        </a>
        <input class="uploadImage" type="file" name="myPhoto7" onchange="PreviewImage(6);" style="display:none;" />
    </div>
    <div>
        <a href="#" id="taga8" onclick="return ClickChange(7)">
            <img class="uploadPreview" style="width: 100px; height: 75px;" />
        </a>
        <input class="uploadImage" type="file" name="myPhoto8" onchange="PreviewImage(7);" style="display:none;" />
    </div>
    <div>
        <a href="#" id="taga9" onclick="return ClickChange(8)">
            <img class="uploadPreview" style="width: 100px; height: 75px;" />
        </a>
        <input class="uploadImage" type="file" name="myPhoto9" onchange="PreviewImage(8);" style="display:none;" />
    </div>
    <div>
        <a href="#" id="taga10" onclick="return ClickChange(9)">
            <img class="uploadPreview" style="width: 100px; height: 75px;" />
        </a>
        <input class="uploadImage" type="file" name="myPhoto10" onchange="PreviewImage(9);" style="display:none;" />
    </div>

</div>
<script type="text/javascript">
    /*var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
    };*/
    
    //document.getElementsByClassName("uploadImage").style.display = "none";

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
