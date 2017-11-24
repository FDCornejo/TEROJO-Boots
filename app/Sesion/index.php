
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
      <link href="../../css/Logo.css" rel="stylesheet">
      <link href="../../font/flaticon.css" rel="stylesheet">
      <link href="../../css/general.css" rel="stylesheet">
   </head>
   <body>
      <?php include "Modal_Sesion.php" ?>
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="flaticon-menu"></span>
               </button>
               <a class="navbar-brand" href="#"> <img class="Logito" src="../../img/logo-peque.png" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="../../"><span class="flaticon-home"></span><br>Home</a></li>
                  <li><a href="../Nosotros"><span class="flaticon-tea-cup"></span><br>Nosotros</a></li>
                  <li><a href="../Carrito"><span class="flaticon-basket"></span><br>Canasto</a></li>
                  <li><a href="../Tienda"><span class="flaticon-teapot"></span><br>Tienda</a></li>
                  <li  class="dropdown active">
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
         <div class="container center-block">
            <form action="_registrar.php" method="post">
               <div class="form-group">
                  <label for="Nombre">Nombre</label>
                  <input required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" type="text" class="form-control" name="nom" id="Nombre" placeholder="Nombre">
               </div>
               <div class="form-group">
                  <label for="Apellido">Apellido</label>
                  <input  required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" type="text" class="form-control" name="ape" id="Apellido" placeholder="Appellido">
               </div>
               <div class="form-group">
                  <label for="Correo">Correo Electronico</label>
                  <input  required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" type="email" class="form-control" name="mail" id="Correo" placeholder="Email">
               </div>
               <div class="form-group">
                  <label for="Calle">Calle</label>
                  <input required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" type="text" class="form-control"  name="rue" id="Calle" placeholder="Calle">
               </div>
               <div class="form-group">
                  <label for="Numero">Numero</label>
                  <input  required pattern="[0-9]*" type="text" class="form-control" name="numb" id="Numero" placeholder="Numero">
               </div>
               <div class="form-group">
                  <label for="Colonia">Colonia</label>
                  <input required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" type="text" class="form-control" name="neight" id="Colonia" placeholder="Colonia">
               </div>
               <div class="form-group">
                  <label for="Codigo Postal">Codigo Postal</label>
                  <input required maxlength="6" minlength="4"  type="text" class="form-control" name="cp" id="Codigo Postal" placeholder="Codigo Postal">
               </div>
               <div class="form-group">
                  <label for="Ciudad">Ciudad</label>
                  <input pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" required type="text" class="form-control" name="ville" id="Ciudad" placeholder="Ciudad">
               </div>
               <div class="form-group">
                  <label for="Estado">Estado</label>
                  <input pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" required type="text" class="form-control" name="etat" id="Estado" placeholder="Estado">
               </div>
               <div class="form-group">
                  <label for="Pais">Pais</label>
                  <input pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" required  type="text" class="form-control" name="pay" id="Pais" placeholder="Pais">
               </div>
               <div class="form-group">
                  <label for="Contraseña">Contraseña</label>
                  <input required pattern=".{6,}" type="password" class="form-control" name="mot" id="Contraseña" placeholder="Contraseña">
               </div>
                <div class="form-group">
                    <img src="captcha.php"><br/>
                    <input  required type="text" class="form-control" name="captcha">
                
                </div>

               <button name="enviar" type="submit" class="btn btn-default">Registrar</button>
               <button type="cancel" class="btn btn-danger">Cancelar</button>
            </form>
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