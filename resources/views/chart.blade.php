<<<<<<< HEAD

@extends('layouts.app')

=======
<<<<<<< HEAD

@extends('layouts.app')

=======
<<<<<<< HEAD

@extends('layouts.app')

=======
<<<<<<< HEAD

@extends('layouts.app')

=======
@extends('layouts.app')

@section('title','Water Care')

>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
@section('content')

<html>
  <head>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
  <link rel="stylesheet" href="{{ url('css/alert.css') }}">
  <title>Water Care</title>
  </head>
  <body>
<<<<<<< HEAD
  <h3 style="text-align:center; margin:20px">Consumo de agua</h3>
=======
<<<<<<< HEAD
  <h3 style="text-align:center; margin:20px">Consumo de agua</h3>
=======
  <h3 style="text-align:left; margin:20px">Consumo de agua</h3>
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body d-flex flex-row">

<<<<<<< HEAD
            <div class="col-md-4">
=======
<<<<<<< HEAD
            <div class="col-md-4">
=======
                <div class="col-md-8">
                    <div id="donutchart" style="margin:20px;height:400px;width:900px"></div>
                </div>

                <div class="col-md-8">
                    <div id="chart_div" style="margin:20px;height:400px;width:900px"></div>
                </div>

                <div class="col-md-4">
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
                  </div>
                <div class="col-md-8">
                    <div id="donutchart" style="margin:20px;height:400px;width:900px"></div>
                </div>

                <div class="col-md-8">
                    <div id="chart_div" style="margin:20px;height:400px;width:900px"></div>
                </div>

                
<<<<<<< HEAD
=======
=======
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088


          



<<<<<<< HEAD
          
=======
<<<<<<< HEAD
          
=======
          </div>
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
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

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======

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
>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
