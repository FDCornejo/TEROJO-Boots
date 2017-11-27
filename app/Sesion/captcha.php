<?php
 
session_start(); # iniciamos la sesion
 
$numero = rand(1000,9999); # generamos un numero aleatorio
 
$_SESSION['codigo'] = $numero; # guardamos el numero en una variable de sesión
header("Content-type: image/png");
 
# declaramos im con la creación de una imagen
$im = imagecreate(70, 30);
 
# indicamos el color del fondo (RGB)
$fondo = imagecolorallocate($im, 245, 143, 146); # el color del fondo seria blanco, se puede editar
 
# indicamos el color del texto (RGB)
$texto = imagecolorallocate($im, 168, 81, 84); # el color de las letras seria blanco, se puede editar
 
# creacion del texton dentro de la imagen
imagestring($im, 15, 20, 5, $_SESSION['codigo'], $texto);
 
# se crea la imagen, la imagen será formato PNG
imagepng($im);
?>