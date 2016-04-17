<h3><strong>Les colis dans votre stock</strong></h3>

<table class="table table-striped">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>Destination</th>
    <th>Client</th>
  </tr>
	<?php foreach ($users as $user) { ?>
		<tr>
	    <td><?php echo $user['ID']?></td>
	    <td><?php echo $user['Name']?></td>
	    <td><?php echo $user['Town']?></td>
	    <td><?php echo $user['Client']?></td>
		</tr>
	<?php } ?>
</table>

<h3><strong>Les colis récemment sortis du stock</strong></h3>
<table class="table table-striped">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>Destination</th>
    <th>Client</th>
  </tr>
	<?php foreach ($users as $user) { ?>
		<tr>
	    <td><?php echo $user['ID']?></td>
	    <td><?php echo $user['Name']?></td>
	    <td><?php echo $user['Town']?></td>
	    <td><?php echo $user['Client']?></td>
		</tr>
	<?php } ?>
</table>
