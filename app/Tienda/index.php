<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Tea Rouge</title>
  <!-- Bootstrap -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="../../img/favicon.ico"/>
  <link href="https://fonts.googleapis.com/css?family=Lobster|Merriweather" rel="stylesheet">
  <link href="../../css/general.css" rel="stylesheet">
  <link href="../../css/Logo.css" rel="stylesheet">
  <link href="../../font/flaticon.css" rel="stylesheet">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Script/busqueda.js"></script>

</head>

<body>

 <?php include "../Sesion/Modal_Sesion.php" ?>


 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="flaticon-menu"></span>
      </button>
      <a class="navbar-brand" href="../../"> <img class="Logito" src="../../img/logo-peque.png" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../../"><span class="flaticon-home"></span><br>Home</a></li>
        <li><a href="../Nosotros"><span class="flaticon-tea-cup"></span><br>Nosotros</a></li>
        <?php if (isset($_SESSION['ID']))
        echo "<li><a href='../Carrito'><span class='flaticon-basket'></span><br>Canasto</a></li>";?>
        <li class="active"><a href="../Tienda/"><span class="flaticon-teapot"></span><br>Tienda</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="flaticon-user"><br> Usuario</span></a>
          <ul class="dropdown-menu">
           <?php
           if (!isset($_SESSION['ID']))
             echo "<li><a href='#' data-toggle='modal' data-target='#exampleModal'>Iniciar Sesion</a></li>";
           else echo "<li><a href='../Sesion/Opciones/Cerrar.php'>Cerrar Sesion</a></li>";

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
  <div class="container-fluid">
    <h1 class="text-center">Nuestro Catalogo</h1>



    <div class="col-lg-6 col-lg-offset-3">
      <div class="input-group">
        <input type="text" class="form-control" id="busqueda" placeholder="Buscar..." aria-label="SBuscar...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Buscar!!</button>
        </span>
      </div>
    </div>
  </div>
  <br>

  <div id="resultado">
    <?php
    include '../Conexion.php';
    $sql = "SELECT * FROM Inventario where Stock>1";
    $result = $conn->query($sql);
    $cont=0;

    if ($result->num_rows > 0) {
        // output data of each row
      while($row = $result->fetch_assoc()) {
        if ($cont==0) {
          echo "  <div class='row text-center'>";
        }
        echo "
        <div class='col-sm-6 col-md-3'>
        <div class='thumbnail'>
        <img src='".$row["Imagen"]."' alt='...''>
        <div class='caption'>
        <h3>".$row["ProductoNom"]."</h3>
        <h4>Precio:".$row["Precio"]."</h4>
        <p>Disponibles:".$row["Stock"]."</p>


        <form action='Producto.php' method='GET'>
        <input type='text' class='invisible' name='IDP' value='".$row["InventarioID"]."'><br>
        <input class='btn TREED' role='button' type='submit' value='Comprar'>
        </form>
        </div>
        </div>
        </div>
        ";
        $cont++;
        if ($cont==4) {
          echo "</div>";
          $cont=0;
        }


      }
    } else {
      echo "No tenemos Productos por Ahora";
    }

    $conn->close();
    ?>
  </div>
</div>
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


</body>

</html>
