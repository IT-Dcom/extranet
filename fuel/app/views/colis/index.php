<table class="table table-striped">
  <tr>
    <th>id</th>
    <th>nom</th>
    <th>colis</th>
    <th>destination</th>
    <th>status</th>
  </tr>
	<?php foreach ($users as $user) { ?>
		<tr>
	    <td><?php echo $user['id']?></td>
	    <td><?php echo $user['name']?></td>
	    <td><?php echo $user['descr'] ?></td>
	    <td><?php echo $user['town']?></td>
	    <td><?php echo $user['status']?></td>
		</tr>
	<?php } ?>
</table>
