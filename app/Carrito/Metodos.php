<?php
//Aumentamos en el Inventario
function Aumentarinv($Que,$Cuanto){
	include '../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		$sqlUP=" UPDATE `Inventario` SET `Stock`= Stock+(SELECT Cantidad-".$Cuanto." as 'Suma' from Carrito where Carrito.InventarioID=".$Que.") WHERE InventarioID=".$Que;
		if ($conn->query($sqlUP) === TRUE){$conn->close(); return 1;}
		else{$conn->close(); return 0; }
		
	}


}



//Con esta funcion Obtenemmos cuanto se hace por un pedido de carrito
function Total($Que, $Cuanto){
	include '../Conexion.php';
	if ($conn->connect_error) return 0;
	else{
		$sql=" select Precio*".$Cuanto." as 'Costo' from Inventario  where InventarioID=".$Que;
		$result1 = $conn->query($sql);
		//Si El numero de columnas de la consulta es 0, retornamos 0
		if ($result1->num_rows > 0){
			while($row = $result1->fetch_assoc()) {
				$Total=$row["Costo"];
			}
		}
		else $Total=0;
	}
	$conn-> close();
	return $Total;

}


//Esta funcion añade mas producto al carrito
function ChangeCarrito($Cuanto,$Total,$Carr){
	include '../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		$sqlUP="UPDATE Carrito SET Cantidad=".$Cuanto.", Total = ".$Total." WHERE  CarroID =".$Carr."";
		if ($conn->query($sqlUP) === TRUE){$conn->close(); return 1;}
		else{$conn->close(); return 0; }
		
	}
}

function RegresarInv($Que){
	include '../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		$sqlUP=" UPDATE `Inventario` SET `Stock`= Stock+(SELECT Cantidad as 'Suma' from Carrito where Carrito.InventarioID=".$Que.") WHERE InventarioID=".$Que;
		if ($conn->query($sqlUP) === TRUE){$conn->close(); return 1;}
		else{$conn->close(); return 0; }
		
	}


}



function BorrarRegistro1($Cual){
	include '../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		$sqlDel="DELETE FROM Carrito WHERE CarroID = ".$Cual."";
		if ($conn->query($sqlDel) === TRUE){$conn->close(); return 1;}
		else{$conn->close(); return 0; }
		
	}


}

function CarroTotal($Quien){
	include '../Conexion.php';
	if ($conn->connect_error) return 0;
	else{
		$sql="select SUM(Total) as Resultado from Carrito where UsuarioID=".$Quien.";";
		$result1 = $conn->query($sql);
		//Si El numero de columnas de la consulta es 0, retornamos 0
		if ($result1->num_rows > 0){
			while($row = $result1->fetch_assoc()) {
				$Total=$row["Resultado"];
			}
		}
		else $Total=0;
	}
	$conn-> close();
	return $Total;



}



//Esta funcion Hace un nuevo registro al carrito
function VentaNula($Quien,$Total){
include '../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		 $sql=" INSERT INTO Ventas (`VentaID`, `IDUsuario`, `FechaVenta`, `Total`)
							  VALUES (NULL, '".$Quien."', NULL,  '".$Total."')";
		if ($conn->query($sql) === TRUE){$conn->close(); return IDVenta($Quien);}
		else{$conn->close(); return 0; }
		
	}
}



function IDVenta($Quien){
	include '../Conexion.php';
	if ($conn->connect_error) return 0;
	else{
		$sql="select VentaID from Ventas where FechaVenta is NULL and IDUsuario=".$Quien.";";
		$result1 = $conn->query($sql);
		//Si El numero de columnas de la consulta es 0, retornamos 0
		if ($result1->num_rows > 0){
			while($row = $result1->fetch_assoc()) {
				$Venta=$row["VentaID"];
			}
		}
		else $Venta=1;
	}
	$conn-> close();
	return $Venta;



}

function MoverCarrito($Quien,$Venta){
include '../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		 $sql=" insert into Pedidos (VentaID,InventarioID,Cantidad,Total) select ".$Venta.", InventarioID,Cantidad,Total from Carrito where UsuarioID=".$Quien." ";
		if ($conn->query($sql) === TRUE){$conn->close(); return 1;}
		else{$conn->close(); return 0; }
		
	}
}

function FechaVenta($Venta){
include '../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		$sqlUP=" UPDATE `Ventas` SET `FechaVenta`= NOW() WHERE VentaID=".$Venta;
		if ($conn->query($sqlUP) === TRUE){$conn->close(); return 1;}
		else{$conn->close(); return 0; }
		
	}


}
function VaciarCarrito($Quien){
include '../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		$sqlDel="DELETE FROM Carrito WHERE UsuarioID = ".$Quien."";
		if ($conn->query($sqlDel) === TRUE){$conn->close(); return 1;}
		else{$conn->close(); return 0; }
		
	}


}


  ?>