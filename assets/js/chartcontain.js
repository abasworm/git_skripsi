$(function () {
        $('#chart-visitor').highcharts({
            title: {
                text: 'Pengunjung',
                x: -20 //center
            },
            subtitle: {
                text: 'Jumlah Per Minggu',
                x: -20
            },
            xAxis: {
                categories: ['1', '2', '3', '4']
            },
            yAxis: {
                title: {
                    text: 'Orang'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: '°C'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: ' ',
                data: [12,11,23,20]
            }]
        });
    });
    