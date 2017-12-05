<?php
session_start();
include 'Metodos.php';
echo $TotalVenta=$_POST["TotalCarro"];
echo $Quien=$_SESSION['ID'];
echo "<br>El Numero de venta es :";
echo $Venta= VentaNula($Quien,$TotalVenta);
if($Venta!=0)
	if (FechaVenta($Venta)==1) {
		if(MoverCarrito($Quien,$Venta)==1){
			if (VaciarCarrito($Quien)==1){
			header('Location:../Carrito');

			}


		}

	}




	?>