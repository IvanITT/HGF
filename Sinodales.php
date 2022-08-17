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

// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1  
    
setlocale (LC_ALL, "es_ES");
//Recibir y preparar los datos

//$Dato1 = strftime("%d de %B de %Y", strtotime($_POST['fecha']));

$Dato1 = date("F");
$Dia = date("d");
$Dato1 = strftime($Dia."/%B/%Y", strtotime($Dato1));

$mesesing = ["January", "February", "March", "April","May", "June", "July", "August", "September", "October","November", "December"];
$meseses = ["Enero", "Febrero", "Marzo", "Abril","Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre","Noviembre", "Diciembre"];
$Dato1=str_replace($mesesing,$meseses,$Dato1);

$Dato2 = $_POST['oficio'];

$Dato3 = $_POST['departamento'];

if($Dato3 == "1"){
    
    $Dato3 = "JEFE DE DEPARTAMENTO DE INGENIERÍAS";
    $Dato4 = "JOSÉ DEL CARMEN QUINTAL ÁLVAREZ";

}else if($Dato3 == "2"){
    
    $Dato3 = "JEFA DE DEPARTAMENTO DE CIENCIAS ECONÓMICO ADMINISTRATIVAS";
    $Dato4 = "FABIOLA ELIZABETH ARELLANO MORALES";
}

$Dato5= $_POST['nombre'];
$Dato6= $_POST['matricula'];

$Dato7 = strtoupper($_POST['proyecto']);
$Dato7 = mb_strtoupper($Dato7,'utf-8');

$Dato8= $_POST['opcion'];


//Cargar la plantilla
$template = 'templates/Titulacion/SOLICITUD_SINODALES.docx';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Agregar automaticamente los datos a la plantilla
    
// Definir el nombre del archivo de salida
$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', ' '.$Dato5.$save_as.'.', $template);

if (!$save_as==='') {
	//Se obtiene un archivo descargable y no se guarda en el servidor
	$TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); //Se vacian los datos en la plantilla
	exit();
    
} else {
	//Se obtiene como salida el archivo en el servidor
	$TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
	//exit("El archivo [$output_file_name] fue creado.");
    
    //Mover archivo nuevo a una carpeta temporal para su manipulación
    $ndoctemp = "templates/Titulacion/Temporal/Oficio ".$Dato2." Solicitud de sinodales para protocolo ".$Dato5.".docx";
    rename($output_file_name, $ndoctemp);
      
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
    
    header('Location: font_Sinodales.php');   
}  


?>	