<?php
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
?>
<?php 
    if(!empty($message)){
        echo "<div class='alert alert-danger'>".$message."</div>";
    }
?>
<?php $form = ActiveForm::begin(); ?>
<div>
    <?= $form->field($model, "username")->textInput(); ?>
</div>
<div>
    <?= $form->field($model, "password")->passwordInput(); ?>
</div>
<div>
    <?= Html::submitButton('Login',["class"=>'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>

