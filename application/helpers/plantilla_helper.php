<?php

	class plantilla{

		static $instancia;

		static function inicio(){
			self::$instancia = new plantilla();

		}


		function __construct(){
	?>
		<!DOCTYPE html>
		<html lang="en">

		<head>

		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <meta name="description" content="">
		    <meta name="author" content="Zoilo Reyes">

		    <title>Electrodomésticos</title>
		    <!-- Font link-->
		    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		    <!-- Bootstrap Core CSS -->
		    <script src="<?php  echo base_url('content') ?>/js/jquery.js"></script>
		    <link href="<?php  echo base_url('content')?>/css/bootstrap.min.css" rel="stylesheet">
		   
		    <link href="<?php  echo base_url('content')?>/css/bootstrap.min.css" rel="stylesheet">

		    <style>
		    	footer {
		    		font-family: 'Roboto', sans-serif;
		    	}
		    </style>

		</head>

		<body style="font-family: 'Roboto', sans-serif;">

		    <!-- Navigation -->
		     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="<?php echo site_url('home/index')?>">Electrodom</a>
	            </div>
	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav">
	                    <li>
	                        <a href="<?php echo site_url('home/index')?>">Home</a>
	                    </li>
	                    <li>
	                        <a href="#">Contacto</a>
	                    </li>
	                    <li>
	                    	<?php
	                    		$CI = & get_instance(); 
  								$isLoggedIn = $CI->session->userdata('isUserLoggedIn');
	                    		if($isLoggedIn){
	                    			echo "<a href='". site_url('users/account') ."'>Cuenta</a>";
	                    		}else{
	                    			echo "<a href='". site_url('users/login')."'>Iniciar sesión</a>";
	                    		}
	                    	?>
	                    </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container -->
	    </nav>

	    <!-- Page Content -->
	    <div class="container">
	<?php
		}

		function __destruct(){
	?>
		</div>
		<footer style="margin-top: 20px; padding-top: 20px; padding-bottom: 20px;   background-color: #222222; color: white;">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Tareas@ITLA 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

		</div>
		    <!-- /.container -->

		    <!-- jQuery -->
		    <script src="<?php  echo base_url('base') ?>/js/jquery.js"></script>

		    <!-- Bootstrap Core JavaScript -->
		    <script src="<?php  echo base_url('base') ?>/js/bootstrap.min.js"></script>

		</body>

		</html>	
	<?php
		}
	}

		function cargar_equipos(){
		$CI =& get_instance();

		$sql = "Select * from electrodomestico";
		$rs = $CI->db->query($sql);
		return $rs->result();
	}	 