<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Tea Rouge</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
  <link href="https://fonts.googleapis.com/css?family=Lobster|Merriweather" rel="stylesheet">
  <link href="css/Logo.css" rel="stylesheet">
  <link href="font/flaticon.css" rel="stylesheet">
  <link href="css/general.css" rel="stylesheet">


</head>

<body>

  <?php include "app/Sesion/Modal_Sesion2.php" ?>


  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="flaticon-menu"></span>
        </button>
        <a class="navbar-brand" href="#"> <img class="Logito" src="img/logo-peque.png" alt=""></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#"><span class="flaticon-home"></span><br>Home</a></li>
          <li><a href="app/Nosotros"><span class="flaticon-tea-cup"></span><br>Nosotros</a></li>
          <li><a href="app/Carrito"><span class="flaticon-basket"></span><br>Canasto</a></li>
          <li><a href="app/Tienda"><span class="flaticon-teapot"></span><br>Tienda</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="flaticon-user"><br> Usuario</span></a>
            <ul class="dropdown-menu">
              <li><a href="#" data-toggle="modal" data-target="#exampleModal">Iniciar Sesion</a></li>
            </ul>
          </li>
        </ul>

      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <main>
    <section class="jumbotron tover text-center">
      <div class="container ">
        <h1 class="Great  jumbotron-heading ELobster" style="color: white;">Tea Rouge</h1>
        <p class="lead text-muted EMerri Great">Tu Tea Necesitas <br> DisfrutaTea</p>
        <p>
          <a href="#" class="btn TREED TREED">Visita nuestra tienda</a>

        </p>
      </div>
    </section>
    <div class="container-fluid">
      <div class="row text-center">
        <h1 class="Nuevo">Lo Nuevo</h1>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/tp2.jpg" alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn TREED" role="button">Button</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/tp2.jpg" alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn TREED" role="button">Button</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/tp2.jpg" alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn TREED" role="button">Button</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/tp2.jpg" alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn TREED" role="button">Button</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <h1 class="Promo">Promocion</h1>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/tp2.jpg" alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn TREED" role="button">Button</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/tp2.jpg" alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn TREED" role="button">Button</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/tp2.jpg" alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn TREED" role="button">Button</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/tp2.jpg" alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn TREED" role="button">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <h1>Opiniones</h1>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="img/chat.png" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            <p><a href="#" class="btn TREED" role="button">Button</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="img/chat.png" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            <p><a href="#" class="btn TREED" role="button">Button</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-9 text-center">
        <form class="" action="index.html" method="post">
          <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Correo Electronico</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Correo">
  </div>
  </div>
  <div>
  <button type="submit" class="btn btn-default TREED">Suscribir</button>
    
  </div>
</form>
        </form>

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

  <script src="js/bootstrap.min.js"></script>
</body>

</html>
