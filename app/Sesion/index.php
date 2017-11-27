<?php
session_start();
if (!isset($_SESSION['ID']))
header("Location: Formulario.php");
else
header("Location: Opciones/Registrado.php");

  ?>