<?php
session_start();
include "Metodos.php";
$Quien=$_SESSION['ID'];
$Que=$_POST['idP'];
$Cuanto=$_POST['Cantidad'];

$Total=Total($Que,$Cuanto);
$CarroID=Check($Quien,$Que);
$Exito=0;

if ($CarroID==0) 
	$Exito = InsertCarrito($Quien,$Que,$Cuanto,$Total);
else
	$Exito = AddCarrito($Cuanto,$Total,$CarroID);

if ($Exito!=0) {
	echo Reduceinv($Que,$Cuanto);
}
?>