<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>

<title><?php echo 'Livogis ' . $title; ?></title>
<?php
  echo Asset::css(array('bootstrap.min.css', 'header.css', 'navbar.css',
                        'footer.css', 'application.css',
                        'bootstrap-datetimepicker.min.css'));

  echo Asset::js (array('jquery-2.2.3.min.js', 'bootstrap.min.js',
                        'highcharts.js', 'modules/exporting.js',
                        'modules/boost.js', 'moment.min.js',
                        'bootstrap-datetimepicker.min.js'));
?>
