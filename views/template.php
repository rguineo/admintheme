
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminCRM | Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- <link rel="stylesheet" href="views/dist/css/estilos.css">
  <link rel="stylesheet" href="views/dist/css/editor.css"> -->
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed login-page">
  <?php

    if ( isset($_SESSION["autenticar"]) && $_SESSION["autenticar"] == "ok" ) {
      if ( $_SESSION["rol"] == 1 ){
        include "views/modulos/header.php";
        include "views/modulos/main-sidebar.php";

      } else if ( $_SESSION["rol"] == 2 ){
        include "views/modulos/header.php";
        include "views/modulos/main-sidebar.php";
      
      } else if ( $_SESSION["rol"] == 3 ){
        include "views/modulos/header.php";
        include "views/modulos/main-sidebar.php";
      } 


      if( isset($_GET["ruta"]) ) {
        
        $enrutar = new ControllerEnrutamiento();
        $enrutar -> enrutamiento(); 
        include "views/modulos/modales/modal-".$_GET["ruta"].".php";

      } else {
        include "views/modulos/home.php";
      }
        include "views/modulos/footer.php";
        
    } else {
        include "views/modulos/login.php";
    }
  ?>

<!-- <script src="views/bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="views/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="views/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="views/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="views/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="views/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="views/plugins/raphael/raphael.min.js"></script>
<script src="views/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="views/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="views/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="views/dist/js/pages/dashboard2.js"></script>


<!-- Script Personales -->
<script src="views/dist/js/jquery.Rut.js"></script>
<script src="dist/js/recursos.js"></script>

<script src="views/js/usuario.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.11/dist/sweetalert2.all.min.js"></script>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/funnel.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


<!-- Grafico Funnel (embudo) -->
<script src="views/js/funnel.js" type="text/javascript"></script>

<script src="views/js/cobros.js" type="text/javascript"></script>


</div>
</body>
</html>