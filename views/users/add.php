<h2>Agregar usuario</h2>
	<?php //print_r($types); ?>   
<form action="<?php echo APP_URL."/users/add"; ?>" method="POST">
	<p>
		<label for="username">Username</label>
		<input type="text" name="username">
	</p>
	<p>
		<label for="password">Contraseña</label>
		<input type="password" name="password">
	</p>
	<p>
		<label for="type_id">Tipo</label>
		<select name="type_id" id="type_id">
			<?php foreach ($types as $type): ?>
				<option value="<?php echo $type["types"]["id"]; ?>">
					<?php echo $type["types"]["name"]; ?>
				</option>		
			<?php endforeach; ?>
		</select>
	</p>
	<p>
		<input type="submit">
	</p>
</form>