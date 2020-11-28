<?php 
require_once '../controllers/acta.controller.php';
require_once '../models/acta.model.php';

$fechaActual = date('Y-m-d');
$fechaPasado = strtotime ('-6 month', strtotime($fechaActual));
$fechaPasadoDate = date('Y-m-d', $fechaPasado);

$ultimoIngresoEquipo = (new ctrActa);
$respuesta = $ultimoIngresoEquipo -> ctrUltimoIngresoEquipo($fechaPasadoDate);

?>
<style>	
	.headerr {
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
	.stockCritico td {
		width: 13%;
		padding: 2px;
		border: 1px solid black;
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
    <div class="headerr">
		<img class="logo" src='http://sgtaller.duotek.cl/views/dist/img/login.png' alt='' width='150' height="30">
		<span class="fecha">Fecha: <strong><?php echo date("d-m-Y"); ?></strong></span>
	    <h1 class="titulo">Mantenciones Preventivas</h1>
	</div>
    <br>
	
		<div><h4>I. Proximas Mantenciones Preventivas</h4></div>
			<table class="stockCritico" BORDER CELLPADDING=10 CELLSPACING=0>
		    	<tr style="background: #ccc;">
		    		<td style="text-align: center; width: 15%; padding: 3px;"><strong>Empresa</strong></td>
		    		<td style="text-align: center; width: 15%; padding: 3px;"><strong>Centro</strong></td>
		    		<td style="text-align: center; width: 15%; padding: 3px;"><strong>Equipo</strong></td>
		    		<td style="text-align: center; width: 13%; padding: 3px;"><strong>N° Serie</strong></td>
		    		<td style="text-align: center; width: 10%; padding: 3px;"><strong>Contacto</strong></td>
		    		<td style="text-align: center; width: 15%; padding: 3px;"><strong>Telefono</strong></td>
		    		<td style="text-align: center; width: 13%; padding: 3px;"><strong>Ultima Mantenci&oacute;n</strong></td>
		    	</tr>
		    	<?php
		    	foreach ($respuesta as $key => $value) {
		    		
		    		if ($value["fecha_acta"] < $fechaPasadoDate AND count($value["fecha_acta"] < $fechaPasadoDate)>0) {
		    			echo "
							<tr>
								<td style='text-align: center; margin: auto auto;'> ".ucwords(strtolower($value['razon_social']))." </td>
								<td style='text-align: center; margin: auto auto;'> ".ucwords($value['nombre'])." </td>
								<td style='text-align: center; margin: auto auto;'> ".ucwords($value['nomEquipo'])." </td>
								<td style='text-align: center; margin: auto auto;'> ".$value["nSerie"]." </td>
								<td style='text-align: center; margin: auto auto;'> ".ucwords($value['contacto'])." </td>
								<td style='text-align: center; margin: auto auto;'> ".$value["telefono"]." </td>
								<td style='text-align: center; margin: auto auto; color: red;'> ".date("d-m-Y", strtotime($value["fecha_acta"]))." </td>
							</tr>
						";
		    		}  else {
		    			$vacio = 0;
		    		}
				}
			if ($vacio = 0) {
				echo '<div><p>No hay equipos para mantención este mes</div></p>';
			}
		    	?>
		    </table>
		    <br/>
			<?php 
			
			?>
	    
	
	<div class="pie-pag"> 
		<strong>Copyright &copy; 2019 <a href="">Duotek Services</a>.</strong> Todos los derechos reservados. 
		<span class="nombre">
      		Sistema de Gesti&oacute;n Taller
    	</span>
    </div>
</page>