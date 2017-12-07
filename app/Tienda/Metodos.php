<?php
function Check($Quien, $Que)
{
	include '../Conexion.php';
	if ($conn->connect_error) return 0;
	else{
		$sqlCheck="Select CarroID from Carrito where UsuarioID=".$Quien." and InventarioID=".$Que." ";
		$result1 = $conn->query($sqlCheck);
		//Si El numero de columnas de la consulta es 0, retornamos 0
		if($result1->num_rows==0){
			$conn->close();
			return 0;
		}
		else{
			while($row = $result1->fetch_assoc()) {
				$CarroID=$row["CarroID"];
			}
			$conn->close();
			return $CarroID;

		}
	}
}
function Check1($Que)
{
	include '../Conexion.php';
	if ($conn->connect_error) return 0;
	else{
		$sqlCheck="Select Stock from Carrito where InventarioID=".$Que." ";
		$result1 = $conn->query($sqlCheck);
		//Si El numero de columnas de la consulta es 0, retornamos 0
		if($result1->num_rows==0){
			$conn->close();
			return 0;
		}
		else{
			while($row = $result1->fetch_assoc()) {
				$Stock=$row["Stock"];
			}
			$conn->close();
			return $Stock;

		}
	}
}





//Esta funcion añade mas producto al carrito
function AddCarrito($Cuanto,$Total,$Carr){
	include '../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		$sqlUP="UPDATE Carrito SET Cantidad= Cantidad +".$Cuanto.", Total = Total + ".$Total." WHERE  CarroID =".$Carr."";
		if ($conn->query($sqlUP) === TRUE){$conn->close(); return 1;}
		else{$conn->close(); return 0; }

	}
}
//Esta funcion Hace un nuevo registro al carrito
function InsertCarrito($Quien,$Que,$Cuanto,$Total){
include '../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		$sqlIN=" INSERT INTO Carrito (`CarroID`, `UsuarioID`, `InventarioID`, `Cantidad`, `Total`)
							  VALUES (NULL, '".$Quien."', '".$Que."', '".$Cuanto."', '".$Total."')";
		if ($conn->query($sqlIN) === TRUE){$conn->close(); return 1;}
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

function Reduceinv($Que,$Cuanto){
	include '../Conexion.php';
	if ($conn->connect_error){ $conn->close(); return 0;}
	else{
		$sqlUP="UPDATE Inventario SET Stock = Stock-".$Cuanto."  WHERE InventarioID = ".$Que."";
		if ($conn->query($sqlUP) === TRUE){$conn->close(); return 1;}
		else{$conn->close(); return 0; }

	}


}

?>