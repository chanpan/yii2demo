<?php
    $this->title="Update UserProfile";
?>
<div class="panel panel-default">
    <div class="panel-heading"><?= $this->title;?></div>
    <div class="panel-body">
        <?= $this->render("_form",["model"=>$model]);?> 
    </div>
</div>
