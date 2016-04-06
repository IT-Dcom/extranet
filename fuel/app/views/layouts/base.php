<html>
    <head>
        <?php echo $head; ?>
    </head>
    <body>
        <?php echo $header; ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2 sidebar">
              <?php echo $navbar; ?>
            </div>
            <div class="col-md-offset-2 col-md-10">
              <?php echo $content; ?>
            </div>
          </div>
        </div>
        <?php echo $footer; ?>
    </body>
</html>
