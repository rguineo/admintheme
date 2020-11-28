<?php 
require_once "../controllers/acta.controller.php";
require_once "../controllers/terrenos.controller.php";

require_once "../models/acta.model.php";
require_once "../models/terrenos.model.php";
$respuestaActa = (new ctrActa) -> ctrBuscarPorFecha($fecha1, $fecha2);
$respuestaTerreno = (new ctrTerrenos) -> ctrBuscarTerrenoPorFecha($fecha1, $fecha2);

?>
<style>	
	.header {
		width: 100%;
	}
	.logo{
		margin-left: 20px;
		margin-top: 20px;
	}
	.fecha {
		position: absolute;
		top: 45px;
		right: 0;
		text-align: right;
		width: 20%;
	}
	.titulo {
		text-align: center;
	}
	.section {
		margin: 0; 
	}	
	.stockCritico td {
		border: 1px solid black;
		width: 15%;
	}
	.pie-pag {
		width: 100%;
		text-align: center;
		position: absolute;
		bottom: 0;
	}
	.nombre {
		margin-left: 35px;
	}
</style> 
<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm"> 
    <div class="header">
		<img class="logo" src='http://sgtaller.duotek.cl/views/dist/img/login.png' alt='' width='150' height="30">
		<span class="fecha">Fecha: <strong><?php echo date("d/m/y"); ?></strong></span>
	    <h1 class="titulo">Informe</h1>
	</div>
    <br>
	
		<div><h4>I. Informaci&oacute;n General</h4></div>
		<p style="text-align: justify;">Entre las fechas <?php echo date("d-m-Y", strtotime($fecha1)); ?> y  <?php echo date("d-m-Y", strtotime($fecha2)); ?>, hicieron ingreso a taller <?php echo count($respuestaActa); ?> equipos, adem&aacute;s se realizaron <?php echo count($respuestaTerreno); ?> actividades en terreno.</p>
		<div><h4>II. Ingreso Taller</h4></div>
	    <table class="stockCritico" BORDER CELLPADDING=10 CELLSPACING=0 >
	    	<tr style="background: #ccc; width: 100%;">
	    		<td style="width: 25%; display: auto;"><strong>Equipo</strong></td>
	    		<td style="width: 20%; display: auto;"><strong>N° Serie</strong></td>
	    		<td style="width: 20%; display: auto;"><strong>Empresa</strong></td>
	    		<td style="width: 20%; display: auto;"><strong>Centro</strong></td>
	    		<td style="width: 15%; display: auto;"><strong>Fecha Ingreso</strong></td>
	    	</tr>
	    	<?php
	    	foreach ($respuestaActa as $key => $value) {
	    		echo "
	    			<tr>
	    				<td>".ucwords($value['nomEquipo'])."</td>
	    				<td>".ucwords($value['nSerie'])."</td>
	    				<td>".ucwords($value['razon_social'])."</td>
	    				<td>".ucwords($value['nombre'])."</td>
	    				
	    				
	    				<td>".date("d-m-Y", strtotime($value['fechaIngreso']))."</td>
	    			</tr>"
	    		;
	    	}
	    	
	    	?>
	    </table>
	    <br/>
	    <div><h4>III. Informaci&oacute;n Terreno</h4></div>
	    <table class="stockCritico" BORDER CELLPADDING=10 CELLSPACING=0>
	    	<tr style="background: #ccc;">
	    		<td style="width: 20%; display: auto;"><strong>Centro</strong></td>
	    		<td style="width: 20%; display: auto;"><strong>Empresa</strong></td>
	    		<td style="width: 25%; display: auto;"><strong>Equipo</strong></td>
	    		<td style="width: 20%; display: auto;"><strong>N° Serie</strong></td>
	    		<td style="width: 15%; display: auto;"><strong>Fecha Terreno</strong></td>
	    	</tr>
	    	<?php
	    	foreach ($respuestaTerreno as $key => $value) {
	    		echo "
	    			<tr>
	    				<td>".ucwords($value['nombre'])."</td>
	    				<td>".ucwords($value['razon_social'])."</td>
	    				<td>".ucwords($value['nomEquipo'])."</td>
	    				<td>".ucwords($value['nSerie'])."</td>
	    				<td>".date("d-m-Y", strtotime($value['fechaTerreno']))."</td>
	    			</tr>"
	    		;
	    	}
	    	
	    	?>
	    </table>
	
	<div class="pie-pag" style="margin-top: 20px;"> 
		<br>
		<strong>Copyright &copy; 2019 <a href="">Duotek Services</a>.</strong> Todos los derechos reservados. 
		<span class="nombre">
      		Sistema de Gesti&oacute;n Taller
    	</span>
    </div>
</page>

