<?php
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
?>
<?php $form= ActiveForm::begin(); ?>
<div>
    <?= $form->field($model, "fname")->textInput(); ?>
</div>
<div>
    <?= $form->field($model, "lname")->textInput(); ?>
</div>
<div>
    <?= $form->field($model, "address")->textarea(["rows"=>5]); ?>
</div>
<div>
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update',["class"=>"btn btn-primary pull-right"]); ?>
</div>
<?php ActiveForm::end();?>
