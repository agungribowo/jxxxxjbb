
<script>
/**
 * ---------------------------------------
 * This demo was created using amCharts 4.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v4/
 * ---------------------------------------
 */

// Themes begin
am4core.useTheme(am4themes_dark);
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.XYChart);

chart.data = [{
 "country": "<?php echo $contractx[1]; ?>",
 "visits": <?php echo $volx[1]; ?>
}, {
  "country": "<?php echo $contractx[2]; ?>",
  "visits": <?php echo $volx[2]; ?>
},
{
  "country": "<?php echo $contractx[3]; ?>",
  "visits": <?php echo $volx[3]; ?>
}, {
  "country": "<?php echo $contractx[4]; ?>",
  "visits": <?php echo $volx[4]; ?>
}, {
  "country": "<?php echo $contractx[5]; ?>",
  "visits": <?php echo $volx[5]; ?>
}, {
  "country": "<?php echo $contractx[6]; ?>",
  "visits": <?php echo $volx[6]; ?>
}, {
  "country": "<?php echo $contractx[7]; ?>",
  "visits": <?php echo $volx[7]; ?>
}, {
  "country": "<?php echo $contractx[8]; ?>",
  "visits": <?php echo $volx[8]; ?>
}, {
  "country": "<?php echo $contractx[9]; ?>",
  "visits": <?php echo $volx[9]; ?>
}, {
  "country": "<?php echo $contractx[10]; ?>",
  "visits": <?php echo $volx[10]; ?>
}



// , {
//  "country": "INDEX",
//  "visits": 984
// }, {
//  "country": "FOREX",
//  "visits": 711
// }, {
//  "country": "SSTOCK",
//  "visits": 665
// }
];

chart.padding(40, 40, 40, 40);

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.minGridDistance = 60;
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.disabled = true;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.min = 0;
valueAxis.extraMax = 0.1;
//valueAxis.rangeChangeEasing = am4core.ease.linear;
//valueAxis.rangeChangeDuration = 1500;

var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.categoryX = "country";
series.dataFields.valueY = "visits";
series.tooltipText = "{valueY.value}"
series.columns.template.strokeOpacity = 0;
series.columns.template.column.cornerRadiusTopRight = 10;
series.columns.template.column.cornerRadiusTopLeft = 10;
//series.interpolationDuration = 1500;
//series.interpolationEasing = am4core.ease.linear;
var labelBullet = series.bullets.push(new am4charts.LabelBullet());
labelBullet.label.verticalCenter = "bottom";
labelBullet.label.dy = -10;
labelBullet.label.text = "{values.valueY.workingValue.formatNumber('#.')}";

chart.zoomOutButton.disabled = true;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function (fill, target) {
 return chart.colors.getIndex(target.dataItem.index);
});

setInterval(function () {
 am4core.array.each(chart.data, function (item) {
   item.visits += Math.round(Math.random() * 0 - 0);
   item.visits = Math.abs(item.visits);
 })
 chart.invalidateRawData();
}, 2000)

categoryAxis.sortBySeries = series;
</script>
