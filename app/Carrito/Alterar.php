<?php
session_start();
$Cantidad=$_POST["Quiero"];
$IdInv=$_POST["Que"];
$IdCarr=$_POST["EnCarr"];
$Quien=$_SESSION['ID'];

include "Metodos.php";


if (isset($_POST["Cambiar"])) {
	$NewTotal=Total($IdInv,$Cantidad);
	if(Aumentarinv($IdInv,$Cantidad)==1)
		if(ChangeCarrito($Cantidad,$NewTotal,$IdCarr))
			header('Location:../Carrito');
		else echo "No se Añadio al Carrito";
	else echo "No se Añadio al Inventario";
	}
	if (isset($_POST["Borrar"])) {

		if (RegresarInv($IdInv)==1){
			echo "Se regreso ese producto al Inventario";
			if (BorrarRegistro1($IdCarr)==1) 
			header('Location:../Carrito');
				
		}

	}

	?>