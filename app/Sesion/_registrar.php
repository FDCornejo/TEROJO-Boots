<?php

session_start(); # importante iniciar session al comienzo de la página
 

$Nombre = $_POST['nom'];
$Apellido = $_POST['ape'];
$Correo = $_POST['mail'];
$Calle = $_POST['rue'];
$Numero = $_POST['numb'];
$Colonia = $_POST['neight'];
$CP = $_POST['cp'];
$Ciudad = $_POST['ville'];
$Estado = $_POST['etat'];
$Pais = $_POST['pay'];
$Contra = $_POST['mot'];


if(!$_POST['captcha'] == $_SESSION['codigo']){
header("Location: index.php"); 
exit;  
}


echo "Nombre: ".$Nombre;
echo "<br>Apellido: ".$Apellido;
echo "<br>Correo: ".$Correo;
echo "<br>Calle: ".$Calle;
echo "<br>Numero: ".$Numero;
echo "<br>Colonia: ".$Colonia;
echo "<br>CP: ".$CP;
echo "<br>Ciudad: ".$Ciudad;
echo "<br>Estado: ".$Estado;
echo "<br>Pais: ".$Pais;
echo "<br>Contraseña: ".$Contra;


?>