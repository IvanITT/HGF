<?php
//
error_reporting(0);		

include_once('libraries/opentbs/tbs_class.php');
include_once('libraries/opentbs/tbs_plugin_opentbs.php');    
  
if (version_compare(PHP_VERSION,'5.1.0')>=0) {
	if (ini_get('date.timezone')=='America/Mexico_City') {
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
$Dato1 = strftime($Dia." de %B de %Y", strtotime($Dato1));

$mesesing = ["January", "February", "March", "April","May", "June", "July", "August", "September", "October","November", "December"];
$meseses = ["Enero", "Febrero", "Marzo", "Abril","Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre","Noviembre", "Diciembre"];
$Dato1=str_replace($mesesing,$meseses,$Dato1);

$Dato2 = $_POST['grado_presidente'].' '.$_POST['presidente'];
$Dato3 = $_POST['grado_secretario'].' '.$_POST['secretario'];
$Dato4 = $_POST['grado_vocal'].' '.$_POST['vocal'];
$Dato5 = $_POST['grado_vocalsuplente'].' '.$_POST['vocalsuplente'];
$Dato6= $_POST['nombre'];
$Dato7= $_POST['matricula'];
$Dato8= $_POST['carrera'];

$Dato9 = strftime("%d", strtotime($_POST['fecha']));
$Dato10 = strftime("%B", strtotime($_POST['fecha']));
$Dato10=str_replace($mesesing,$meseses,$Dato10);

$Dato11 = strftime("%Y", strtotime($_POST['fecha']));

$Dato12= $_POST['lugar'];

//Cargar la plantilla
$template = 'templates/Titulacion/TecNM-AC-PO-006-03.docx';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Agregar automaticamente los datos a la plantilla
    
// Definir el nombre del archivo de salida
$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', ' '.$Dato6.$save_as.'.', $template);

if (!$save_as==='') {
	//Se obtiene un archivo descargable y no se guarda en el servidor
	$TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); //Se vacian los datos en la plantilla
	exit();
    
} else {
	//Se obtiene como salida el archivo en el servidor
	$TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
	//exit("El archivo [$output_file_name] fue creado.");
    
    //Mover archivo nuevo a una carpeta temporal para su manipulación
    $ndoctemp = "templates/Titulacion/Temporal/Aviso Oficial de Acto Protocolario ".$Dato6.".docx";
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
    
    header('Location: font_Aviso.php');   
}  


?>	