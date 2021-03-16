
@extends('layouts.app')

@section('content')

<html>
  <head>
  <link rel="stylesheet" href="{{ url('css/alert.css') }}">
  <title>Water Care</title>
  </head>
  <body>
  <h3 style="text-align:left; margin:20px">Consumo de agua</h3>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body d-flex flex-row">

                <div class="col-md-8">
                    <div id="donutchart" style="margin:20px;height:400px;width:900px"></div>
                </div>

                <div class="col-md-8">
                    <div id="chart_div" style="margin:20px;height:400px;width:900px"></div>
                </div>

                <div class="col-md-4">
                    <div class="alert-wrap">
                        <div class="alert alert-success">
                            <i class="fas fa-medkit fa-2x"></i> <strong>Consejos para ahorrar el agua.</strong> Sé consciente.Cuando uses agua debes hacer un uso sostenible de la misma y únicamente utilizar la necesaria.
                        </div>

                        <div class="alert alert-info">
                            <i class="fas fa-users fa-2x"></i> <strong>Dúchate en vez de bañarte.</strong> El baño gasta 15 veces más de agua que la ducha.
                        </div>

                        <div class="alert alert-warning">
                            <i class="fas fa-user-md fa-2x"></i> <strong>Cierra el grifo mientras…</strong> Te lavas los dientes, te afeitas o te enjabonas las manos… y si lavas los platos a mano, usa barreños y no lo hagas con el grifo abierto. 
                        </div>

                        <div class="alert alert-danger">
                            <i class="fas fa-hospital-alt fa-2x"></i> <strong>No fugas.</strong> Arregla las fugas de agua. Los grifos que gotean pueden llegar a gastar en un año 11.000 litros de año.
                        </div>
                      </div>
                  </div>


          



          </div>
        </div>
      </div>
    </div>
  </div>


  
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
                  ['Month', 'Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
                  ['Marzo',  900,      938,         522,             998   ],
                  ['Abril',  900,      1120,        599,             1268  ],
                  ['Mayo',  950,      1167,        587,             807 ],
                  ['Junio',  950,      1110,        615,             968 ],
                  ['Julio',  1000,      691,         629,             1026]
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
  </body>
</html>

@endsection

