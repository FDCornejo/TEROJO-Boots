<?php
  
      $buscar = $_POST['b'];
        
      if(!empty($buscar)) {
            buscar($buscar);
      }
        
      function buscar($b) {



  include '../Conexion.php';
      $sql = "SELECT * FROM Inventario where ProductoNom like '%".$b."%'";
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
        echo "<h1 class='text-center'>No tenemos Productos con ese Nombre por Ahora</h1>";
      }

      $conn->close();
  }
        
?>