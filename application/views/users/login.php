<?php
	plantilla::inicio();
?>
<link href="<?php  echo base_url('content')?>/css/style.css" rel="stylesheet">
<div class="container">
    <!-- validation -->
	<div class="grids">
		<div class="progressbar-heading grids-heading">
			<div style="padding-top: 20px;"></div>
		</div>
		
		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
						<div class="input-info">
							<h3>Inicia sesión :</h3>
							<?php 
								if(!empty($success_msg)){
									echo '<p class="statusMsg">'.$success_msg.'</p>';
								}elseif(!empty($error_msg)){
									echo '<p class="statusMsg">'.$error_msg.'</p>';
								}
							?>
						</div>
						<div class="form-body form-body-info">
							<form action="" method="post">
								<div class="form-group has-feedback">
									<input type="email" class="form-control inputEmail" name="email" placeholder="Correo" data-error="That email address is invalid" required="" value="">
									<?php echo form_error('email','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
								  <input type="password" class="form-control inputPassword" name="password" placeholder="Constraseña" required="">
								  <?php echo form_error('password','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
									<input type="submit" name="loginSubmit" class="btn-primary" value="Entrar"/>
								</div>
							</form>
						</div>
						<p class="footInfo">¿No tienes cuenta? <a href="<?php echo site_url('users/registration'); ?>">Regístrate aquí</a></p>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
	</div>
	<!-- //validation -->
</div>
</body>
</html>