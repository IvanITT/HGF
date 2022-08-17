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
    
setlocale (LC_TIME, "es_ES");

//Recibir y preparar los datos

$Plan = $_POST['plan'];
$Modalidad = $_POST['modalidad'];
$Opcion = $_POST['opcion'];
$Sexo = $_POST['sexo'];  

$Dato1 = strtoupper($_POST['modalidad']);
$Dato1 = mb_strtoupper($Dato1,'utf-8');

$Dato2 = strtoupper($_POST['sexo']);
$Dato2 = mb_strtoupper($Dato2,'utf-8');
  
$Dato3 = strtoupper($_POST['nombre']);
$Dato3 = mb_strtoupper($Dato3,'utf-8');

$Dato4 = strtoupper($_POST['matricula']);
$Dato4 = mb_strtoupper($Dato4,'utf-8');

$Dato5 = strtoupper($_POST['carrera']);
$Dato5 = mb_strtoupper($Dato5,'utf-8');
  
$Dato6 = strtoupper($_POST['opcion']);
$Dato6 = mb_strtoupper($Dato6,'utf-8');

$Dato7 = $_POST['grado_presidente'].' '.$_POST['presidente'];
$Dato7 = strtoupper($Dato7);
$Dato7 = mb_strtoupper($Dato7,'utf-8');
$Dato8 = strtoupper($_POST['profesion_presidente']);
$Dato8 = mb_strtoupper($Dato8,'utf-8');
$Dato9 = strtoupper($_POST['cedula_presidente']);
$Dato9 = mb_strtoupper($Dato9,'utf-8');

$Dato10 = $_POST['grado_secretario'].' '.$_POST['secretario'];
$Dato10 = strtoupper($Dato10);
$Dato10 = mb_strtoupper($Dato10,'utf-8');
$Dato11 = strtoupper($_POST['profesion_secretario']);
$Dato11 = mb_strtoupper($Dato11,'utf-8');
$Dato12 = strtoupper($_POST['cedula_secretario']);
$Dato12 = mb_strtoupper($Dato12,'utf-8');    

$Dato13 = $_POST['grado_vocal'].' '.$_POST['vocal'];
$Dato13 = strtoupper($Dato13);
$Dato13 = mb_strtoupper($Dato13,'utf-8');
$Dato14 = strtoupper($_POST['profesion_vocal']);
$Dato14 = mb_strtoupper($Dato14,'utf-8');
$Dato15 = strtoupper($_POST['cedula_vocal']);
$Dato15 = mb_strtoupper($Dato15,'utf-8');        

$Dato16 = $_POST['grado_vocalsuplente'].' '.$_POST['vocalsuplente'];
$Dato16 = strtoupper($Dato16);
$Dato16 = mb_strtoupper($Dato16,'utf-8');
$Dato17 = strtoupper($_POST['profesion_vocalsuplente']);
$Dato17 = mb_strtoupper($Dato17,'utf-8');
$Dato18 = strtoupper($_POST['cedula_vocalsuplente']);
$Dato18 = mb_strtoupper($Dato18,'utf-8');         


//MODALIDAD PRESENCIAL ---------------------------------------------------------------------------------
    
if($Modalidad == "Presencial"){
    
    if($Plan == "2015"){
    
        $Plan = 'ESTE ACTO ESTÁ SUSTENTADO EN EL MANUAL DE LINEAMIENTOS ACADÉMICO-ADMINISTRATIVOS DEL TECNOLÓGICO NACIONAL DE MÉXICO, PLANES DE ESTUDIO PARA LA FORMACIÓN Y DESARROLLO DE COMPETENCIAS PROFESIONALES, FECHA DE CREACIÓN OCTUBRE DE 2015, Y QUE EN EL PUNTO 14.3 DICE: LA TITULACIÓN INTEGRAL ES LA VALIDACIÓN DE LAS COMPETENCIAS (CONOCIMIENTOS, HABILIDADES Y ACTITUDES) QUE EL ESTUDIANTE ADQUIRIÓ Y DESARROLLÓ DURANTE SU FORMACIÓN PROFESIONAL: A TRAVÉS DE LOS SIGUIENTES TIPOS DE PROYECTOS DE TITULACIÓN INTEGRAL: RESIDENCIA PROFESIONAL, PROYECTO DE INVESTIGACIÓN Y/O DESARROLLO TECNOLÓGICO, PROYECTO INTEGRADOR, PROYECTO PRODUCTIVO, PROYECTO DE INNOVACIÓN TECNOLÓGICA, PROYECTO DE EMPRENDEDURISMO, PROYECTO INTEGRAL DE EDUCACIÓN DUAL, ESTANCIA, TESIS O TESINA. 14.4.8.1 EL ESTUDIANTE DEBE ELABORAR UN PROYECTO ACORDE A SU PERFIL PROFESIONAL, POR LO ANTERIOR, SUSTENTADO EN EL CITADO PUNTO, INICIAMOS ESTE ACTO.';
        
    }else if($Plan == "2009-2010"){
        
        $Plan = 'ESTE ACTO ESTÁ SUSTENTADO EN EL LINEAMIENTO PARA LA TITULACIÓN INTEGRAL VERSIÓN 1.0 PLANES DE ESTUDIO 2009-2010 FECHA DE CREACIÓN 30 DE MARZO DE 2012, Y QUE EN EL PUNTO 4.8.1 DICE: EL ESTUDIANTE DEBE ELABORAR UN PROYECTO ACORDE A SU PERFIL PROFESIONAL MEDIANTE EL INFORME TÉCNICO DE RESIDENCIA PROFESIONAL, PROYECTO DE INNOVACIÓN TECNOLÓGICA, PROYECTO DE INVESTIGACIÓN, INFORME DE ESTANCIA, TESIS, TESINA, ENTRE OTROS. POR LO ANTERIOR, SUSTENTADO EN EL CITADO PUNTO, INICIAMOS ESTE ACTO.';

    }    
    
    if($Sexo == "Mujer"){
    
        $F1 = 'LA';
        $F12 = ' LA';
        $F11 = ' LA';
        $F2 = 'EGRESADA';
        $F3 = 'INGENIERA';
        $F4 = 'CIUDADANA';
        $F5 = 'A';
        $F6 = 'DE';
        
        
    }else if($Sexo == "Hombre"){
        
        $F1 = 'EL';
        $F12 = 'L';
        $F11 = '';
        $F2 = 'EGRESADO';
        $F3 = 'INGENIERO';
        $F4 = 'CIUDADANO';
        $F5 = 'AL';
        $F6 = 'DEL';
    }
    
    if($Opcion == "Informe Técnico de Residencia Profesional"){
    
//Cargar la plantilla
$template = 'templates/Titulacion/GUION PRESENCIAL - EXENCION DE EXAMEN PROFESIONAL.docx';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Agregar automaticamente los datos a la plantilla
    
// Definir el nombre del archivo de salida
$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', ' '.$Dato3.$save_as.'.', $template);

if (!$save_as==='') {
	//Se obtiene un archivo descargable y no se guarda en el servidor
	$TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); //Se vacian los datos en la plantilla
	exit();
    
} else {
	//Se obtiene como salida el archivo en el servidor
	$TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
	//exit("El archivo [$output_file_name] fue creado.");
    
    //Mover archivo nuevo a una carpeta temporal para su manipulación
    $ndoctemp = "templates/Titulacion/Temporal/Guión para protocolo ".$Dato3.".docx";
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
    
    header('Location: font_Guion.php');   
}        
        
        
    }else if($Opcion == "Tesis" or $Opcion == "Tesina" ){
        
     //Cargar la plantilla
$template = 'templates/Titulacion/GUION PRESENCIAL - EXAMEN PROFESIONAL.docx';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Agregar automaticamente los datos a la plantilla
    
// Definir el nombre del archivo de salida
$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', ' '.$Dato3.$save_as.'.', $template);

if (!$save_as==='') {
	//Se obtiene un archivo descargable y no se guarda en el servidor
	$TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); //Se vacian los datos en la plantilla
	exit();
    
} else {
	//Se obtiene como salida el archivo en el servidor
	$TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
	//exit("El archivo [$output_file_name] fue creado.");
    
    //Mover archivo nuevo a una carpeta temporal para su manipulación
    $ndoctemp = "templates/Titulacion/Temporal/Guión para protocolo ".$Dato3.".docx";
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
    
    header('Location: font_Guion.php');   
}     
        
        
    } 
    
   
    
//MODALIDAD EN LÍNEA ---------------------------------------------------------------------------------   
    
}elseif($Modalidad == "En línea"){
    
    if($Plan == "2015"){
    
        $Plan = 'ESTE ACTO ESTÁ SUSTENTADO EN EL MANUAL DE LINEAMIENTOS ACADÉMICO-ADMINISTRATIVOS DEL TECNOLÓGICO NACIONAL DE MÉXICO, PLANES DE ESTUDIO PARA LA FORMACIÓN Y DESARROLLO DE COMPETENCIAS PROFESIONALES, FECHA DE CREACIÓN OCTUBRE DE 2015, Y QUE EN EL PUNTO 14.3 DICE: LA TITULACIÓN INTEGRAL ES LA VALIDACIÓN DE LAS COMPETENCIAS (CONOCIMIENTOS, HABILIDADES Y ACTITUDES) QUE EL ESTUDIANTE ADQUIRIÓ Y DESARROLLÓ DURANTE SU FORMACIÓN PROFESIONAL: A TRAVÉS DE LOS SIGUIENTES TIPOS DE PROYECTOS DE TITULACIÓN INTEGRAL: RESIDENCIA PROFESIONAL, PROYECTO DE INVESTIGACIÓN Y/O DESARROLLO TECNOLÓGICO, PROYECTO INTEGRADOR, PROYECTO PRODUCTIVO, PROYECTO DE INNOVACIÓN TECNOLÓGICA, PROYECTO DE EMPRENDEDURISMO, PROYECTO INTEGRAL DE EDUCACIÓN DUAL, ESTANCIA, TESIS O TESINA. 14.4.8.1 EL ESTUDIANTE DEBE ELABORAR UN PROYECTO ACORDE A SU PERFIL PROFESIONAL, POR LO ANTERIOR, SUSTENTADO EN EL CITADO PUNTO, INICIAMOS ESTE ACTO.';
        
    }else if($Plan == "2009-2010"){
        
        $Plan = 'ESTE ACTO ESTÁ SUSTENTADO EN EL LINEAMIENTO PARA LA TITULACIÓN INTEGRAL VERSIÓN 1.0 PLANES DE ESTUDIO 2009-2010 FECHA DE CREACIÓN 30 DE MARZO DE 2012, Y QUE EN EL PUNTO 4.8.1 DICE: EL ESTUDIANTE DEBE ELABORAR UN PROYECTO ACORDE A SU PERFIL PROFESIONAL MEDIANTE EL INFORME TÉCNICO DE RESIDENCIA PROFESIONAL, PROYECTO DE INNOVACIÓN TECNOLÓGICA, PROYECTO DE INVESTIGACIÓN, INFORME DE ESTANCIA, TESIS, TESINA, ENTRE OTROS. POR LO ANTERIOR, SUSTENTADO EN EL CITADO PUNTO, INICIAMOS ESTE ACTO.';

    }    
    
    if($Sexo == "Mujer"){
    
        $F1 = 'LA';
        $F12 = ' LA';
        $F11 = ' LA';
        $F2 = 'EGRESADA';
        $F3 = 'INGENIERA';
        $F4 = 'CIUDADANA';
        $F5 = 'A';
        $F6 = 'DE';
        
        
    }else if($Sexo == "Hombre"){
        
        $F1 = 'EL';
        $F12 = 'L';
        $F11 = '';
        $F2 = 'EGRESADO';
        $F3 = 'INGENIERO';
        $F4 = 'CIUDADANO';
        $F5 = 'AL';
        $F6 = 'DEL';
    }
    
    if($Opcion == "Informe Técnico de Residencia Profesional"){
    
//Cargar la plantilla
$template = 'templates/Titulacion/GUION EN LINEA - EXENCION DE EXAMEN PROFESIONAL.docx';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Agregar automaticamente los datos a la plantilla
    
// Definir el nombre del archivo de salida
$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', ' '.$Dato3.$save_as.'.', $template);

if (!$save_as==='') {
	//Se obtiene un archivo descargable y no se guarda en el servidor
	$TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); //Se vacian los datos en la plantilla
	exit();
    
} else {
	//Se obtiene como salida el archivo en el servidor
	$TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
	//exit("El archivo [$output_file_name] fue creado.");
    
    //Mover archivo nuevo a una carpeta temporal para su manipulación
    $ndoctemp = "templates/Titulacion/Temporal/Guión para protocolo ".$Dato3.".docx";
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
    
    header('Location: font_Guion.php');   
}        
        
        
    }else if($Opcion == "Tesis" or $Opcion == "Tesina" ){
        
     //Cargar la plantilla
$template = 'templates/Titulacion/GUION EN LINEA - EXAMEN PROFESIONAL.docx';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Agregar automaticamente los datos a la plantilla
    
// Definir el nombre del archivo de salida
$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', ' '.$Dato3.$save_as.'.', $template);

if (!$save_as==='') {
	//Se obtiene un archivo descargable y no se guarda en el servidor
	$TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); //Se vacian los datos en la plantilla
	exit();
    
} else {
	//Se obtiene como salida el archivo en el servidor
	$TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
	//exit("El archivo [$output_file_name] fue creado.");
    
    //Mover archivo nuevo a una carpeta temporal para su manipulación
    $ndoctemp = "templates/Titulacion/Temporal/Guión para protocolo ".$Dato3.".docx";
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
    
    header('Location: font_Guion.php');   
}     
        
        
    }
       
} 


?>	
