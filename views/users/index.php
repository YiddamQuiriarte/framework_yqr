<h2>Listado de usuarios</h2>
<h4>Número de usuarios: </h4><?php echo $usersCount; ?>

<?php if (!empty($users)): ?>

<table>
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Type</th>
		<th>Acción</th>
	</tr>
<?php

foreach ($users as $user):	?>
	<tr>
		<td><?php echo $user["users"]["id"]; ?></td>
		<td><?php echo $user["users"]["username"]; ?></td>
		<td><?php echo $user["users"]["password"]; ?></td>
		<td><?php echo $user["types"]["name"]; ?></td>
		<td>
			<?php 
			echo $this->Html->link("Edit", array(
				"controller"=>"users",
				"method"=>"edit",
				"arg"=>$user["users"]["id"]
			));
			?>
			|
			<?php 
			echo $this->Html->link("Delete", array(
				"controller"=>"users",
				"method"=>"delete",
				"arg"=>$user["users"]["id"]
			));
			?>			
		</td>
	</tr>

<?php endforeach; ?>
</table>
<?php endif; ?> 