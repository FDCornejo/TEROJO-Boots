<?php
function Adios($Quien){
	include '../../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		$sqlUP="update Inventario I inner join Carrito C on I.InventarioID=C.InventarioID set I.Stock=I.Stock+C.Cantidad where UsuarioID=".$Quien.";";
		if ($conn->query($sqlUP) === TRUE){$conn->close(); VaciarCarrito($Quien);}
		else{$conn->close(); return 0; }
		
	}


}

function VaciarCarrito($Quien){
include '../../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		$sqlDel="DELETE FROM Carrito WHERE UsuarioID = ".$Quien."";
		if ($conn->query($sqlDel) === TRUE){$conn->close(); return 1;}
		else{$conn->close(); return 0; }
		
	}


}



  ?>