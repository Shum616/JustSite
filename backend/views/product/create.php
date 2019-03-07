<?php
   
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\web\UploadedFile;

    $form = ActiveForm::begin(['method'=>'post', 'options' => ['enctype' => 'multipart/form-data']]);
?>

<?= $form->field($model, 'Name')->textInput() ?>
<?= $form->field($model, 'Price')->textInput(['type'=>'number']) ?>
<?= $form->field($model, 'Description')->textInput() ?>
<?= $form->field($model, 'imageFile')->fileInput() ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>


<?php ActiveForm::end() ?>

