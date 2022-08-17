<?php

error_reporting(0); 
    
?>


<!doctype html>
<html lang="es" class="no-js">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta name="description" content="Instituto Tecnológico de Tlalpan">
<meta name="author" content="Ing Mario Iván Ortiz Velázquez">  
	
<link rel="icon" type="image/png" href="img/icono.png">	
	
<link rel="stylesheet" href="css/tec_estilo_encabezado.css">
<link rel="stylesheet" href="css/tec_estilo.css">
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">	
	
<title>DEP: GENERADOR DE FORMATOS</title>

<style>
.errorWrap {
    padding: 10px;
    margin: 0 0 0 0;
	background: #dd3d36;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    
.succWrap{
    padding: 10px;
    margin: 0 0 0 0;
	background: #5cb85c;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    
.alertWrap {
    padding: 10px;
    margin: 0 0 0 0;
	background: #fc981e;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}         
</style>


</head>
    
<body>
   
<div class="header">
<?php include('includes/header.php');?>	
</div>		
	
<br>
<br> 
		<!--Datos del usuario-->
		<h3 align="center"> Bienvenido(a) </h3>
		<br>
		<h4 align="center"><?php echo $correo; ?><br>División de Estudios Profesionales</h4>
		
<div class="col-md-12" align="center">
		<br><br>
		<img src="img/plantilla_itt.png" width="400" height="160">
		<br><br><br>
</div>

<div class="col-md-12" align="center">
    <h6>Instituto Tecnológico de Tlalpan. Todos los derechos reservados. 2022.</h6>   
</div>        
                                    
                        
<!-- Cargar scripts --> 	
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/popper.min.js"></script>		
<script src="js/bootstrap/bootstrap.min.js"></script>		
              
</body>
</html>
<?php ?>