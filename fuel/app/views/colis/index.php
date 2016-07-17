<table class="table table-striped">
  <thead>
    <tr>
      <th>id</th>
      <th>nom</th>
      <th>description</th>
      <th>poid</th>
      <th>status</th>
    </tr>
  </thead>
  <tbody id="colis_container">
    <?php foreach ($colis as $coli) { ?>
      <tr>
        <td><?php echo $coli['id']?></td>
        <td><?php echo $coli['name']?></td>
        <td><?php echo $coli['description'] ?></td>
        <td><?php echo $coli['weight']?></td>
        <td>En chargement</td>
      </tr>
      <?php } ?>
  </tbody>
</table>
<button type="button" name="refresh" class="btn btn-primary" onclick="refreshColis();">Refresh colis</button>


<!-- <div class="col-sm-6"> -->

<h2>Nouveau colis?</h2>
<form class="create-form">
  <div class='col-sm-6'>
    <div class='form-group'>
      <?php
      echo Form::input('colis', null, array('placeholder' => 'colis',
                                            'class'       => 'form-control',
                                            'id'          => 'colis-name'));
      ?>
    </div>
  </div>
  <div class='col-sm-6'>
    <div class='form-group'>
      <?php
      echo Form::input('desc', null, array('placeholder'  => 'description',
                                            'class'       => 'form-control',
                                            'id'          => 'colis-desc'));
      ?>
    </div>
  </div>

  <div class='col-sm-6'>
    <div class='form-group'>
      <?php
      echo Form::input('colis', null, array('placeholder' => 'weight',
                                            'class'       => 'form-control',
                                            'id'          => 'colis-weight'));
      ?>
    </div>
  </div>
</form>
<button type="button" name="button" class="btn btn-success" onclick="createColis();">New</button>
<!-- </div> -->
