
Highcharts.chart('container-graph', {
    chart: {
        type: 'funnel'
    },
    title: {
        text: ''
    },
    credits: {
      enabled: false
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
        name: 'Usuario Asignado',
        data: [
            ['Total Facturas', 15654],
            ['Facturas Pendientes', 4064],
            ['Facturas Pagadas', 1987],
            ['Facturas Nuevas', 976],
            ['Finalizadas', 846]
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
