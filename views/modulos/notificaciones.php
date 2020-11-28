<?php 

$id = $_SESSION["id"];

$respuesta = (new CtrNotificaciones)->ctrBuscarNotificaciones($id);

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Notificaciones</h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Notificaciones</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div id='page-wrapper'>
        <div class='container-fluid'>
<!--           <button type="button" class="btn bg-purple margin" data-toggle="modal" data-target="#modal-nuevo-cliente">
          <i class="fa fa-plus"></i>  Agregar Empresa</button> -->
          <div class='row'>
            <div class='col-lg-offset-0 col-lg-12'>
              <div class='table-responsive table_productos'>
                <table class='table table-striped table-bordered table-hover tabla-usuarios table-dark' id='dataTables-example'>

                  <thead style='text-align: center; background: #eaeaea;'>
                      <tr>
                          <th style='text-align: center;'> #</th>
                          <th style='text-align: center;'> Fecha Notificacion</th>
                          <th style='text-align: center;'> # OT</th>
                          <th style='text-align: center;'> Empresa - Cliente</th>

                          <th style='text-align: center;'> Emitido </th>
                          <th style='text-align: center;'> Fecha Lectura </th>
                          <th style='text-align: center;'> Leído </th>
                      </tr>
                  </thead>

                  <tbody>
                  <?php 
                   
                   foreach ( $respuesta as $key => $value ) {
                    echo "<tr style='text-align: center;'>";
                      echo "<td>".$value['id_notificacion']."</td>";
                      echo "<td>".$value['fecha_notificacion']."</td>";
                      echo "<td>".$value['folio']."</td>";
                      echo "<td>".strtoupper($value['razon_social'])."</td>";

                      echo "<td>".$value['nombre']." ".$value['apellido']."</td>";
                      echo "<td>".$value['fecha_lectura']."</td>";
                      echo "<td><center>";
                        if ($value['estado_notificacion'] == 1 ){
                          echo "<a type='button' idOrden='".$value['id_ordentrabajo']."' class='btnVerOrden' href='#' data-toggle='modal' data-target='#modal-ver-orden' title='Ver OT'><i class='fa fa-reply' style='color: black;'></i></a>";
                        } else {

                          echo "<a type='button' idOrden='".$value['id_ordentrabajo']."' class='btnVerOrden' href='#' data-toggle='modal' data-target='#modal-ver-orden' title='Ver OT'><i class='fas fa-check-square' style='color: green' title='Leído'></i></a>";
                        }
                        
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