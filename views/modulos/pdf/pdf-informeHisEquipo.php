<?php 
require_once "../controllers/informes.controller.php";
require_once "../models/informe.model.php";

$buscarEquipo = (new ctrInformes);
$respuesta = $buscarEquipo -> ctrVerEquipo($idEquipo);
$respTaller = $buscarEquipo -> ctrVerHistoriaTaller($idEquipo);
$respTerreno = $buscarEquipo -> ctrVerHistoriaTerreno($idEquipo);
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
	.equipoTaller td {
		width: 19%;
		border: 1px solid black;
		padding: 5px;
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
</style> 

<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm"> 
    <div class="header">
		<img class="logo" src='http://sgtaller.duotek.cl/views/dist/img/login.png' alt='' width='150' height="30">
		<span class="fecha">Fecha: <strong><?php echo date("d/m/y"); ?></strong></span>
	    <h1 class="titulo">Informe Equipo</h1>
	</div>
    <br>
	
		<div><h4>I. Datos Generales</h4></div>

	    <table class="equipoDatos" BORDER CELLPADDING=10 CELLSPACING=0>
	    	<?php
	    	foreach ($respuesta as $key => $value) {
				echo "
					<tr>
						<td> <strong>Nombre Equipo:</strong> </td>
						<td>".$value["nomEquipo"]."</td>
					</tr>
					<tr>
						<td> <strong>N° Serie:</strong> </td>
						<td>".$value["nSerie"]."</td>
					</tr>
					<tr>
						<td> <strong>Marca:</strong> </td>
						<td>".$value["marca"]."</td>
					</tr>
					<tr>
						<td> <strong>Modelo:</strong> </td>
						<td>".$value["modelo"]."</td>
					</tr>
					<tr>
						<td> <strong>Empresa:</strong> </td>
						<td>".$value["razon_social"]."</td>
					</tr>
				";
			}

	    	?>
	    </table>
	    <br/>
	    <div><h4>II. Ingresos a Taller</h4></div>
	    <?php 
	    if (count($respTaller) > 0) {
	    	echo '<table class="equipoTaller" BORDER CELLPADDING=10 CELLSPACING=0>';
	    		echo '<tr>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Fecha Ingreso:</strong> </td>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Observaciones:</strong> </td>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Accesorios</strong> </td>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Guia Despacho</strong> </td>';
	    			echo '<td bgcolor="#67C3D5"> <strong>Transportista</strong> </td>';
	    		echo '</tr>';
    		foreach ($respTaller as $key => $value) {
    			echo '<tr>';
    				echo "<td>".date("d-m-Y", strtotime($value["fechaIngreso"]))."</td>";
    				echo "<td>".$value["obsevacionActa"]."</td>";
    				echo "<td>".$value["accesoriosActa"]."</td>";
    				echo "<td>".$value["guiaDespachoActa"]."</td>";
    				echo "<td>".$value["nomTransporte"]."</td>";
    			echo '</tr>';
    		}
    		echo '</table>';
	    } else {
	    	echo '<div class="respuestaTaller">No hay Mantenciones en Taller</div>';
	    }
	    ?>
	    <br>
	    <nobreak>
	    	<div><h4>III. Mantención en Terreno</h4></div>
		    <?php 
		    if (count($respTerreno) > 0) {
		    	echo '<table class="equipoTerreno" BORDER CELLPADDING=10 CELLSPACING=0>';
			    	echo '<tr>';
						echo '<td bgcolor="#67C3D5"> <strong>Fecha Terreno</strong> </td>';
						echo '<td bgcolor="#67C3D5"> <strong>Responsable</strong> </td>';
						echo '<td bgcolor="#67C3D5"> <strong>Centro</strong> </td>';
						echo '<td bgcolor="#67C3D5"> <strong>Trabajo</strong> </td>';
						echo '<td bgcolor="#67C3D5"> <strong>Recomendaciones</strong> </td>';
						echo '<td bgcolor="#67C3D5"> <strong>Repuestos</strong> </td>';
					echo '</tr>';
			    foreach ($respTerreno as $key => $value) {
					echo "<tr>";
						echo "<td>".date("d-m-Y", strtotime($value["fechaTerreno"]))."</td>";
						echo "<td>".$value["responsable"]."</td>";
						echo "<td>".$value["nombre"]."</td>";
						echo "<td>".$value["trabajo"]."</td>";
						echo "<td>".$value["recomendaciones"]."</td>";
						echo "<td>".$value["repuestos"]."</td>";
					echo "</tr>";
				}
				echo "</table>";
			}else {
		    	echo '<div class="respuestaTerreno">No hay mantenciones en Terreno</div>';
		    }
		    ?>
	    </nobreak>
	    
	
	<div class="pie-pag"> 
		<strong>Copyright &copy; 2019 <a href="">Duotek Services</a>.</strong> Todos los derechos reservados. 
		<span class="nombre">
      		Sistema de Gestión Taller
    	</span>
    </div>
</page>



