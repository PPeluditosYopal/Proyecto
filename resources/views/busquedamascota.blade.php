@extends('layouts.app')


@section('content')
<div class="container-fluid col-xl-12">
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
                        <div class="container-fluid">
                            <br>
                            <h4>Consulta de Mascotas</h4>
                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="/busquedamascota" method="get">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" value="{{$texto}}">
                                            </div>
                                            <div class="col-auto my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>TagId</th>
                                                    <th>Nombre</th>
                                                    <th>Raza</th>
                                                    <th>Edad</th>
                                                    <th>Genero</th>
                                                    <th>Especie</th>
                                                    <th>Ciclo Vacunas</th>
                                                    <th>Esterilizado</th>
                                                    <th>Condición</th>
                                                    <th>Enfermedades</th>
                                                    <th>Observación</th>
                                                    <th>Custodio</th>
                                                    <th>Dirección</th>
                                                    <th>Teléfono</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($busquedamascotas)<=0)
                                                <tr>
                                                    <td colpan="8">No hay resultados</td>
                                                </tr>
                                                @else
                                                @foreach($busquedamascotas as $busquedamascota)
                                                <tr>
                                                    <td>{{$busquedamascota->TagId}}</td>
                                                    <td>{{$busquedamascota->nombre}}</td>
                                                    <td>{{$busquedamascota->raza}}</td>
                                                    <td>{{$busquedamascota->edad}}</td>
                                                    <td>{{$busquedamascota->genero}}</td>
                                                    <td>{{$busquedamascota->especie}}</td>
                                                    <td>{{$busquedamascota->ciclo_vacunas}}</td>
                                                    <td>{{$busquedamascota->esterilizado}}</td>
                                                    <td>{{$busquedamascota->condicion}}</td>
                                                    <td>{{$busquedamascota->enfermedades}}</td>
                                                    <td>{{$busquedamascota->observacion}}</td>
                                                    <td>{{$busquedamascota->custodio}}</td>
                                                    <td>{{$busquedamascota->direccion}}</td>
                                                    <td>{{$busquedamascota->telefono}}</td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                        {{$busquedamascotas->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----------------------------------------------------------------------------------------------->
@endsection