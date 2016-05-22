<?php
 echo $erreur;
 echo "<br>";
 echo Form::open('colis/create');
 ?>
  <div class='row'>
    <div class='col-sm-6'>
      <div class='form-group'>
        <?php
        echo Form::input('colis', null,
                         array('placeholder' => 'Nom du colis',
                               'class' => 'form-control'));
        ?>
      </div>
    </div>
    <div class='col-sm-6'>
      <div class='input-group date' id='datetimepicker'>
        <?php echo Form::input('date', null,
                               array('placeholder' => 'Date d\'arrivée',
                                     'class' => 'form-control'));
        ?>
        <span class='input-group-addon'>
            <span class='glyphicon glyphicon-calendar'></span>
        </span>
      </div>
    </div>
  </div>


  <div class='row'>
    <div class='col-sm-6'>
      <div class='form-group' id='weightinput'>
        <?php echo Form::input('weight', null,
                             array('placeholder' => 'Poid',
                                   'class' => 'form-control'));
                                   ?>
    </div>
  </div>
  <div class='col-sm-6'>
    <div class='input-group' id='insurancebox'>
      <label>
          <?php echo Form::input('assurance', null,
                               array('type' => 'checkbox',
                                     'class' => 'form-control')); ?>
         Avec assurance
      </label>
    </div>
  </div>
</div>
<br>
<div class='row'>
  <div class='col-sm-6'>
    <div class='form-group' id='clientinput'>
      <?php echo Form::input('client', null,
                           array('placeholder' => 'Nom du client',
                                 'class' => 'form-control'));
                                 ?>

  </div>
</div>
<div class='col-sm-6'>
  <div class='form-group' id='adressinput'>
    <?php echo Form::input('adress', null,
                         array('placeholder' => '48 avenue Libole Annecy 73550',
                               'class' => 'form-control'));
                               ?>
</div>
</div>
</div>
<br>
<div class='row'>
  <div class='col-sm-6'>
    <div class='form-group' id='targetinput'>
      <?php echo Form::input('target', null,
                           array('placeholder' => 'Nom du destinataire',
                                 'class' => 'form-control'));
                                 ?>

  </div>
</div>
<div class='col-sm-6'>
  <div class='form-group' id='adresstargetinput'>
    <?php echo Form::input('adresstarget', null,
                         array('placeholder' => '1 rue kalive Paris 75009',
                               'class' => 'form-control'));
                               ?>
</div>
</div>
</div>
  <div class='row'>
    <div class='col-sm-12'>
      <div class='form-group'>
        <?php echo Form::input('destination', null,
        array('placeholder' => 'Point relai de destination',
        'class' => 'form-control'));
        ?>
      </div>
      <button class='btn btn-default'>Valider</button>
    </div>
  </div>
<?php echo Form::close(); ?>

<script type='text/javascript'>
$(function () {
  $('#datetimepicker').datetimepicker();
});
</script>
