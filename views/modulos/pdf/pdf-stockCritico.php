<?php 
require_once '../controllers/stock.controller.php';
require_once '../models/stock.modelo.php';
$stockCritico = (new ctrStock);
$respuesta = $stockCritico -> ctrStockCritico();
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
		width: 24%;
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
    <div class="header">
		<img class="logo" src='http://sgtaller.duotek.cl/views/dist/img/login.png' alt='' width='150' height="30">
		<span class="fecha">Fecha: <strong><?php echo date("d/m/y"); echo date("H:i:s"); ?></strong></span>
	    <h1 class="titulo">Stock Cr&iacute;tico</h1>
	</div>
    <br>
	
		<div><h4>I. Productos en Stock Cr&iacute;tico</h4></div>
	    <table class="stockCritico" BORDER CELLPADDING=10 CELLSPACING=0>
	    	<tr style="background: #ccc;">
	    		<td style="width: 50%; padding: 3px;"><strong>Producto</strong></td>
	    		<td style="text-align: center; width: 20%; padding: 3px;"><strong>Stock Cr&iacute;tico</strong></td>
	    		<td style="text-align: center; width: 20%; padding: 3px;"><strong>Cantidad</strong></td>
	    	</tr>
	    	<?php
	    	foreach ($respuesta as $key => $value) {
				echo "
					<tr>
						<td> ".ucwords($value['nombre'])." </td>
						<td style='text-align: center;'> ".$value["ncritico"]." </td>
						<td style='text-align: center; color: red;'> ".$value["cantidad"]." </td>
					</tr>
				";
			}
	    	?>
	    </table>
	    <br/>
	
	<div class="pie-pag"> 
		<strong>Copyright &copy; 2019 <a href="">Duotek Services</a>.</strong> Todos los derechos reservados. 
		<span class="nombre">
      		Sistema de Gesti&oacute;n Taller
    	</span>
    </div>
</page>

