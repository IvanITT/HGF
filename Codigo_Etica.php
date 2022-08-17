<?php

error_reporting(0);		

include_once('libraries/opentbs/tbs_class.php');
include_once('libraries/opentbs/tbs_plugin_opentbs.php');    
  
if (version_compare(PHP_VERSION,'5.1.0')>=0) {
	if (ini_get('date.timezone')=='') {
		date_default_timezone_set('UTC');
	}
}    


// Inicializar la instancia a TBS
$TBS = new clsTinyButStrong; //Nueva instancia
$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); //Cargar OpenTBS plugin    

  
//Recibir y preparar los datos
// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1  
    
setlocale (LC_TIME, "es_ES");

$Dato1 = strftime("%d de %B de %Y", strtotime($_POST['fecha']));
$mesesing = ["January", "February", "March", "April","May", "June", "July", "August", "September", "October","November", "December"];
$meseses = ["Enero", "Febrero", "Marzo", "Abril","Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre","Noviembre", "Diciembre"];
$Dato1=str_replace($mesesing,$meseses,$Dato1);

$Dato2 = strtoupper($_POST['nombre']);
$Dato2 = mb_strtoupper($Dato2,'utf-8');

//DEPURACIÓN   

//function console_log( $data ){
  //echo '<script>';
  //echo 'console.log('. json_encode( $data ) .')';
  //echo '</script>';
//}    

//console_log($fecha);     
   
//DEPURACIÓN     
 
//Cargar la plantilla
$template = 'templates/Titulacion/CODIGO_ETICA.docx';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Agregar automaticamente los datos a la plantilla
    
// Definir el nombre del archivo de salida
$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', ' '.$Dato2.$save_as.'.', $template);

if (!$save_as==='') {
	//Se obtiene un archivo descargable y no se guarda en el servidor
	$TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); //Se vacian los datos en la plantilla
	exit();
    
} else {
	//Se obtiene como salida el archivo en el servidor
	$TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
	//exit("El archivo [$output_file_name] fue creado.");
    
    //Mover archivo nuevo a una carpeta temporal para su manipulación
    $ndoctemp = "templates/Titulacion/Temporal/Código de Ética Profesional ".$Dato2.".docx";
    rename($output_file_name, $ndoctemp);
      
    //Ventana emergente
    //$link = "<script>window.open('front_Anexo_XXXI.php')</script>";
    //echo $link;
    
    //Descargar archivo temporal
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($ndoctemp).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($ndoctemp));
    readfile($ndoctemp);
    
    
    //Borrar el archivo temporal
    unlink($ndoctemp);
    
    $exito="Formato generado exitosamente";	
    if($exito){?><div class="succWrap" id="hideMe"><strong>EXITO</strong>:<?php echo htmlentities($exito); ?> </div><?php };
    
    header('Location: font_Codigo_Etica.php');
    
}
    
    
    
    
/*    
#Validación
if()
{
$exito="Formato generado exitosamente";	
if($exito){?><div class="succWrap" id="hideMe"><strong>EXITO</strong>:<?php echo htmlentities($exito); ?> </div><?php };	
}
else 
{
$error="Error al generar el formato";
if($error){?><div class="errorWrap" id="hideMe"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php };	
}*/
   

?>	
