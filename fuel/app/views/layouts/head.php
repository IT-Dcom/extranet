<meta charset="utf-8">
<title><?php echo "Livogis " . $title; ?></title>
<?php
  echo Asset::css(array('bootstrap.min.css', 'header.css', 'navbar.css',
                        'application.css'));
  echo Asset::js (array('jquery-2.2.3.min.js', 'bootstrap.min.js'));
?>
