<h3>Inicio de sesión</h3>





   
   <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Introducir credencial</a>
   <div class="modal fade" id="modal-id">
	   <div class="modal-dialog">
		   <div class="modal-content">
			   <div class="modal-header">
				   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				   <h4 class="modal-title">Autentificar</h4>
			   </div>
			   <div class="modal-body">
				   

<form action="<?php echo APP_URL."/users/login"; ?>" method="POST">
	<p>
		<label for="username">Username</label>
		<input type="text" name="username">
	</p>
	<p>
		<label for="password">Password</label>
		<input type="password" name="password">
	</p>
	<p>
		<input type="submit" value="Entrar">
	</p>	

</form>

	   </div>
   </div>

   

<?php 

if ($_SESSION["logged"]) {
			header("Location: ".APP_URL."/users/");
			echo "
			<script type='text/javascript' class= >
			alert('Has iniciado correctamente');
			window.location='http://localhost/framework/';
			</script>
		";
}else{
		exit;
}
			
   ?>
   