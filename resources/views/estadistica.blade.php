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