<?php 
require_once "../controllers/informes.controller.php";
require_once "../controllers/cliente.controller.php";
require_once "../controllers/centros.controller.php";
require_once "../controllers/acta.controller.php";
require_once "../controllers/terrenos.controller.php";
require_once "../models/informe.model.php";
require_once "../models/cliente.model.php";
require_once "../models/centros.model.php";
require_once "../models/acta.model.php";
require_once "../models/terrenos.model.php";
$buscarCliente =(new ctrCliente);
$buscarCentro = (new ctrCentros);
$buscarActaEquipo = (new ctrActa);
$buscarTerreno = (new ctrTerrenos);
$respCliente = $buscarCliente -> ctrBuscarCliente($idEmpresa);
$respCentro = $buscarCentro -> ctrBuscarCentrosHis($idEmpresa);
$respEquipo = $buscarActaEquipo -> ctrbuscarActaHis($idEmpresa);
$respTerreno = $buscarTerreno -> ctrBuscarterrenoHis($idEmpresa);
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
	.empresaDatos td {
		width: 35%;
	}
	.centroDatos td {
		width: 19%;
		border: 1px solid black;
		padding: 5px;
	}
	.equipoDatos td {
		width: 24%;
		border: 1px solid black;
		padding: 5px;
	}
	.terrenoDatos td {
		width: 24%;
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
</style> 
<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm"> 
    <div class="header">
		<img class="logo" src='http://sgtaller.duotek.cl/views/dist/img/login.png' alt='' width='150' height="30">
		<span class="fecha">Fecha: <strong><?php echo date("d/m/y"); ?></strong></span>
	    <h1 class="titulo">Informe Cliente</h1>
	</div>
    <br>
	
		<div><h4>I. Datos Generales</h4></div>
	    <table class="empresaDatos" BORDER CELLPADDING=10 CELLSPACING=0>
	    	<?php
	    	foreach ($respCliente as $key => $value) {
				echo "
					<tr>
						<td> <strong>Nombre Razon/Social:</strong> </td>
						<td>".$value["razon_social"]."</td>
					</tr>
					<tr>
						<td> <strong>RUT:</strong> </td>
						<td>".$value["rut"]."</td>
					</tr>
					<tr>
						<td> <strong>Giro:</strong> </td>
						<td>".$value["giro"]."</td>
					</tr>
					<tr>
						<td> <strong>Representante:</strong> </td>
						<td>".$value["contacto"]."</td>
					</tr>
					<tr>
						<td> <strong>Fono:</strong> </td>
						<td>".$value["nfono"]."</td>
					</tr>
				";
			}

	    	?>
	    </table>
	    <br/>
	    <div><h4>II. Datos Centro</h4></div>
	    <?php 
	    if (count($respCentro) > 0) {
	    	echo '<table class="centroDatos" BORDER CELLPADDING=10 CELLSPACING=0>';
	    		echo '<tr>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Nombre</strong> </td>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Ciudad</strong> </td>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Ubicación</strong> </td>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Resposable</strong> </td>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Fono</strong> </td>';
	    		echo '</tr>';
    		foreach ($respCentro as $key => $value) {
    			echo '<tr>';
    				echo "<td>".$value["nombre"]."</td>";
    				echo "<td>".$value["nombre_ciudad"]."</td>";
    				echo "<td>".$value["direccion"]."</td>";
    				echo "<td>".$value["contacto"]."</td>";
    				echo "<td>".$value["telefono"]."</td>";
    			echo '</tr>';
    		}
    		echo '</table>';
	    } else {
	    	echo '<div class="respuestaTaller">No hay Centros Asociado</div>';
	    }
	    ?>
	    <br>
	    <div><h4>III. Datos Equipos</h4></div>
	    <?php 
	    if (count($respEquipo) > 0) {
	    	echo '<table class="equipoDatos" BORDER CELLPADDING=10 CELLSPACING=0>';
	    		echo '<tr>';
	    			echo '<td bgcolor="#67C3D5"> <strong>N° Serie</strong> </td>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Nombre</strong> </td>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Centro</strong> </td>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Última Mantención</strong> </td>';
	    		echo '</tr>';
    		foreach ($respEquipo as $key => $value) {
    			echo '<tr>';
    				echo "<td>".$value["nSerie"]."</td>";
    				echo "<td>".$value["nomEquipo"]."</td>";
    				echo "<td>".$value["nombre"]."</td>";
    				echo "<td>".date("d-m-Y", strtotime($value["fechaIngreso"]))."</td>";
    			echo '</tr>';
    		}
    		echo '</table>';
	    } else {
	    	echo '<div class="respuestaActaEquipo">No hay Equipos Asociado</div>';
	    }
	    ?>
	    <br>
	    
	    	<div><h4>IV. Mantención en Terreno</h4></div>
		    <?php 
		    if (count($respTerreno) > 1) {
		    	echo '<table class="terrenoDatos" BORDER CELLPADDING=10 CELLSPACING=0>';
			    	echo '<tr>';
						echo '<td bgcolor="#67C3D5"> <strong>N° Serie</strong> </td>';
						echo '<td bgcolor="#67C3D5"> <strong>Equipo</strong> </td>';
						echo '<td bgcolor="#67C3D5"> <strong>Centro</strong> </td>';
						echo '<td bgcolor="#67C3D5"> <strong>Responsable</strong> </td>';
					echo '</tr>';
			    foreach ($respTerreno as $key => $value) {
					echo "<tr>";
						echo "<td>".$value["nSerie"]."</td>";
						echo "<td>".$value["nomEquipo"]."</td>";
						echo "<td>".$value["nombre"]."</td>";
						echo "<td>".$value["responsable"]."</td>";
					echo "</tr>";
				}
				echo "</table>";
			}else {
		    	echo '<div class="respuestaTerreno">No hay mantenciones en Terreno</div>';
		    }
		    ?>
	    
	
	<div class="pie-pag"> 
		<strong>Copyright &copy; 2019 <a href="">Duotek Services</a>.</strong> Todos los derechos reservados. 
		<span class="nombre">
      		Sistema de Gestión Taller
    	</span>
    </div>
</page>

