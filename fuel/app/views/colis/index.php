<!DOCTYPE html>
<html lang="en">
	<?php
	$users[0]['id'] = 1;
	$users[0]['nom'] = "M. Kouri";
	$users[0]['descr'] = "chargeur";
	$users[0]['ville'] = "Paris";
	$users[0]['statut'] = "Arrivé";

	$users[1]['id'] = 2;
	$users[1]['nom'] = "M. Kristo";
	$users[1]['descr'] = "Fleur";
	$users[1]['ville'] = "Ilé";
	$users[1]['statut'] = "En livraison";

	$users[2]['id'] = 3;
	$users[2]['nom'] = "M. Beezu";
	$users[2]['descr'] = "Miroir";
	$users[2]['ville'] = "Nancy";
	$users[2]['statut'] = "Livré chez le voisin";
	?>

	<table class="table table-striped">
	  <tr>
	    <td class="">id</td>
	    <td class="">nom</td>
	    <td class="">colis</td>
	    <td class="">destination</td>
	    <td class="">status</td>
	  </tr>
	  <tr>
			<?php
			$count = 0;
			foreach ($users as $user)
			{
			?>
			<tr>
	    <td class=""><?php echo $users[$count]['id']?></td>
	    <td class=""><?php echo $users[$count]['nom']?></td>
	    <td class=""><?php echo $users[$count]['descr'] ?></td>
	    <td class=""><?php echo $users[$count]['ville']?></td>
	    <td class=""><?php echo $users[$count]['statut']?></td>
			<?php
			$count = $count + 1;
			}
			?>
		</tr>
</body>
</html>
