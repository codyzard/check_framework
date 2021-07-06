<?php 
    //** @var $model \hoangtu\phpmvc\models\User */
?>


<h1>Login di ku</h1>
<?php $form = hoangtu\phpmvc\core\form\Form::begin('', 'post') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php $form->end() ?>