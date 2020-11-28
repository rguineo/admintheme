$(document).ready(function() {

    // Rutina para validar RUT Chileno
    $('#rut-cliente').Rut({
        on_error: function(){ 
        swal({
                    type: 'warning',
                    title: 'Malas noticias',
                    text: 'RUT incorrecto, intente nuevamente'
                    }).then((result) => {
                    if (result.value) {
                        document.getElementById("rut-cliente").focus()

                        document.getElementsByName("rutCliente")[0].value="";
                        document.getElementsByName("rutCliente")[0].placeholder="11.111.111-1";
        
                        $("#rut-cliente").get(0).setSelectionRange(0,0)
 
                    }
                    })
            },
        format_on: 'keyup'
      })


    // Tablas Dinamicas
    $('#dataTables-example').DataTable( {
        "scrollX": false,
        "order": [[ 0, "desc" ]]
    })

    $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' /* optional */
        })
    })

    $(document).ready(function() { $("#empresaTaller").select2(); });
    $(document).ready(function() { $("#equipoTaller").select2(); });
    $(document).ready(function() { $("#centroTaller").select2(); });

    $(document).ready(function() { $("#inputPais").select2(); });
    $(document).ready(function() { $("#inputRegion").select2(); });
    $(document).ready(function() { $("#inputCiudad").select2(); });
    


    $('#EempresaSelect').select2({
        theme: 'bootstrap',
        placeholder: "Seleccione Empresa",
        allowClear: true
    }) 

    $('#centroSelect').select2({
        // minimumInputLength: 2,
        theme: 'bootstrap',
        placeholder: "Seleccione Centro",
        allowClear: true
    })
     
    $('#equipoSelect').select2({
        // minimumInputLength: 2,
        theme: 'bootstrap',
        placeholder: "Seleccione Equipo",
        allowClear: true
    })

})


$(document).ready(function(){
    $('#txt-content').Editor();

    $('#txt-content').Editor('setText', ['<p style="color:black;"></p>']);

    $('#btn-enviar').click(function(e){
        e.preventDefault();
        $('#txt-content').text($('#txt-content').Editor('getText'));
        $('#frm-test').submit();                
    });
}); 


Highcharts.chart('container', {
  chart: {
    type: 'funnel'
  },
  title: {
    text: 'Sales funnel'
  },
    credits: {
        enabled: false;
    },
  plotOptions: {
    series: {
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b> ({point.y:,.0f})',
        softConnector: true
      },
      center: ['40%', '50%'],
      neckWidth: '30%',
      neckHeight: '25%',
      width: '80%'
    }
  },
  legend: {
    enabled: false
  },
  series: [{
    name: 'Unique users',
    data: [
      ['Website visits', 15654],
      ['Downloads', 4064],
      ['Requested price list', 1987],
      ['Invoice sent', 976],
      ['Finalized', 846]
    ]
  }],

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        plotOptions: {
          series: {
            dataLabels: {
              inside: true
            },
            center: ['50%', '50%'],
            width: '100%'
          }
        }
      }
    }]
  }
});
