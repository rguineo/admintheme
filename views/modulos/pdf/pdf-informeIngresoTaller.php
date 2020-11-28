<?php 
require_once "../controllers/acta.controller.php";
require_once "../models/acta.model.php";
$buscarActa = (new ctrActa);
$respuesta = $buscarActa -> ctrBuscarNuevaActaIngreso();

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
	.equipoDatos td {
		width: 29%;
	}
	.empresaDatos td {
		width: 19%;
		padding: 7px;
	}
	.equipoTerreno td {
		width: 16%;
		border: 1px solid black;
		padding: 5px;
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
	.hr {
		
		width: 90%;
	}
	.fin-acta {
		width: 100%;
		text-align: center;
	}
</style> 

<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm"> 
    <div class="header">
		<img class="logo" src='http://sgtaller.duotek.cl/views/dist/img/login.png' alt='' width='150' height="30">
		<span class="fecha">Fecha: <strong><?php echo date("d/m/y"); ?></strong></span>
		    		
	    <h1 class="titulo">Acta Recepción Equipos</h1>
	</div>
    <br>
	<div class="section">
		<hr>
		<div><h4>I. Datos Generales</h4></div>

	    <table class="empresaDatos" BORDER CELLPADDING=10 CELLSPACING=0>
	    	<?php
	    	foreach ($respuesta as $key => $value) {
				echo "
					<tr>
						<td> <strong>Cliente:</strong> </td>
						<td>".$value["razon_social"]."</td>
						<td></td>
						<td> <strong>Origen:</strong> </td>
						<td>".$value["nombre"]."</td>	

					</tr>
					<tr>
						<td> <strong>Contacto:</strong> </td>
						<td>".$value["contacto"]."</td>
						<td></td>
						<td> <strong>Guia Despacho:</strong> </td>
						<td>".$value["guiaDespachoActa"]."</td>
					</tr>
				";
			}

	    	?>
	    </table>
	    <br>
	    <hr>
	    <div><h4>II. Datos Equipo</h4></div>

	    <table class="empresaDatos" BORDER CELLPADDING=10 CELLSPACING=0>
	    	<?php
	    	foreach ($respuesta as $key => $value) {
				echo "
					<tr>
						<td> <strong>Equipo:</strong> </td>
						<td>".$value["nomEquipo"]."</td>
						<td></td>
						<td> <strong>N° Serie:</strong> </td>
						<td>".$value["nSerie"]."</td>
					</tr>
					<tr>
						<td> <strong>Modelo:</strong> </td>
						<td>".$value["modelo"]."</td>
						<td></td>
						<td> <strong>Marca:</strong> </td>
						<td>".$value["marca"]."</td>
					</tr>
					<tr>
						<td> <strong>Accesorios:</strong> </td>
						<td>".$value["accesoriosActa"]."</td>
						<td></td>
						<td> <strong>Observaciones:</strong> </td>
						<td>".$value["obsevacionActa"]."</td>
					</tr>
				";
			}
	    	?>
	    </table>
	    <br>
	    <hr>
		<br>
	    <table class="empresaDatos" BORDER CELLPADDING=10 CELLSPACING=0>
	    	<?php
	    	foreach ($respuesta as $key => $value) {
				echo "
					<tr>
						<td> <strong>Técnico:</strong> </td>
						<td><u>".$value["nomTecnico"]."</u></td>
						<td></td>
						<td> <strong>Transportista:</strong> </td>
						<td>".$value["nomTransporte"]."</td>
					</tr>
					<tr>
						<td> <strong>RUT:</strong> </td>
						<td>___________________</td>
						<td></td>
						<td> <strong>RUT:</strong> </td>
						<td>___________________</td>
					</tr>
					<tr>
						<td> <strong>Firma:</strong> </td>
						<td>___________________</td>
						<td></td>
						<td> <strong>Firma:</strong> </td>
						<td>___________________</td>
					</tr>
				";
			}

	    	?>
	    </table>
	    <br>
	    <br>
	    <hr>
	    <br/>
	    <div class="fin-Acta">Los Pelues 9, Manzana E, Puerto Montt. Chile</div>
	    <div class="fin-Acta">www.duotek.cl</div>
	    
	    
	</div>
	<div class="pie-pag"> 
		<strong>Copyright &copy; 2019 <a href="">Duotek Services</a>.</strong> Todos los derechos reservados. 
		<span class="nombre">
      		Sistema de Gestión Taller
    	</span>
    </div>
</page>



