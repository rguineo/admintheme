<?php

$usuario = (new ctrUsuario);
$respuesta = $usuario->ctrMostrarUsuario();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Gestor de Usuarios</h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div id='page-wrapper'>
        <div class='container-fluid'>
          <button type="button" class="btn bg-purple margin" data-toggle="modal" data-target="#modal-nuevo-usuario">
          <i class="fa fa-plus"></i>  Agregar Usuario</button>
            <div class='row'>
              <div class='col-lg-12'>
                <div class='table-responsive table_usuario'>
                  <table class='table table-striped table-bordered table-hover tabla-usuario' id='dataTables-example'>
                    <thead style='text-align: center; background: #eaeaea;'>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Apellido</th>
                          <th scope="col">Correo</th>
                          <th scope="col">Rol</th>
                          <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php 

                      foreach ($respuesta as $key => $value) {
                        echo "<tr>";
                            echo "<td>".$value["id_usuario"]."</td>";
                            echo "<td>".$value["nombre"]."</td>";
                            echo "<td>".$value["apellido"]."</td>";
                            echo "<td>".$value["user"]."</td>";
                            switch ($value["rol"]) {
                              case '0':
                                echo "<td>Administrador</td>";
                                break;
                              case '1':
                                echo "<td>Usuario</td>";
                                break;

                              case '2':
                                echo "<td>Administracion</td>";
                                break;
                              default:
                                
                                break;
                            }
                          
                            echo "<td><center>";
                            echo "<button href='#' type='button' class='btnEditarUsuario btn btn-sm btn-primary' data-toggle='modal' data-target='#modal-editar-usuario' title='Editar' idUsuario=".$value["id_usuario"]." ><i class='fa fa-edit'></i></button>";
                            // echo "<button href='#' type='button' class='btnEliminarUsuario btn btn-sm btn-danger' id=".$value["id_usuario"]." title='Eliminar'><i class='fa fa-trash'></i></button>";
                            echo "</center></td>";
                          echo "</tr>";
                          }
                        ?> 


                        </tbody>
                    </table>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>