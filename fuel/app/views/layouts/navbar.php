<ul class='nav nav-sidebar'>
  <?php foreach($elements as $element) { ?>
    <li class='<?php echo $element ? 'active' : ''; ?>'
      <span class='livogis-hidden-md'><?php echo $element['title'] ?></span>
      <span class='pull-right glyphicon livogis-nav-ico
                   glyphicon-<?php echo $element['icon'] ?>'>
      </span>
    </li>
  <?php } ?>
  <!-- <li class='active'>
    <a href='/'>
      <span class='livogis-hidden-md'>Accueil</span>
      <span class='pull-right glyphicon
                   glyphicon-home livogis-nav-ico'>
      </span>
    </a>
  </li>
  <li>
    <a href='#'>
      <span class='livogis-hidden-md'>Compte client</span>
      <span class='pull-right glyphicon
                   glyphicon-user livogis-nav-ico'>
      </span>
    </a>
  </li>
  <li>
    <a href='/colis'>
      <span class='livogis-hidden-md'>Gestion colis</span>
      <span class='pull-right glyphicon
                   glyphicon-folder-close livogis-nav-ico'>
      </span>
    </a>
  </li>
  <li>
    <a href='/colis/new'>
      <span class='livogis-hidden-md'>Enregistrer des colis</span>
      <span class='pull-right glyphicon
                   glyphicon-log-in livogis-nav-ico'>
      </span>
    </a>
  </li>
  <li>
    <a href='/stock'>
      <span class='livogis-hidden-md'>Suivi du stock</span>
      <span class='pull-right glyphicon
                   glyphicon-folder-open livogis-nav-ico'>
      </span>
    </a>
  </li>
  <li>
    <a href='#'>
      <span class='livogis-hidden-md'>Facturation</span>
      <span class='pull-right glyphicon
                   glyphicon-euro livogis-nav-ico'>
      </span>
    </a>
  </li> -->
</ul>
