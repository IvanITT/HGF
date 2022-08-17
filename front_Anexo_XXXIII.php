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
    
<script src="js/jquery-3.6.0.min.js"></script>	
<link rel="stylesheet" href="css/tec_estilo_encabezado.css">
<link rel="stylesheet" href="css/tec_estilo.css">
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">	
<link rel="stylesheet" href="css/datatables/datatables.min.css">		

<link rel="stylesheet" href="css/sweetalert2/sweetalert2-6.11.css"/>	
<script src="js/sweetalert2/sweetalert2-6.11.js"></script>
    
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/docxtemplater/3.25.1/docxtemplater.js"></script>
<script src="https://unpkg.com/pizzip@3.0.6/dist/pizzip.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.js"></script>
<script src="https://unpkg.com/pizzip@3.0.6/dist/pizzip-utils.js"></script>    
	
    
<title>DEP: GENERADOR DE FORMATOS</title>

<!--Prevenir reenvio de formulario-->	
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>	
	
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
    margin: 0 0 0px 0;
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
	
th {
	text-align: center;
}
	
	
</style>


</head>
    
<body>
    
<div class="header">
<?php include('includes/header.php');?>	
</div>			
	
<br>
<br> 
	
    
<h3 align="center">Liberación de Proyecto para la Titulación Integral (Anexo XXXIII)</h3>
<br>

	
<div class="col-md-12 form-body d-flex justify-content-center">
        <div class="col-md-8 ">
            <div class="form-holder ">
                <div class="form-content col-md-10">
                    <div class="form-items">
									
						    <div class="col-md-12 d-flex justify-content-center">
                            <p><br><strong>GENERAR DOCUMENTO</strong></p>  
                            </div>
						
							<div class="col-md-12 d-flex justify-content-center" style="background: #f3f3f3;">
                            Introduce los datos solicitados respetando mayúsculas y minúsculas  
                            </div>
						
                     <form name="form1" method="post" action="./Anexo_XXXIII.php">
                          
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Departamento:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<select id="departamento" name="departamento" class="form-select" style="width: 100%;height: 140%">
                                      <option selected disabled value="">Seleccionar</option>
                                      <option value="CEAD">Ciencias Económico Administrativas (IGE)</option>
                                      <option value="ING">Ingenierías (IE / ITIC)</option>
                               		</select>
    							</div>
  							</div>
							<br>	
                            </div>
                         
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Número de oficio:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="number" name="oficio" placeholder="Revisar el orden de los oficios emitidos por el departamento emisor" maxlength="60" value="000" required>
    							</div>
  							</div>	
                            </div>
                         
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Nombre del estudiante y/o egresado:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="nombre" placeholder="Nombre del (de la) egresado (a)" maxlength="160" required>
    							</div>
  							</div>	
                            </div>
                         
                            <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Carrera:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<select id="estatus" name="carrera" class="form-select" style="width: 100%;height: 140%" required>
                                      <option selected disabled value="">Seleccionar</option>
                                      <option value="IGE">IGE</option>
                                      <option value="ITIC">ITIC</option>
                                      <option value="IE">IE</option>
                               		</select>
    							</div>
  							</div>
							<br>	
                            </div>
                         
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>No de control:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="matricula" minlength="4" maxlength="40" placeholder="Matrícula" required>
    							</div>
  							</div>	
                            </div>
                         
                          <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Nombre del proyecto:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
                                    <textarea class="form-control" type="text" name="titulo" rows="3" minlength="1" maxlength="250" placeholder="Título del proyecto" required></textarea>
    							</div>
  							</div>	
                            </div>
                         
                        <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Producto:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<select id="estatus" name="producto" class="form-select" style="width: 100%;height: 140%" required>
                                      <option selected disabled value="">Seleccionar</option>
                                      <option value="Informe Técnico de Residencia Profesional">Informe Técnico de Residencia Profesional</option>
                                      <option value="Tesis">Tesis</option>
                                      <option value="Tesina">Tesina</option>
                               		</select>
    							</div>
  							</div>
							<br>	
                            </div>
                         
                         <div class="col-md-12 d-flex justify-content-center" style="background: #f3f3f3;">
                            ASESOR Y REVISORES* 
                        </div>
                         
                         
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Nombre del asesor:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="asesor" placeholder="Comenzando por el nombre" maxlength="260" required>
    							</div>
  							</div>	
                            </div>
                               
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>*Revisor 1:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="revisor1" placeholder="OPCIONAL - Solo para Tesis o Tesina" maxlength="260" value="">
    							</div>
  							</div>	
                            </div>
                         
                          <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>*Revisor 2:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="revisor2" placeholder="OPCIONAL - Solo para Tesis o Tesina" maxlength="260" value="">
    							</div>
  							</div>	
                            </div>
                         
                         
                            <div class="form-button">
							<br>	
                                <button id="generar" name="generar" type="submit" class="btn btn-success"><strong>Generar</strong></button>
								<a type="button" class="btn btn-danger" href="front_Anexo_XXXIII.php" style="margin-left: 20px;color: #FFFFFF; text-decoration: none;">Limpiar</a>
                            </div>
						 
						 <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>	
	
	
	<br>
<br> 
	
                        
<!-- Cargar scripts --> 	
<script src="js/popper.min.js"></script>		
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/datatables/datatables.min.js"></script>	
                                                                         
</body>
</html>