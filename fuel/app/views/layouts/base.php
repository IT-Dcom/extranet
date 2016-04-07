<html>
    <head>
        <?php echo $head; ?>
    </head>
    <body>
        <?php echo $header; ?>
        <div class="container-fluid">
          <div class="row livogis-page">
            <div class="col-lg-2 sidebar">
              <?php echo $navbar; ?>
            </div>
            <div class="col-lg-offset-2 col-lg-10
                        col-md-12 content">
              <h2><?php echo $subtitle ?></h2>
              <div class="livogis-content">
                <?php echo $content; ?>
              </div>
            </div>
          </div>
          <?php echo $footer; ?>
        </div>
    </body>
</html>
