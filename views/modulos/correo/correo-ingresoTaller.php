<div style="width: 80%; margin-left: 10px; ">
    <br>
    <div class="header" style="width: 60%;">
		<img class="logo" src='http://sgtaller.duotek.cl/views/dist/img/login.png' alt='' width='150' height="30" style="margin-left: 20px; margin-top: 20px;">    		
	    <h3 class="titulo" style="text-align: center; color: #000;">Orden de Trabajo</h3>
	</div>
    <div class="section" style="margin: 0;">
    <br>
        <div><h4 style="margin-left: 10px; color: #000;">I. Datos Generales</h4></div>
        <table class="empresaDatos" style="width: 70%; margin: 0 10px; color: #000;">
            <tr>
                <td style="width: 30%; color: #000;"> <strong>Cliente:</strong> </td>
                <td style="width: 30%; color: #000;"><?php echo $empresa; ?></td>
            </tr>
            <tr>
                <td style="width: 30%; color: #000;"> <strong>Centro:</strong> </td>
                <td style="width: 30%; color: #000;"><?php echo $centro; ?></td>
            </tr>
            <tr>
                <td style="width: 30%; color: #000;"> <strong>Equipo:</strong> </td>
                <td style="width: 30%; color: #000;"><?php echo $equipo; ?></td>
            </tr>
            <tr>
                <td style="width: 30%; color: #000;"> <strong>N° Serie:</strong> </td>
                <td style="width: 30%; color: #000;"><?php echo $nSerie; ?></td>
            </tr>
            <tr>
                <td style="width: 30%; color: #000;"> <strong>Guia Despacho:</strong> </td>
                <td style="width: 30%; color: #000;"><?php echo $guiaDespacho; ?></td>
            </tr>
	    </table>
	    <br/>
        <div><h4 style="margin-left: 10px; color: #000;">II. Información Equipo a Reparar</h4></div>
        <table class="empresaDatos" style="width: 70%; margin: 0 10px; color: #000;">
            <tr>
                <td style="width: 30%; color: #000;"> <strong>Observaciones:</strong> </td>
                <td style="width: 30%; color: #000;"><?php echo $observacion; ?></td>
            </tr>
            <tr>
                <td style="width: 30%; color: #000;"> <strong>Accesorios:</strong> </td>
                <td style="width: 30%; color: #000;"><?php echo $accesorios; ?></td>
            </tr>
            <tr>
                <td style="width: 30%; color: #000;"> <strong>Técnico Asignado:</strong> </td>
                <td style="width: 30%; color: #000;"><?php echo $tecnico; ?></td>
            </tr>
	    </table>
	    <br/>
        <br>                            
        <p style='font-size: 13px; color: #000; margin-left: 10px;'>Atentamente</p>
        <p style='font-size: 13px; color: #000; margin-left: 10px; text-transform: capitalize;'><?php echo $user; ?></p>
        <p style='font-size: 13px; color: #000; margin-left: 10px;'><?php echo $fecha; ?></p>
        <br>
        <div>
            <img class="logo" src='http://sgtaller.duotek.cl/views/dist/img/login.png' alt='' width='150' height="30">  
        </div>   
        <br>  
    </div>
</div>