<?php
require_once "controladores/formulario_controlador.php";
require_once "modelos/formulario_modelo.php";
?>

<!-- Modal -->
<div class="modal fade" id="crearUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-plus mr-1"></i>Crear Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" class="p-2">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="CrearEmail">Email</label>
              <input type="email" class="form-control" placeholder="Escriba el correo" id="CrearEmail" name="CrearEmailUsuarios" required>
            </div>
            <div class="form-group col-md-6">
              <label for="CrearClave">Contraseña</label>
              <input type="password" class="form-control" placeholder="Escriba la clave" id="CrearClave" name="CrearClaveUsuarios" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="CrearEstado">Estado</label>
              <input type="text" class="form-control" placeholder="Escriba el estado" id="CrearEstado" name="CrearEstadoUsuarios" required>
            </div>
          </div>
          <input type="hidden" name="CrearId" id="CrearId">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary GuardarUsuario" data-dismiss="modal">Guardar</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
        <?php
        $registro = ControladorFormulario::ctrCrearRegistrosUsuarios();
        if ($registro == "OK") {
          echo '<br><div class="alert alert-success">El usuario ha sido creado con éxito.</div>';
        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php
if (isset($_GET["id"])) {
  $id_usuarios = $_GET["id"];

  $usuarios = ControladorFormulario::ctrSeleccionarRegistro($id_usuarios);
}
?>
<!--Modal Editar Usuarios-->
<div class="modal fade" id="editarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-edit mr-1"></i>Editar Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" class="p-2" action="modelos/formulario_modelo.php">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="EditarEmail">Email</label>
              <input type="email" class="form-control" id="EditarEmail" placeholder="Escriba el correo" name="EditarEmailUsuarios" value="<?php echo $usuarios["email"]; ?>" required>


            </div>
            <div class="form-group col-md-6">
              <label for="EditarClave">Contraseña</label>
              <input type="password" class="form-control" id="EditarClave" placeholder="Escriba la clave" name="EditarClaveUsuarios" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="EditarEstado">Estado</label>
              <select id="EditarEstado" class="form-control" name="EditarEstadoUsuarios" value="<?php echo $usuarios["estado"]; ?>" required>
                <option selected>Seleccionar..</option>
                <option>ACTIVO</option>
                <option>INACTIVO</option>
              </select>
            </div>
          </div>
          <input type="hidden" name="EditarPassword" id="EditarPassword" value="<?php echo $usuarios["clave"]; ?>">
          <input type="hidden" name="EditarId" id="EditarId" value="<?php echo $usuarios["id_usuarios"]; ?>">

        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Guardar Cambios</button>
        <?php
        $registro = ControladorFormulario::ctrActualizarRegistro();
        if ($registro == "OK") {
          echo '<br><div class="alert alert-success">El usuario ha sido actualizado con éxito.</div>';
        }
        ?>
      </div>
    </div>
  </div>
</div>