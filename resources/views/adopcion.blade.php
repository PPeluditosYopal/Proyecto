@extends('layouts.app')
<!--

La vista adopción, le permite al usuario poder realizar una solicitud formal de adopción ante la fundación protección peluditos yopal
sobre sus deiferentes mascotas rescatadas.

Esta vista cuenta con un formulario de registro que al igual que los anteriores, apuntan al controller para validar, procesar y almacenar
la información ingresada.

--->

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
                             <a class="navbar-brand" href="{{ route('estadistica') }}">Solicitud Adopción  <img src="{{asset ('icon/solicitud.png') }}" style="width: 30px"></a>
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
                        <br><br>
                          <form method="post" action="/adopcion">
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
                                        <label for="inputLastname">Apellidos</label>
                                        <input type="text" class="form-control" name='apellidos'  value="{{ old('apellidos') }}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Dirección</label>
                                        <input type="text" class="form-control" name='direccion'  value="{{ old('direccion') }}">
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Email</label>
                                        <input type="email" class="form-control" name='correo'  value="{{ old('correo') }}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Estado Civil</label>
                                        <input type="text" class="form-control" name='estado_civil'  value="{{ old('estado_civil') }}">
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Hobbies y deportes</label>
                                        <input type="text" class="form-control" name='hobbies'  value="{{ old('hobbies') }}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Profesión u oficio</label>
                                        <input type="text" class="form-control" name='profesion'  value="{{ old('profesion') }}">
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Tiene hijos?</label>
                                        <input type="text" class="form-control" name='hijos'  value="{{ old('hijos') }}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Tipo de vivienda</label>
                                        <input type="text" class="form-control" name='tipo_vivienda'  value="{{ old('tipo_vivienda') }}">
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="inputLastname">¿Viven otras personas en Casa?</label>
                                        <input type="text" class="form-control" name='nucleo_familiar'  value="{{ old('nucleo_familiar') }}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                        <label for="inputLastname">¿Todas las personas saben de su decisión de adoptar una mascota?</label>
                                        <input type="text" class="form-control" name='decision_adoptar'  value="{{ old('decision_adoptar') }}">
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Nombre para su mascota</label>
                                        <input type="text" class="form-control" name='nombre_mascota'  value="{{ old('nombre_mascota') }}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                        <label for="inputLastname">¿Por que desea adoptar?</label>
                                        <input type="text" class="form-control" name='motivos_adopcion'  value="{{ old('motivos_adopcion') }}">
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="inputLastname">¿Que lugar tiene destinado para la mascota?</label>
                                        <input type="text" class="form-control" name='ambiente_mascota'  value="{{ old('ambiente_mascota') }}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                        <label for="inputLastname">¿Que persona estara acargo del cuiadado la más, en su ausenciaa"</label>
                                        <input type="text" class="form-control" name='custodio_mascota'  value="{{ old('custodio_mascota') }}">
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="inputLastname">¿Cuanto tiempo le dedicara?</label>
                                        <input type="text" class="form-control" name='tiempo_mascota'  value="{{ old('tiempo_mascota') }}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Qué hara con la mascota en vacaciones</label>
                                        <input type="text" class="form-control" name='vacaciones'  value="{{ old('vacaciones') }}">
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Hay otros perros, gatos o animales en casa?</label>
                                        <input type="text" class="form-control" name='animales'  value="{{ old('animales') }}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                        <label for="inputLastname">cuanto tiempo estará sola en casa?</label>
                                        <input type="text" class="form-control" name='sola_mascota'  value="{{ old('sola_mascota') }}">
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Cómo piensa alimentar a la mascota</label>
                                        <input type="text" class="form-control" name='alimento_mascota'  value="{{ old('alimento_mascota') }}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Qué necesidades cree que tiene la mascota que piensa adoptar?</label>
                                        <input type="text" class="form-control" name='necesidades_mascota'  value="{{ old('necesidades_mascota') }}">
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Hubo alguna experiencia negativa con alguna mascota anterior?</label>
                                        <input type="text" class="form-control" name='experiencia_negativa'  value="{{ old('experiencia_negativa') }}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                        <label for="inputLastname">Hay miembros de su familia que sufran de alergia a los animales?</label>
                                        <input type="text" class="form-control" name='alergia_mascota'  value="{{ old('alergia_mascota') }}">
                                        </div>
                                        </div>
                                        <br>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <br>
                                        <button type="submit" class="btn btn-primary px-4 float-right">{{ __('Enviar Solicitud') }}</button>
                                        </div>
                                        </form>
<!----------------------------------------------------------------------------------------------->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection