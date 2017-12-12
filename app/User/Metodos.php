<?php
function Nombre($Quien){
	include '../Conexion.php';
	if ($conn->connect_error) return 0;
	else{
		$sql="Select Nombre, Apellidos from Usuario where UsuarioID=".$Quien.";";
		$result1 = $conn->query($sql);
		//Si El numero de columnas de la consulta es 0, retornamos 0
		if ($result1->num_rows > 0){
			while($row = $result1->fetch_assoc()) {
				$Nombre=$row["Nombre"]." ".$row["Apellidos"];
			}
		}
		else $Nombre="0";
	}
	$conn-> close();
	return $Nombre;
}

function VentaFecha($Quien,$Cual){
	include '../Conexion.php';
	if ($conn->connect_error) return 0;
	else{
		$sql="Select FechaVenta from Ventas where VentaID=".$Cual." and IDUsuario=".$Quien.";";
		$result1 = $conn->query($sql);
		//Si El numero de columnas de la consulta es 0, retornamos 0
		if ($result1->num_rows > 0){
			while($row = $result1->fetch_assoc()) {
				$Fecha=$row["FechaVenta"];
			}
		}
		else $Fecha=0;
	}
	$conn-> close();
	return $Fecha;
}
function VentaTotal($Quien,$Cual){
	include '../Conexion.php';
	if ($conn->connect_error) return 0;
	else{
		$sql="Select Total from Ventas where VentaID=".$Cual." and IDUsuario=".$Quien.";";
		$result1 = $conn->query($sql);
		//Si El numero de columnas de la consulta es 0, retornamos 0
		if ($result1->num_rows > 0){
			while($row = $result1->fetch_assoc()) {
				$Total=$row["Total"];
			}
		}
		else $Total=0;
	}
	$conn-> close();
	return $Total;
}

  ?>