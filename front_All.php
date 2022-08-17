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
	
    
<h3 align="center">Generar todos los formatos para Acto Protocolario</h3>
<br>

	
<div class="col-md-12 form-body d-flex justify-content-center">
        <div class="col-md-8 ">
            <div class="form-holder ">
                <div class="form-content col-md-10">
                    <div class="form-items">
									
						    <div class="col-md-12 d-flex justify-content-center">
                            <p><br><strong>*Escribir los datos respetando mayusculas y minusculas</strong></p>  
                            </div>
						
							<div class="col-md-12 d-flex justify-content-center" style="background: #f3f3f3;">
                            Introduce los datos solicitados  
                            </div>
						
                     <form name="form1" id="form1" method="post" action="">        
                         
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Fecha programada:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									
                                    <input type="date" name="fecha" style="width: 100%;" required>
                                    
    							</div>
  							</div>	
                        </div>
                         
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Modalidad:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<select name="modalidad" class="form-select" style="width: 100%;height: 140%" required>
                                      <option selected disabled value="">Seleccionar</option>
                                      <option value="Presencial">Presencial</option>
                                      <option value="En línea">En línea</option>    
                               		</select>
    							</div>
  							</div>
							<br>	
                         </div>
                         
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Lugar programado para el evento:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
                                    <p1 style="color: white;font-size: small;">Ej. Sala de titulación, Sala de titulaciones en línea, Aula magna, Auditorio, etc.</p1> 
									<input class="form-control" type="text" name="lugar" placeholder="Lugar de realización" maxlength="60" required value="">
    							</div>
  							</div>	
                        </div>
                         
                         <hr>
                        
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Nombre del egresado(a):</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="nombre" placeholder="Comenzando por nombre" maxlength="60" required>
    							</div>
  							</div>	
                        </div>
                         
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Sexo:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<select name="sexo" class="form-select" style="width: 100%;height: 140%" required>
                                      <option selected disabled value="">Seleccionar</option>
                                      <option value="Hombre">Hombre</option>
                                      <option value="Mujer">Mujer</option>    
                               		</select>
    							</div>
  							</div>
							<br>	
                         </div>
                    
                            <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Número de control:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="matricula" placeholder="Matricula" maxlength="20" required>
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
                                      <option value="Ingeniería en Gestión Empresarial">IGE</option>
                                      <option value="Ingeniería en Tecnologías de la Información y Comunicaciones">ITIC</option>
                                      <option value="Ingeniería en Electrónica">IE</option>      
                               		</select>
    							</div>
  							</div>
							<br>	
                            </div>
 
                            <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Plan:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<select id="estatus" name="plan" class="form-select" style="width: 100%;height: 140%" required>
                                      <option disabled value="">Seleccionar</option>
                                      <option selected value="2015">2015</option>
                                      <option value="2009-2010">2009-2010</option>      
                               		</select>
    							</div>
  							</div>
							<br>	
                            </div>                         
                         
                            <hr>
                                   
                            <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Opción de titulación:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<select id="opcion" name="opcion" class="form-select" style="width: 100%;height: 140%" required>
                                      <option selected disabled value="">Seleccionar</option>
                                      <option value="Informe Técnico de Residencia Profesional">Informe Técnico de Residencia Profesional</option>
                                      <option value="Tesis">Tesis</option>
                                      <option value="Tesina">Tesina</option>      
                               		</select>
    							</div>
  							</div>
							<br>	
                            </div>
                         
                            <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Nombre del proyecto:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
                                    <textarea class="form-control" type="text" name="titulo" rows="3" minlength="1" maxlength="200" placeholder="Título del proyecto" required></textarea>
    							</div>
  							</div>	
                            </div>
                         
                           <!-- SINODAL PRESIDENTE(A) -->
                         
                            <br>
                            <div class="col-md-12 d-flex justify-content-center" style="background: #f3f3f3;">
                            SINODAL PRESIDENTE(A) 
                            </div>
                          
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Grado de estudios:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<select name="grado_presidente" class="form-select" style="width: 100%;height: 140%" required>
                                      <option selected disabled value="">Seleccionar</option>
                                      <option value="Dr.">Dr.</option>
                                      <option value="Dra.">Dra.</option>
                                      <option value="Mtro.">Mtro.</option>
                                      <option value="Mtra.">Mtra.</option>
                                      <option value="Lic.">Lic.</option> 
                                      <option value="Ing.">Ing.</option>
                                      <option value="TSU.">TSU.</option>
                                      <option value="Prof.">Prof.</option>
                                      <option value="Profa.">Profa.</option>      
                               		</select>
    							</div>
  							</div>
							<br>	
                         </div>    
                         
                          <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Nombre del Presidente(a):</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="presidente" placeholder="Comenzando por nombre" maxlength="100" required>
    							</div>
  							</div>	
                            </div>
                         
                           <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Profesión:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="profesion_presidente" placeholder="Ejemplo: Licenciatura en Finanzas" maxlength="100" required>
    							</div>
  							</div>	
                            </div>
                         
                            <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Cédula profesional:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="cedula_presidente" placeholder="Cédula del presidente(a)" maxlength="20" required>
    							</div>
  							</div>	
                            </div>
                         
                         <!-- SINODAL SECRETARIO (A) -->
                         
                          <br>
                            <div class="col-md-12 d-flex justify-content-center" style="background: #f3f3f3;">
                            SINODAL SECRETARIO(A) 
                            </div>
                          
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Grado de estudios:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<select name="grado_secretario" class="form-select" style="width: 100%;height: 140%" required>
                                      <option selected disabled value="">Seleccionar</option>
                                      <option value="Dr.">Dr.</option>
                                      <option value="Dra.">Dra.</option>
                                      <option value="Mtro.">Mtro.</option>
                                      <option value="Mtra.">Mtra.</option>
                                      <option value="Lic.">Lic.</option> 
                                      <option value="Ing.">Ing.</option>
                                      <option value="TSU.">TSU.</option>
                                      <option value="Prof.">Prof.</option>
                                      <option value="Profa.">Profa.</option>      
                               		</select>
    							</div>
  							</div>
							<br>	
                         </div>    
                         
                          <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Nombre del Secretario(a):</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="secretario" placeholder="Comenzando por nombre" maxlength="100" required>
    							</div>
  							</div>	
                            </div>
                         
                           <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Profesión:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="profesion_secretario" placeholder="Ejemplo: Doctorado en Biotecnología" maxlength="100" required>
    							</div>
  							</div>	
                            </div>
                         
                            <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Cédula profesional:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="cedula_secretario" placeholder="Cédula del secretario(a)" maxlength="20" required>
    							</div>
  							</div>	
                            </div>
                         
                         
                         <!-- SINODAL VOCAL -->
                         
                         <br>
                            <div class="col-md-12 d-flex justify-content-center" style="background: #f3f3f3;">
                            SINODAL VOCAL 
                            </div>
                          
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Grado de estudios:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<select name="grado_vocal" class="form-select" style="width: 100%;height: 140%" required>
                                      <option selected disabled value="">Seleccionar</option>
                                      <option value="Dr.">Dr.</option>
                                      <option value="Dra.">Dra.</option>
                                      <option value="Mtro.">Mtro.</option>
                                      <option value="Mtra.">Mtra.</option>
                                      <option value="Lic.">Lic.</option> 
                                      <option value="Ing.">Ing.</option>
                                      <option value="TSU.">TSU.</option>
                                      <option value="Prof.">Prof.</option>
                                      <option value="Profa.">Profa.</option>      
                               		</select>
    							</div>
  							</div>
							<br>	
                         </div>    
                         
                          <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Nombre del Vocal:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="vocal" placeholder="Comenzando por nombre" maxlength="100" required>
    							</div>
  							</div>	
                            </div>
                         
                           <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Profesión:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="profesion_vocal" placeholder="Ejemplo: Maestría en Ciencias de la Computación" maxlength="100" required>
    							</div>
  							</div>	
                            </div>
                         
                            <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Cédula profesional:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="cedula_vocal" placeholder="Cédula del vocal" maxlength="20" required>
    							</div>
  							</div>	
                            </div>
                         
                         <!-- SINODAL VOCAL SUPLENTE-->
                         
                         
                         <br>
                            <div class="col-md-12 d-flex justify-content-center" style="background: #f3f3f3;">
                            SINODAL VOCAL SUPLENTE
                            </div>
                
                         
                         <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Grado de estudios:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<select name="grado_vocalsuplente" class="form-select" style="width: 100%;height: 140%" required>
                                      <option selected disabled value="">Seleccionar</option>
                                      <option value="Dr.">Dr.</option>
                                      <option value="Dra.">Dra.</option>
                                      <option value="Mtro.">Mtro.</option>
                                      <option value="Mtra.">Mtra.</option>
                                      <option value="Lic.">Lic.</option> 
                                      <option value="Ing.">Ing.</option>
                                      <option value="TSU.">TSU.</option>
                                      <option value="Prof.">Prof.</option>
                                      <option value="Profa.">Profa.</option>      
                               		</select>
    							</div>
  							</div>
							<br>	
                         </div>     
                         
                         
                          <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Nombre del Vocal Suplente:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="vocalsuplente" placeholder="Comenzando por nombre" maxlength="100" required>
    							</div>
  							</div>	
                            </div>
                         
                           <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Profesión:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="profesion_vocalsuplente" placeholder="Ejemplo: Ing. en Electrónica" maxlength="100" required>
    							</div>
  							</div>	
                            </div>
                         
                            <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Cédula profesional:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<input class="form-control" type="text" name="cedula_vocalsuplente" placeholder="Cédula del vocal suplente" maxlength="20" required>
    							</div>
  							</div>	
                            </div>
                         
                           <br>
                            <div class="col-md-12 d-flex justify-content-center" style="background: #f3f3f3;">
                            CAMBIAR EL DOCUMENTO QUE DESEAS OBTENER Y PRESIONAR EL BOTÓN "GENERAR"
                            </div>    
                         
                         
                    <script>
                    document.getElementById('form1').documento.onchange = function() {
                           var newaction = this.value;
                           document.getElementById('form1').action = newaction;
                       };
                        
                        
                        function changeAction(val){
                            document.getElementById('form1').setAttribute('action', val);
                        }
                   </script>
                     
                    <div class="col-md-12 mt-4">
							<div class="row">
    							<div class="col-md-4 mt-1">
									<p2><strong>Documento:</strong></p2>  
    							</div>
								
    							<div class="col-md-8">
									<select name="documento" class="form-select" style="width: 100%;height: 140%" onchange='changeAction(this.value)' required>
                                      <option selected disabled value="">Seleccionar</option>
                                      <option value="./Protesta_Ley.php">Protesta de ley</option>
                                      <option value="./Juramento.php">Juramento de ética profesional</option>
                                      <option value="./Codigo_Etica.php">Código de ética profesional</option>
                                      <option value="./Acta.php">Acta</option>
                                      <option value="./Guion.php">Guión para el acto protocolario</option>     
                               		</select>
    							</div>
  							</div>
							<br>	
                         </div>     
                         
                         
                         
                            <div class="form-button">
							<br>	
                                <button id="generar" name="generar" type="submit" class="btn btn-success"><strong>Generar</strong></button>
								<a type="button" class="btn btn-danger" href="front_All.php" style="margin-left: 20px;color: #FFFFFF; text-decoration: none;">Limpiar</a>
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
