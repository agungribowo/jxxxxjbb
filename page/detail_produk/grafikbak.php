
<script>
Highcharts.chart('container', {
    chart: {
        type: 'area'
    },

    title: {
        text: 'Harga Penutupan'
    },

    xAxis: {
        allowDecimals: false,
        labels: {
            formatter: function () {
                return this.value; // clean, unformatted number for year
            }
        },

    },
    yAxis: {
        title: {
            text: 'Price'
        },
        labels: {
            formatter: function () {
                return this.value / 1000 + 'k';
            }
        }
    },
    tooltip: {
        pointFormat: 'Settlement Price <b>{point.y:,.0f}</b><br/>Tahun {point.x}'
    },
    plotOptions: {
        area: {
            pointStart: 2021,
            marker: {
                enabled: false,
                symbol: 'circle',
                radius: 2,
                states: {
                    hover: {
                        enabled: true
                    }
                }
            }
        }
    },
    series: [{
        name: 'SETTLEMENT PRICE',
        data: [
           <?php include './page/detail_produk/rumus_setprice.php'; ?>
        ]
    }]
});
</script>
