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
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="../../img/favicon.ico"/>
  <link href="https://fonts.googleapis.com/css?family=Lobster|Merriweather" rel="stylesheet">
  <link href="../../css/general.css" rel="stylesheet">
  <link href="../../css/Logo.css" rel="stylesheet">
  <link href="../../font/flaticon.css" rel="stylesheet">

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
          <li><a href="../Nosotros/"><span class="flaticon-tea-cup"></span><br>Nosotros</a></li>
          <li class="active"><a href="#"><span class="flaticon-basket"></span><br>Canasto</a></li>
          <li><a href="../Tienda/"><span class="flaticon-teapot"></span><br>Tienda</a></li>
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
  <div class="container-fluid text-center">
    <h1 class="text-center">Tu Carrito</h1>
    <div class="row">


      <?php
      include "Metodos.php";


      $Quien=$_SESSION['ID'];
            $CarroTotal=CarroTotal($Quien);
      include '../Conexion.php';
      $sql="SELECT Inv.ProductoNom as Queso, Carr.Cantidad as tengo,Carr.Total as gasto , Carr.CarroId as idCarro,Inv.InventarioID as idInv FROM Carrito as Carr  INNER JOIN Inventario as Inv  on Carr.InventarioID =Inv.InventarioID where Carr.UsuarioID=".$Quien.";";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        echo "
        <div class='col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1 col-sm-12'>
        <div class='panel panel-default'>
        <!-- Default panel contents -->
        <div class='table-responsive'>          
        <table class='table'>
        <div class='panel-heading'>
        <thead>
        <tr>
        <th>Nombre Producto</th>
        <th>Cantidad</th>
        <th>Total</th>
        <th>Cambiar</th>
        <th>Borrar</th>
        </tr>

        </thead>
        </div>
        <tbody>
        ";



        while($row = $result->fetch_assoc()){
          echo "
          <tr>
          <form action='Alterar.php' id='Carro' method='POST' >
          <input class='invisible' name='Que' value='".$row["idInv"]."'>
          <input class='invisible' name='EnCarr' value='".$row["idCarro"]."'>
          <td>".$row["Queso"]."</td>
          <td>
          <div class='input-group'>
          <input name='Quiero' type='number' value='".$row["tengo"]."'min='1' max='".$row["tengo"]."' class='form-control'>
          </div>
          </td>
          <td>$".$row["gasto"]."</td>
          <td><input type='submit' name='Cambiar' class='btn btn-default' value='Cambiar'></td>
          <td><input type='submit' name='Borrar' class='btn btn-danger' value='Borrar'></td>
          </form>
          </tr>
          ";


        }

        echo "
        </tbody>
        </table>
        </div>
        </div>
        <form action='Transaccion.php' method='POST'>
        <input type='submit' name='Pagar' class='btn btn-danger' value='Pagar'>
        <br>
        <input class='invisible' type='number' name='TotalCarro' value='".$CarroTotal."'>
        <form>
        ";


      }
      else{
        echo "<h2 clas='text-center'>No Tienes Productos </h2>
        <a clas='text-center' href='../Tienda/'><h3>Visita Nuestra Tienda y Compra</h3></a>

        ";
      }
      $conn->close();


      ?>
<h2>Total en el Carrito: $ <?php echo $CarroTotal;  ?></h2>

    </div>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../js/bootstrap.min.js"></script>
</body>

</html>
