<ul class='nav nav-sidebar'>
  <?php foreach($elements as $element) { ?>
    <li>
      <a href='<?php echo $element['href']; ?>'>
        <span class='livogis-hidden-md'><?php echo $element['title'] ?></span>
        <span class='pull-right glyphicon livogis-nav-ico
                     glyphicon-<?php echo $element['icon'] ?>'>
        </span>
      </a>
    </li>
  <?php } ?>
</ul>

<script>
$(function() {
  var sidebar = $('ul.nav-sidebar');
  sidebar.children().each(function() {
    if($(this).children().attr('href') === window.location.pathname)
      $(this).addClass('active');
  });
});
</script>
