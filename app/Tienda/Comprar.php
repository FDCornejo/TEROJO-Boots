<?php
session_start();
include "Metodos.php";
$Quien=$_SESSION['ID'];
$Que=$_POST['idP'];
$Cuanto=$_POST['Cantidad'];
$Disp=$_POST['Disp'];
if ($Disp>=$Cuanto) {
	$Exito=0;
	$Total=Total($Que,$Cuanto);
	$CarroID=Check($Quien,$Que);
	if ($CarroID==0)
		$Exito = InsertCarrito($Quien,$Que,$Cuanto,$Total);
	else
		$Exito = AddCarrito($Cuanto,$Total,$CarroID);
	if ($Exito!=0) {
		echo Reduceinv($Que,$Cuanto);
	}
}
else {
	echo "0";
}


?>