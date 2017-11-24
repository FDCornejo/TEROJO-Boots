<?php

session_start(); # importante iniciar session al comienzo de la página
 
#Cifradas
$Nombre = $_POST['nom'];
$Apellido = $_POST['ape'];
$Correo = md5($_POST['mail']);
$Contra = md5($_POST['mot']);
#No cifradas
$Calle = $_POST['rue'];
$Numero = $_POST['numb'];
$Colonia = $_POST['neight'];
$CP = $_POST['cp'];
$Ciudad = $_POST['ville'];
$Estado = $_POST['etat'];
$Pais = $_POST['pay'];


if(!$_POST['captcha'] == $_SESSION['codigo']){
header("Location: index.php"); 
exit;  
}

include "../Conexion.php";



echo "Nombre: ".$Nombre;
echo "<br>Apellido: ".$Apellido;
echo "<br>Correo: ".$Correo;
echo "<br>Contraseña: ".$Contra;
echo "<br>Calle: ".$Calle;
echo "<br>Numero: ".$Numero;
echo "<br>Colonia: ".$Colonia;
echo "<br>CP: ".$CP;
echo "<br>Ciudad: ".$Ciudad;
echo "<br>Estado: ".$Estado;
echo "<br>Pais: ".$Pais;



?>