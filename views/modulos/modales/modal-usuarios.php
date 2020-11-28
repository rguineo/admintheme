<div class="modal fade" id="modal-nuevo-usuario"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-nuevo-usuario">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Correo</label>
                    <div class="col-sm-8">
                        <input type="email" id="correo" class="form-control" placeholder="usuario@ejemplo.cl" required name="correoUsuario">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="clave" class="form-control" placeholder="****" required name="passUsuario">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                        <input type="text" id="nombre" class="form-control" placeholder="Juan"  required name="nombreUsuario">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Apellido</label>
                    <div class="col-sm-8">
                        <input type="text" id="apellido" class="form-control" placeholder="Perez"  required name="apellidoUsuario">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Rol Usuario</label>
                    <div class="col-sm-8">
                    <select name="rolUsuario" id="rolUsuario" class="form-control">
                        <option value="" selected> Elija el Rol de Usuario</option>
                        <option value="0">Administrador</option>
                        <option value="1">Usuario</option>
                        <option value="2">Administracion</option>

                    </select>

                    </div>
                </div> 

                <input type="hidden" name="tipoOperacion" value="nuevoUsuario">

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>


<!-- Editar Usuario -->
<div class="modal fade" id="modal-editar-usuario"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-editar-usuario">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Correo</label>
                    <div class="col-sm-8">
                        <input type="email" id="correo" class="form-control" placeholder="usuario@ejemplo.cl" required name="correoUsuario">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="clave" class="form-control" placeholder="****" required name="passUsuario">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                        <input type="text" id="nombre" class="form-control" placeholder="Juan"  required name="nombreUsuario">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Apellido</label>
                    <div class="col-sm-8">
                        <input type="text" id="apellido" class="form-control" placeholder="Perez"  required name="apellidoUsuario">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Rol Usuario</label>
                    <div class="col-sm-8">
                    <select name="ErolUsuario" id="ErolUsuario" class="form-control">
                        <option value="" selected> Elija el Rol de Usuario</option>
                        <option value="0">Administrador</option>
                        <option value="1">Usuario</option>
                        <option value="2">Administracion</option>
                    </select>

                    </div>
                </div> 

                <input type="hidden" name="tipoOperacion" value="actualizarUsuario">
                <input type="hidden" name="idUsuario" value="">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>
