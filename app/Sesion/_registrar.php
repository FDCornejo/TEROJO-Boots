<?php
session_start(); # importante iniciar session al comienzo de la página
//Datos a Registrar
#Cifradas
$Nombre = $_POST['nom'];
$Apellido = $_POST['ape'];
$Correo = md5(strtolower($_POST['mail']));
$Contra = md5($_POST['mot']);
#No cifradas
$Calle = $_POST['rue'];
$Numero = $_POST['numb'];
$Colonia = $_POST['neight'];
$CP = $_POST['cp'];
$Ciudad = $_POST['ville'];
$Estado = $_POST['etat'];
$Pais = $_POST['pay'];

//Reviso el Captcha
if(!$_POST['captcha'] == $_SESSION['codigo']){
header("Location: index.php");
exit;
}
//Funciones para Buscar
include "_funciones.php";


$func='Buscar';
if (!$func($Correo)){
	$func='Registrar1';
	if($func($Correo,$Nombre,$Apellido,$Contra)){
		$func='Registrar2';
		if( $func($Correo,$Calle,$Numero,$Colonia,$CP,$Ciudad,$Estado,$Pais))
		header("Location: Opciones/Registrado.php");

	}

}
else header("Location: Opciones/Registrado.php");


?>
