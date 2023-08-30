@extends('layouts.app')


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
                             <a class="navbar-brand" href="#">Solicitud Adopción  <img src="{{asset ('icon/solicitud.png') }}" style="width: 30px"></a>
                            <button class="navbar-toggler hover-overlay" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                             <a class="navbar-brand" href="#">Alerta Maltrato  <img src="{{asset ('icon/sirena.png') }}" style="width: 30px"></a>
                            <button class="navbar-toggler hover-overlay" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="#">Estadistica  <img src="{{asset ('icon/analitica.png') }}" style="width: 30px"></a>
                            <button class="navbar-toggler hover-overlay" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          </div>
                        </nav>
                        <form method="post" action="/alerta">
                        @csrf
                  <div class="container py-5">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <form>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="inputLastname">Nombre</label>
                                        <input type="text" class="form-control" name='nombre'  value="{{ old('nombre') }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputAddressLine1">Teléfono</label>
                                        <input type="text" class="form-control" name='telefono' value="{{ old('telefono') }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputAddressLine2">Dirección Evento</label>
                                        <input type="text" class="form-control" name='dir_evento'  value="{{ old('dir_evento') }}">
                                    </div >
                                    <div class="col-sm-6">
                                        <label for="inputCity">Descripción</label>
                                        <input type="text" class="form-control" name='description' value="{{ old('description') }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputCity">Evidencia</label>
                                        <input type="text" class="form-control" name='evidencia' value="{{ old('evidencia') }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputState">Terminos y condiciones</label>
                                        <input type="text" class="form-control" name='terminos' value="{{ old('terminos') }}">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary px-4 float-right">{{ __('Registrar') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </form>
<!----------------------------------------------------------------------------------------------->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bienvenido:') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection