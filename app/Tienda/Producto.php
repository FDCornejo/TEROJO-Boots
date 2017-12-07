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
  <nav aria-label="...">
    <ul class="pager">
      <li class="previous"><a style="color:#DE3B3F" href="../Tienda"><span aria-hidden="true">&larr;</span> Regresar al Catalogo</a></li>
    </ul>
  </nav>
 <?php
 $IDproducto=$_GET["IDP"];
 $verdad=false;
 include '../Conexion.php';
 $sql = "SELECT * FROM Inventario where InventarioID='".$IDproducto."'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
  $verdad=true;
    // output data of each row
  while($row = $result->fetch_assoc()) {
    $Nombre=$row["ProductoNom"];
    $Stock=$row["Stock"];
    $Costo=$row["Precio"];
    $URL=$row["Imagen"];
  }
} else {
  echo "0 results";
}
$conn->close();

if ($verdad==true) {


  if (isset($_SESSION['ID']))
  echo "
  <div class='container'>
  <div class='row'>
  <h1 class='text-center'>Nuestro Producto</h1>
  <div class='col-md-5 col-lg-5 col-lg-offset-1 col-md-offset-1 col-sm-12'>
  <img src='".$URL."' alt='...' class='img-thumbnail'>
  </div>
  <div class=' col-md-5 col-lg-5 col-sm-12 text-md-left '>
  <h2>Nombre: ".$Nombre." </h2>
  <h3>Precio: $".$Costo."</h3>
  <h3>Disponible: ".$Stock."</h3>
  <form id='Fproducto' method='POST' >
  <input type='number' name='idP' value='".$IDproducto."' class='invisible' >
  <input type='number' name='Disp' value='".$Stock."' class='invisible' >
  <input type='number' name='Cantidad'value=1 class='form-control form-control-lg' min='1' max='".$Stock."' value='0'><br><br>
  <button class='btn bg-primary' value='Añadir al Carrito' id='Add' >Añadir al carrito</button>
  <form>
  </div>
  </div>
  </div>
  ";

else
echo "
<div class='container'>
  <div class='row'>
  <h1 class='text-center'>Nuestro Producto</h1>
  <div class='col-md-5 col-lg-5 col-lg-offset-1 col-md-offset-1 col-sm-12'>
  <img src='".$URL."' alt='...' class='img-thumbnail'>
  </div>
  <div class=' col-md-5 col-lg-5 col-sm-12 text-md-left '>
  <h2>Nombre: ".$Nombre." </h2>
  <h3>Precio: $".$Costo."</h3>
  <h3>Disponible: ".$Stock."</h3>
  <h3>!!Necesitas iniciar sesion para comprar</h3>
  <h2><a href='#' data-toggle='modal' data-target='#exampleModal'>Iniciar Sesion</a></h2>
  </div>
  </div>
  </div>

";

}

?>


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
    <script src="../../js/bootbox.min.js"> </script>

</body>

</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#Add').click(function(){
      var datos=$('#Fproducto').serialize();
      $.ajax({
        type:"POST",
        url:"Comprar.php",
        data:datos,
        success:function(r){
          if(r==1){
            bootbox.alert("Compra realizada con exito", function(result){ location.reload();});

          }else{
            bootbox.alert("Error en la compra");
          }
        }
      });

return false;
    });
  });
</script>
