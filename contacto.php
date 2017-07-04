<!DOCTYPE html>
<!-- saved from url=(0050)http://getbootstrap.com/examples/starter-template/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Titulo</title>

    <!-- Bootstrap core CSS y JS -->
    <?php include "php/head.php"; ?>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		<script type="text/javascript" src="chrome-extension://bfbmjmiodbnnpllbbbfblcplfjjepjdn/js/injected.js"></script>
  
	
	<!--<link rel="stylesheet" href="./css/datepicker.css"> -->
	
		
	<link rel="stylesheet" href="./css/bootstrap-select.min.css"> 

	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
	
	<!-- DATEPICKET BS -->
	  <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css" />
      <link rel="stylesheet" href="./bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
	  <script type="text/javascript" src="./bower_components/jquery/jquery.min.js"></script>
	  <script type="text/javascript" src="./bower_components/moment/min/moment.min.js"></script>
	  <script type="text/javascript" src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="./bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	  
	<!-- DATEPICKET BS -->
  
  </head>
  <body>

	
	<?php include "php/header.php"; ?>
	
	<?php include "php/navbar.php"; ?>

    <div class="container-fluid cuerpo">
	
	  
	  
	  	  
 	  
<div class="row">
	<div class="col-md-6">
		<div class="jumbotron" style="margin-top:10px;">
			<h3>Escríbanos con confianza</h3>
			<form class="form-horizontal" method="post">
			  <div class="form-group">
				<label class="col-sm-2 control-label">Nombre</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="nombre" placeholder="">
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Correo</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" name="email" placeholder="ejemplo@hotmail.com">
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Consulta</label>
				<div class="col-sm-10">
				  <textarea  class="form-control" name="cuerpo" placeholder=""></textarea>
				</div>
			  </div>
			  
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default">Enviar</button>
				</div>
			  </div>
			</form>		
		</div>
	  
	  
    </div><!-- /.container -->
  </div>
  <?php
	if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["cuerpo"])){
		$nombre=$_POST["nombre"];
		$mail = $_POST["email"];
		$cuerpo="nombre: ".$nombre."\r \n email:".$mail."\r \n mensaje: ".$_POST["cuerpo"];
		
		//Titulo
		$titulo = "CONSULTA";
		//cabecera
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		//dirección del remitente 
		$headers .= "From: ".$nombre." < desdelaweb@tudominio.com >\r\n";
		//Enviamos el mensaje a tu_dirección_email 
		$bool = mail("contacto@tudominio.com",$titulo,$cuerpo,$headers);
		if($bool){
			echo "<div class='alert alert-success' role='alert'>
        <strong>Mensaje enviado!</strong> Resolveremos su consulta a la brevedad.
      </div>";
		}else{
			echo "<div class='alert alert-danger' role='alert'>
        <strong>Mensaje no enviado!</strong> Verifique la informacion ingresada.
      </div>";
		}		
	
	}
  ?>	  
	<?php include "php/footer.php"; ?>
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<?php include "php/script-footer.php"; ?>
	
	

	
</body></html>

