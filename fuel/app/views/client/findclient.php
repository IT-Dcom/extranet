<?php echo Form::open('client/show'); ?>
<?php echo Form::input('email', null,
                       array('placeholder' => 'Email du client',
                       'class' => 'form-control'));
?>
<br>
<br>
<button type='submit'>Valider</button>
<?php echo Form::close(); ?>
