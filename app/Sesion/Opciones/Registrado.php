<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>Tea Rouge</title>
   <!-- Bootstrap -->
   <link href="../../../css/bootstrap.min.css" rel="stylesheet">
   <link rel="shortcut icon" type="image/png" href="../../../img/favicon.ico"/>
   <link href="https://fonts.googleapis.com/css?family=Lobster|Merriweather" rel="stylesheet">
   <link href="../../../css/Logo.css" rel="stylesheet">
   <link href="../../../font/flaticon.css" rel="stylesheet">
   <link href="../../../css/general.css" rel="stylesheet">
</head>
<body>
   <?php include "../Modal_Sesion3.php" ?>
   <nav class="navbar navbar-default">
      <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="flaticon-menu"></span>
            </button>
            <a class="navbar-brand" href="../../../"> <img class="Logito" src="../../../img/logo-peque.png" alt=""></a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="../../../"><span class="flaticon-home"></span><br>Home</a></li>
               <li><a href="../../Nosotros"><span class="flaticon-tea-cup"></span><br>Nosotros</a></li>
               <li><a href="../../Carrito"><span class="flaticon-basket"></span><br>Canasto</a></li>
               <li><a href="../../Tienda"><span class="flaticon-teapot"></span><br>Tienda</a></li>
               <li  class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="flaticon-user"><br> Usuario</span></a>
                  <ul class="dropdown-menu">
                    <?php 
                    if (!isset($_SESSION['ID'])) 
                      echo "<li><a href='#' data-toggle='modal' data-target='#exampleModal'>Iniciar Sesion</a></li>";
                   else echo "<li><a href='Cerrar.php'>Cerrar Sesion</a></li>";

                   ?>
                </ul>
             </li>
          </ul>
       </div>
       <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
 </nav>
 <main>
    <div class="container ">
       <div class="row text-center">
         <?php 
         if (!isset($_SESSION['ID']))
            echo "<h1>¿Ya estas Registrado?</h1><h3><a href='#' data-toggle='modal' data-target='#exampleModal'>Inicia Sesion </a></h3>";
       else echo "<h1>Tenemos una sesion Abierta </h1><h2>Hola ".$_SESSION['Prenom']." ".$_SESSION['Nom']."</h2><h3><a href='Cerrar.php'>Cerrar Sesion</a></h3>";

       ?>
    </div></div>

 </main>
 <br>
 <footer class="footer TREED">
   <div class="container text-center">
      <div class="row">
         <h1> Visita Nuestras redes sociales</h1>
         <h2> <a class="Quitar" href="#">Facebook</a></h2>
         <h2> <a  class="Quitar"href="#">Twitter</a></h2>
         <h2> <a  class="Quitar"href="#">Github</a></h2>
         <h2> <a  class="Quitar"href="#">Nosotros</a></h2>
      </div>
      <div class="row right">
         <div class="col-md-3 col-md-offset-10">
            <h1 class="ELobster">Tea Rouge</h1>
         </div>
      </div>
   </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../../js/bootstrap.min.js"></script>
</body>
</html>
