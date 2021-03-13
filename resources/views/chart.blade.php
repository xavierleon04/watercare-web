@extends('layouts.app')

@section('title','Water Care')

@section('content')

<html>
  <head>

  <style>
      .menu{text-align: right;}
  </style>
      <title>Water Care</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawVisualization);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Lleno',     65],
          ['Vacío',      35]
        ]);

        var options = {
          title: 'Agua en el tinaco',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    
function drawVisualization() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([
    ['Month', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    ['Ene',  900,      938,         522,             998,           450,      614],
    ['Feb',  900,      1120,        599,             1268,          450,      682],
    ['Marzo',  950,      1167,        587,             807,           450,      623],
    ['Abril',  950,      1110,        615,             968,           500,      609],
    ['Mayo',  1000,      691,         629,             1026,          500,      569]
  ]);
  
  var options = {
    title : 'Consumo',
    vAxis: {title: 'Uso de agua (Lts)'},
    hAxis: {title: 'Meses'},
    seriesType: 'bars',
    series: {7: {type: 'line'}}
  };

  var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}
</script>

  </head>
  <body>
  <h3 style="text-align:left; margin:20px">Consumo de agua</h3>
    <div id="donutchart" style="width: 900px; height: 500px;"> </div>
    <div id="chart_div" style="width: 900px; height: 500px;" class = "menu"></div>
    


  </body>
</html>



@endsection