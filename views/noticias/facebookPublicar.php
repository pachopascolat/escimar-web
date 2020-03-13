

<?php
$form = yii\widgets\ActiveForm::begin();
?>

<div class="form-group">
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Post</span>
        <input name="post" type="text" class="form-control" placeholder="Posteo" aria-describedby="basic-addon1">
    </div>
</div>



<div class="form-group">
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
        <input name="basic-url" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
    </div>
</div>
<hr>
<p>
    <button class="btn btn-success" type="submit">Publicar</button>
</p>
<?php yii\widgets\ActiveForm::end() ?>



