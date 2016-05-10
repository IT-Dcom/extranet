<?php echo Form::open('/client/create'); ?>
<div class='row'>
  <div class='col-sm-6'>
    <div class='form-group' id='clientinput'>
      <?php echo Form::input('client', null,
                              array('placeholder' => 'Nom du client',
                              'class' => 'form-control')); ?>
    </div>
  </div>
<div class='col-sm-6'>
  <div class='form-group' id='adressinput'>
    <?php echo Form::input('adress', null,
                            array('placeholder' => 'Adresse du client',
                           'class' => 'form-control')); ?>
  </div>
 </div>
 <div class='col-sm-12'>
   <div class='form-group' id='mailinput'>
     <?php echo Form::input('mail', null,
                            array('placeholder' => 'Mail du client',
                            'class' => 'form-control')); ?>
   </div>
  </div>
</div>
<br>
<button type='submit'>
Créer
</button>

<?php echo Form::close(); ?>
