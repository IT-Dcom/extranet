<h3>Les colis dans votre stock</h3>

<table class="table table-striped">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>Client</th>
  </tr>
  <?php foreach ($colis as $coli) { ?>
		<tr>
	    <td><?php echo $coli['id']?></td>
	    <td><?php echo $coli['name']?></td>
	    <td><?php echo $coli['client']['name']?></td>
		</tr>
	<?php } ?>
</table>

<h3>Les colis récemment sortis du stock</h3>
<table class="table table-striped">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>Destination</th>
    <th>Client</th>
  </tr>
	<?php foreach ($colis as $coli) { ?>
		<tr>
      <td><?php echo $coli['id']?></td>
	    <td><?php echo $coli['name']?></td>
	    <td>MISSION RELAY POINT ADDRESS</td>
	    <td><?php echo $coli['client']['name']?></td>
		</tr>
	<?php } ?>
</table>
