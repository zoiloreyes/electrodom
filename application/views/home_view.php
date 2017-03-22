<?php
	plantilla::inicio();
?>

<div class="row" style="margin-top: 80px;">
	<fieldset>
		<legend>
			Electrodomésticos Agregados
		</legend>
		<table class="table">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Id</th>
					<th>Marca</th>
					<th>Fecha de compra</th>
					<th>Peso</th>
					<th>Color</th>
					<th>Tipo</th>
					<th>Comentario</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$equipos = cargar_equipos();

					foreach ($equipos as $equipo) {
						echo "<tr>
							<td><img src='".base_url()."fotos/{$equipo->id}.jpg' height='50' /></td>
							<td id='Id'>{$equipo->id}</td>
							<td>{$equipo->marca}</td>
							<td>{$equipo->fecha_compra}</td>
							<td>{$equipo->peso} lb</td>
							<td>{$equipo->color}</td>
							<td>{$equipo->tipo}</td>
							<td>{$equipo->comentario}</td>
							
						</tr>

						";
					}

				?>
			</tbody>
		</table>
	</fieldset>	
</div>