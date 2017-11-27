<?php
function Buscar($Correo){
include "../Conexion.php";
$sql="Select Correo from Usuario where Correo='".$Correo."'";
$resultado= $conn->query($sql);
if ($resultado->num_rows >0)
return true;
else return false;
$conn->close();
}


function Registrar1 ($correo,$nom,$ape,$mot){
include "../Conexion.php";
$sql = "INSERT INTO Usuario (Correo, Contra, Nombre, Apellidos)
VALUES ('".$correo."', '".$mot."', '".$nom."','".$ape."')";

if ($conn->query($sql) === TRUE)  return true;
else false;
$conn->close();

}

function Registrar2($Correo,$Calle,$Numero,$Colonia,$CP,$Ciudad,$Estado,$Pais){
include "../Conexion.php";
$sql="Select UsuarioID from Usuario where Correo='".$Correo."'";
$resultado= $conn->query($sql);
if ($resultado->num_rows ==1){
    while($row = $resultado->fetch_assoc()) {$ID= $row["UsuarioID"];}
} else 
   header("Location: Opciones/Registrado.php");


$sql= "INSERT INTO Direcciones (`UsuarioID`, `Calle`, `Numero`, `Colonia`, `CP`, `Ciudad`, `Estado`, `Pais`) VALUES ('".$ID."', '".$Calle."', '".$Numero."', '".$Colonia."', '".$CP."', '".$Ciudad."', '".$Estado."', '".$Pais."')";

if ($conn->query($sql) === TRUE) return true;
else return false;
$conn->close();


}

 ?>
