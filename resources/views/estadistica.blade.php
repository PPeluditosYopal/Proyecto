@extends('layouts.app')

<!--

Esta vista graficas sobre los diferentes datos almacenados en la base de datos.
Para la representación de los graficos, usamos el servicio wed de Google Charts, que permite crear graficas dinamicas
dentro de un html
-->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header nav-link" ><a href="{{ route('home') }}">{{ __('Panel Principal') }}</a> <img src="{{asset ('icon/pagina-de-inicio.png') }}" style="width: 30px"></div>
                <nav class="navbar navbar-expand-lg bg-light">
                          <div class="container-fluid">
                            <a class="navbar-brand hover" href="{{ route ('registromascota')}}">Registro de Mascota <img src="{{asset ('icon/anadir.png') }}" style="width: 30px"></a>
                            <button class="navbar-toggler hover-overlay" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="{{ route('busquedamascota') }}">Busqueda de Mascota  <img src="{{asset ('icon/huella.png') }}" style="width: 30px"></a>
                            <button class="navbar-toggler hover-overlay" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                             <a class="navbar-brand" href="{{ route('adopcion') }}">Solicitud Adopción  <img src="{{asset ('icon/solicitud.png') }}" style="width: 30px"></a>
                            <button class="navbar-toggler hover-overlay" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                             <a class="navbar-brand" href="{{ route('alerta') }}">Alerta Maltrato  <img src="{{asset ('icon/sirena.png') }}" style="width: 30px"></a>
                            <button class="navbar-toggler hover-overlay" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="{{ route('estadistica') }}">Estadistica  <img src="{{asset ('icon/analitica.png') }}" style="width: 30px"></a>
                            <button class="navbar-toggler hover-overlay" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          </div>
                        </nav>
                        <br><br>
                        <div class="container-fluid">
                        <div class="container text-center">
                          <div class="row row-cols-2">
                            <div class="col"><div id="donutchart" style="width: 600px; height: 500px;"></div></div>
                            <div class="col"><div id="donutchart2" style="width: 600px; height: 500px;"></div></div>
                          </div>
                        </div>
                        <div class="container text-center">
                          <div class="row row-cols-2">
                            <div class="col"><div id="donutchart3" style="width: 600px; height: 500px;"></div></div>
                            <div class="col"><div id="donutchart4" style="width: 600px; height: 500px;"></div></div>
                          </div>
                        </div>
                        <div class="container text-center">
                          <div class="row row-cols-2">
                            <div class="col"><div id="donutchart5" style="width: 600px; height: 500px;"></div></div>
                            <div class="col"><div id="donutchart6" style="width: 600px; height: 500px;"></div></div>
                          </div>
                        </div>
                        </div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                              google.charts.load("current", {packages:["corechart"]});
                              google.charts.setOnLoadCallback(drawChart);
                              function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                  ['Task', 'Hours per Day'],
                                  ['CANINO',     11],
                                  ['FELINO',      2],
                                ]);

                                var options = {
                                  title: 'ESPECIES',
                                  pieHole: 0.4,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                                chart.draw(data, options);
                              }
                            </script>
                            <script type="text/javascript">
                              google.charts.load("current", {packages:["corechart"]});
                              google.charts.setOnLoadCallback(drawChart);
                              function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                  ['Task', 'Hours per Day'],
                                  ['Macho',     11],
                                  ['Hembra',      32],
                                ]);

                                var options = {
                                  title: 'GENERO',
                                  pieHole: 0.4,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
                                chart.draw(data, options);
                              }
                            </script>
                            <script type="text/javascript">
                              google.charts.load("current", {packages:["corechart"]});
                              google.charts.setOnLoadCallback(drawChart);
                              function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                  ['Task', 'Hours per Day'],
                                  ['SI',     5],
                                  ['NO',     22],
                                ]);

                                var options = {
                                  title: 'ESTERILIZADO',
                                  pieHole: 0.4,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('donutchart3'));
                                chart.draw(data, options);
                              }
                            </script>
                            <script type="text/javascript">
                              google.charts.load("current", {packages:["corechart"]});
                              google.charts.setOnLoadCallback(drawChart);
                              function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                  ['Task', 'Hours per Day'],
                                  ['SALUDABLE',     34],
                                  ['ENFERMO',      2],
                                  ['EN TRATAMIENTO',      7],
                                ]);

                                var options = {
                                  title: 'CONDICIÓN',
                                  pieHole: 0.4,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('donutchart4'));
                                chart.draw(data, options);
                              }
                            </script>
                            <script type="text/javascript">
                              google.charts.load("current", {packages:["corechart"]});
                              google.charts.setOnLoadCallback(drawChart);
                              function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                  ['Task', 'Hours per Day'],
                                  ['COMPLETO',     11],
                                  ['INCOMPLETO',      13],
                                ]);

                                var options = {
                                  title: 'ESQUEMA DE VACUNACIÓN',
                                  pieHole: 0.4,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('donutchart5'));
                                chart.draw(data, options);
                              }
                            </script>
                            <script type="text/javascript">
                              google.charts.load("current", {packages:["corechart"]});
                              google.charts.setOnLoadCallback(drawChart);
                              function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                  ['Task', 'Hours per Day'],
                                  ['LABRADOR',     11],
                                  ['PUG',      2],
                                  ['ANGORA',  2],
                                  ['CRIOLLO', 2],
                                  ['PASTOR ALEMAN',    7]
                                ]);

                                var options = {
                                  title: 'RAZA',
                                  pieHole: 0.4,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('donutchart6'));
                                chart.draw(data, options);
                              }
                            </script>
<!----------------------------------------------------------------------------------------------->
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection