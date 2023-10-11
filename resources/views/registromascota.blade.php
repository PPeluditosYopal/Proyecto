@extends('layouts.app')

@section('content')
@php
use App\Models\Especie;
@endphp
<!--

La vista del registrar mascota, muestra al usuario un formulario para registrar la información de las mascotas.
Este formulario apunta al RegistrarMascotaController, para validar, procesar y almacenar la información.

--->

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
                      <div class="container-fluid">
                        <br><br>
                  <form method="post" action="/registromascota">
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
                                        <label for="inputWebsite">Condición</label>
                                        <select class="form-control" name='condicion' value="{{ old('condicion') }}">
                                            <option value="">Seleccione la condición de Salud</option>
                                            <option value="Saludable">Saludable</option>
                                            <option value="Enfermo">Enfermo</option>
                                            <option value="En tratamiento">En tratamiento</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                 <div class="col-sm-6">
                                        <label for="especie">Especie</label>
                                        <select id="especie" onchange="loadRazas(this)" class="form-control" name='especie' value="{{ old('especie') }}">
                                            <option value="">Seleccione la especie de la mascota</option>
                                            @foreach ($especies as $especie)
                                            <option value="{{ $especie->id}}">{{ $especie->especies}}</option>
                                            @endforeach
                                       </select>
                                    </div>
                                     <div class="col-sm-6">
                                        <label for="enfermedades">Enfermedades</label>
                                        <select class="form-control" name='enfermedades' r="Contact Number" value="{{ old('enfermedades') }}">
                                            <option value="">Seleccione una enfermedad</option>
                                            <option value="Moquillo">Ninguna</option>
                                            <option value="Moquillo">Moquillo</option>
                                            <option value="Hepatitis canina">Hepatitis canina</option>
                                            <option value="Leptospirosis">Leptospirosis</option>
                                            <option value="Parvovirus">Parvovirus</option>
                                            <option value="Rabia">Rabia</option>
                                            <option value="Brucelosis">Brucelosis</option>
                                            <option value="Borreliosis canina o enfermedad de Lyme">Borreliosis canina o enfermedad de Lyme</option>
                                            <option value="Traqueobronquitis infecciosa o tos de las perreras">Traqueobronquitis infecciosa o tos de las perreras</option>
                                            <option value="Coronavirus">Coronavirus</option>
                                            <option value="Toxoplasmosis">Toxoplasmosis</option>
                                            <option value="Otitis">Otitis</option>
                                            <option value="Conjuntivitis">Conjuntivitis</option>
                                            <option value="Alergias cutáneas">Alergias cutáneas</option>
                                            <option value="Gastritis aguda (vómito agudo)">Gastritis aguda (vómito agudo)</option>
                                            <option value="Diarrea">Diarrea</option>
                                            <option value="Leishmaniosis">Leishmaniosis</option>
                                            <option value="Sarna demodéctica">Sarna demodéctica</option>
                                            <option value="Mastitis">Mastitis</option>
                                            <option value="Torsión/dilatación (vólvulo gástrico)">Torsión/dilatación (vólvulo gástrico)</option>
                                            <option value="Cáncer">Cáncer</option>
                                            <option value="Alergias">Alergias</option>
                                            <option value="Conjuntivitis">Conjuntivitis</option>
                                            <option value="Gripa">Gripa</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="raza">Raza</label>
                                        <select id="raza" class="form-control" name='raza' value="{{ old('raza') }}">
                                            <option value="">Seleccione la raza de su mascota</option>
                                            <!-- @foreach ($razas as $raza)
                                                <option value="{{ $raza->id}}">{{ $raza->raza}}</option>
                                            @endforeach -->
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputContactNumber">Observaciones generales</label>
                                        <input type="text" class="form-control" name='observacion' value="{{ old('observaciones') }}">
                                    </div>
                                </div>
                                     <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="inputAddressLine2">Edad</label>
                                        <input type="number" class="form-control" name='edad'  value="{{ old('edad') }}" placeholder="Edad en meses">
                                    </div >
                                    <div class="col-sm-6">
                                        <label for="inputContactNumber">Nombre Custodio</label>
                                        <input type="text" class="form-control" name='custodio' value="{{ old('custodio') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="inputCity">Genero</label>
                                        <select name="genero" class="form-control" required="required" value="{{ old('genero') }}">
                                            <option value="">Seleccione Genero</option>
                                            <option value="Macho">Macho</option>
                                            <option value="Hembra">Hembra</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputContactNumber">Teléfono</label>
                                        <input type="number" class="form-control" name='telefono' value="{{ old('telefono') }}">
                                    </div>
                                </div>
                                    <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="vacunas">Esquema de vacunación</label>
                                        <select class="form-control" name='ciclo_vacunas' value="{{ old('ciclo_vacunas') }}">
                                            <option value="">----Esquema Vacunación Canina---</option>
                                            <option value="6-8 Semanas (Parvovirosis)">6-8 Semanas (Parvovirosis)</option>
                                            <option value="8-10 Semanas (Polivalente canina)">8-10 Semanas (Polivalente canina)</option>
                                            <option value="12-14 Semanas (Antirrábica)">12-14 Semanas (Antirrábica)</option>
                                            <option value="Refuerzo Anual (Poli/Traque/Rabia)">Refuerzo Anual (Poli/Traque/Rabia)</option>
                                            <option value="">----Esquema Vacunación Felina---</option>
                                            <option value="8 Semanas (Tripe Felina)">8 Semanas (Tripe Felina)</option>
                                            <option value="10-11 Semanas (Tripe Felina)">10-11 Semanas (Tripe Felina)</option>
                                            <option value="12 Semanas (RABIA)">12 Semanas (RABIA)</option>
                                        </select>
                                    </div>
                                     <div class="col-sm-6">
                                        <label for="inputContactNumber">Dirección</label>
                                        <input type="text" class="form-control" name='direccion' value="{{ old('direccion') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="inputPostalCode">Esterilizado</label>
                                        <select class="form-control" name='esterilizado' value="{{ old('esterilizado') }}">
                                            <option value="">Seleccione SI/NO</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputFirstname">TagId</label>
                                        <input type="text" class="form-control" name='TagId'  value="{{ old('TagId') }}">
                                    </div>
                                </div>
                                <br>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <br>
                                <button type="submit" class="btn btn-primary px-4 float-right">{{ __('Registrar') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </form>
            @if(session('registroexitoso'))
            <div class="alert alert-success" role="alert">
            {{ session('registroexitoso')}}
            </div>
            @endif
              </div>
               <script>
                  function loadRazas(especiesSelect) {
                  let especieId = especiesSelect.value;
                  console.log('especies/'+especieId+'/razas')
                  fetch('especies/'+especieId+'/razas')
                //   .then((response)=>{
                //     console.log(response.json())
                //     buildRazaSelect(response.json());
                //   })
                  .then(function (response){
                    console.log(response.body)
                  return response.json();

                  })
                  .then(function(jsonData){
                    buildRazaSelect(jsonData);
                  })
        }

        function buildRazaSelect(jsonTeams){

            let razaSelect = document.getElementById('raza');
            while(razaSelect.options.length>0)
                razaSelect.remove(0);
            jsonTeams.forEach(function (team) {

            let optionTag = document.createElement('option');
            optionTag.value =team.id;
            optionTag.innerHTML = team.raza;
            razaSelect.append(optionTag);
            });
        }
              </script>
<!----------------------------------------------------------------------------------------------->

@endsection