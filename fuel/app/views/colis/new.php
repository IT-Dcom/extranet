<div class="row">
  <?php echo Form::open('uri/to/form'); ?>
    <div class="col-sm-6">
      <div class="form-group">
        <?php
        echo Form::input('colis', null,
                         array('placeholder' => 'colis',
                               'class' => 'form-control'));
        ?>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="input-group date" id='datetimepicker'>
        <?php echo Form::input('date', null,
                               array('placeholder' => 'date',
                                     'class' => 'form-control'));
        ?>
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group" id='datetimepicker'>
        <?php echo Form::input('destination', null,
                               array('placeholder' => 'destination',
                                     'class' => 'form-control'));
        ?>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  <?php echo Form::close(); ?>
</div>

<script type="text/javascript">
$(function () {
  $('#datetimepicker').datetimepicker();
});
</script>
