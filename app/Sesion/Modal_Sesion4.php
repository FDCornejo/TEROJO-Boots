   <!-- Modal 3 -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center " id="exampleModalLabel">Iniciar Sesion </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form  class="form-group" action="../Sesion/_sesion.php" method="post">
            <div>
              <label for="exampleInputEmail1">Correo Electronico</label>
              <input type="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" name="Correo" class="form-control"  placeholder="Correo">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña </label>
              <input type="password" name="mot" class="form-control"  placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-default">Iniciar Sesion</button>

          <a href="../Sesion/"><h3>¿No estas Registrado?</h3></a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
      </div>
    </div>
  </div>

