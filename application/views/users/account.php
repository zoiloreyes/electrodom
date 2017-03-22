<?php
	plantilla::inicio();
	$CI =& get_instance();
	if(isset($_POST['submitForm'])){

		$equipo = new stdClass();
		$equipo->marca = $_POST['marca'];
		$equipo->fecha_compra = $_POST['fecha-compra'];
		$equipo->peso = $_POST['peso'];
		$equipo->tipo = $_POST['tipo'];
		$equipo->color = $_POST['color'];
		$equipo->comentario = $_POST['comentario'];

		$CI->db->insert('electrodomestico', $equipo);
		$cod = $this->db->insert_id();

		$equipo = $_FILES['imagen'];
		if($equipo['error'] == 0 ){
			$tmp = "fotos/{$cod}.jpg";
			move_uploaded_file($equipo['tmp_name'], $tmp);
		}
	}
?>
	<style type="text/css">
		.Cuenta{
			border: 1px solid #EEEEEE;
			padding: 5px;
		}
	</style>
    <!-- validation -->
	<div class="grids">
		
		<div class="row" style="margin-top: 70px;">
			<div class="col-xs-10 col-xs-offset-1">

				<div class="Cuenta">
				<a class="btn btn-danger pull-right" style="margin-top: 10px;" href="<?php echo site_url('users/logout'); ?>" >Salir</a>
					<h3>Bienvenido <?php echo $user['name']; ?>!</h3>

					<h4 style='border-top: 1px solid #EEEEEE; padding-top:10px;'>Tus datos</h4>

					<p><b>Nombre: </b><?php echo $user['name']; ?></p>
					<p><b>Correo: </b><?php echo $user['email']; ?></p>
					<p><b>Telefono: </b><?php echo $user['phone']; ?></p>
					<p><b>Género: </b><?php echo $user['gender']; ?></p>

				</div>
				<div>
					<fieldset>
					<legend>
						Agregar Electrodoméstico
					</legend>
					<form enctype="multipart/form-data" method="post" action="">
						<div class="form-group input-group">
							<label class="input-group-addon">Marca: </label>
							<input type="text" required name="marca" class="form-control">
						</div>
						<div class="form-group input-group">
							<label class="input-group-addon">Fecha de compra: </label>
							<input type="date" required name="fecha-compra" class="form-control">
						</div>
						<div class="form-group input-group">
							<label class="input-group-addon">Tipo: </label>
							<select class="form-control" name="tipo">
								<option value="tv">Tv</option>
								<option value="radio">Radio</option>
								<option value="microondas">Microondas</option>
							</select>
						</div>
						
						<div class="form-group input-group">
							<label class="input-group-addon">Peso: </label>
							<input type="number" required name="peso" class="form-control">
						</div>
						<div class="form-group input-group">
							<label class="input-group-addon">Color: </label>
							<input type="text" required name="color" class="form-control">
						</div>
						<div class="form-group input-group">
							<label class="input-group-addon">Comentario: </label>
							<textarea style="resize:vertical;" type="text" name="comentario" class="form-control"></textarea> 
						</div>
						<div class="form-group input-group">
							<label class="input-group-addon">Imagen: </label>
							<input required type="file" name="imagen" class="form-control"></input> 
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary" name="submitForm" >Guardar</button>
						</div>
					</form>
				</fieldset>
				</div>
			</div>
		</div>
	</div>
