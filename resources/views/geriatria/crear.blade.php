@extends('layouts.inicio')

@section('geriatria_crear')
<main class="content">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Registro</h1>
    </div>

    <form class="form-inline" method="POST" action="{{route('geriatria.store')}}">
    {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" class="form-control" name="fecha" id="fecha">
                </div>
                <hr>
                <h2 class="h3 d-inline align-middle">Datos Personales</h2>
                <div class="form-group mt-4">
                    <label for="nom">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nom" placeholder="Nombres">
                </div>
                <div class="form-group mt-4">
                    <label for="sexo">Sexo:</label>
                    <select class="form-select mb-3" name="sexo" id="sexo">
                        <option selected>Seleccionar</option>
                        <option>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecha_n" class="mt-4">Fecha De Nacimiento:</label>
                    <input type="date" class="form-control" name="fecha_n" id="fecha_n" placeholder="Fecha Nacimiento">
                </div>
                <div class="form-group">
                    <label for="estado_c" class="mt-4">Estado Civil:</label>
                    <input type="text" class="form-control" name="estado_c" id="estado_c" placeholder="Estado Civil">
                </div>
                <div class="form-group">
                    <label for="iden" class="mt-4">Identificación:</label>
                    <input type="number" class="form-control" name="iden" id="iden" placeholder="Identificacion">
                </div>
                <div class="form-group">
                    <label for="etnia" class="mt-4">Etnia:</label>
                    <input type="text" class="form-control" name="etnia" id="etnia" placeholder="Etnia">
                </div>
                <div class="form-group">
                    <label for="ciudad" class="mt-4">Ciudad:</label>
                    <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad">
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <div class="form-group">
                    <label for="impresion_g">Impresión General:</label>
                    <input type="text" class="form-control" name="impresion_g" id="impresion_g" placeholder="Impresion General">
                </div>
                <hr>
                <div class="form-group">
                    <label for="apellido" class="mt-5">Apellido:</label>
                    <input type="text" class="form-control" name="apellido" id="apellido"placeholder="Apellido">
                </div>
                <div class="form-group">
                    <label for="edad" class="mt-4">Edad:</label>
                    <input type="text" class="form-control" name="edad" id="edad" placeholder="Edad">
                </div>
                <div class="form-group">
                    <label for="lugar_n" class="mt-5">Lugar De Nacimiento:</label>
                    <input type="text" class="form-control" name="lugar_n" id="lugar_n" placeholder="Lugar Nacimiento">
                </div>
                <div class="form-group">
                    <label for="ocupacion" class="mt-4">Ocupacion:</label>
                    <input type="text" class="form-control" name="ocupacion" id="ocupacion" placeholder="Ocupacion">
                </div>
                <div class="form-group">
                    <label for="rh" class="mt-4">RH:</label>
                    <input type="text" class="form-control" name="rh" id="rh" placeholder="RH">
                </div>
                <div class="form-group">
                    <label for="desp" class="mt-4">Desplazado:</label>
                    <input type="text" class="form-control" name="desp" id="desp" placeholder="Desplazado">
                </div>
                <div class="form-group">
                    <label for="resp" class="mt-4">Familiar/Cuidador:</label>
                    <input type="text" class="form-control"name="resp" id="resp" placeholder="Familiar/Cuidador">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <hr>
                <h2 class="h3 d-inline align-middle">Antecedentes Personales</h2>
                <label><strong>Responda SI o No</strong></label>
                 <div class="form-group mt-4">
                    <label>Hepatitis:</label>
                    <label for="hep_s">Si</label>
                    <input type="radio" name="hep" id="hep_s" value="1">
                    <label for="hep_n">No</label>
                    <input type="radio" name="hep" id="hep_n" value="0">
                </div>
                <div class="form-group mt-4">
                    <label>Diabetes:</label>
                    <label for="dia_s">Si</label>
                    <input type="radio" id="dia_s" name="dia" value="1">
                    <label for="dia_n">No</label>
                    <input type="radio" id="dia_n" name="dia" value="0">
                </div>
                <div class="form-group mt-4">
                    <label>Infarto Miocardio:</label>
                    <label for="inf_s">Si</label>
                    <input type="radio" id="inf_s" name="inf" value="1">
                    <label for="inf_n">No</label>
                    <input type="radio" id="inf_n" name="inf" value="0">
                </div>
                <div class="form-group mt-4">
                    <label>Osteoartritis:</label>
                    <label for="ost_s">Si</label>
                    <input type="radio" id="ost_s" name="ost" value="1">
                    <label for="ost_n">No</label>
                    <input type="radio" id="ost_n" name="ost" value="0">
                </div>
                <div class="form-group mt-4">
                    <label>Accidentes:</label>
                    <label for="acc_s">Si</label>
                    <input type="radio" id="acc_s" name="acc" value="1">
                    <label for="acc_n">No</label>
                    <input type="radio" id="acc_n" name="acc" value="0">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <hr>
                <h2 class="h3 d-inline align-middle">Antecedentes Familiares</h2>

               <div class="form-group">
                    <label class="mt-4">Tuberculosis:</label>
                    <label for="tub_s">Si</label>
                    <input type="radio" class="" id="tub_s" name="tub" value="1">
                    <label for="tub_n">No</label>
                    <input type="radio" class="" id="tub_n" name="tub" value="0">
                </div>
                <div class="form-group mt-4">
                    <label class="">Hipertension Arterial:</label>
                    <label for="hipa_s">Si</label>
                    <input type="radio" name="hipa" id="hipa_s"  value="1">
                    <label for="hipa_n">No</label>
                    <input type="radio" name="hipa" id="hipa_n"  value="0">
                </div>
                <div class="form-group mt-4">
                    <label class="">ACV:</label>
                    <label for="acv_s">Si</label>
                    <input type="radio" name="acv" id="acv_s" value="1">
                    <label for="acv_n">No</label>
                    <input type="radio" name="acv" id="acv_n"  value="0">
                </div>
                <div class="form-group mt-4">
                    <label class="">Intervención Quirúrgica:</label>
                    <label for="int_s">Si</label>
                    <input type="radio" name="int" id="int_s" value="1">
                    <label for="int_n">No</label>
                    <input type="radio" name="int" id="int_n" value="0">
                </div>
                <div class="form-group mt-4">
                    <label class="">Cáncer:</label>
                    <label for="can_s">Si</label>
                    <input type="radio" name="can" id="can_s" value="1">
                    <label for="can_n">No</label>
                    <input type="radio" name="can" id="can_n" value="0">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <div class="form-group">
                    <label for="med" class="mt-4">Medicamento Uso Frecuente:</label>
                    <textarea name="med" id="med" cols="30" rows="10" class="form-control"
                        placeholder="Medicamento"></textarea>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <div class="form-group">
                    <label for="hosp" class="mt-4">Hospitalizado Ultimo Año Motivo:</label>
                    <textarea name="hosp" id="hosp" cols="30" rows="10" class="form-control"
                        placeholder="Hospitalizado"></textarea>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-success mt-4" id="envio" name="enviar">Enviar</button>
            </div>
        </div>
    </form>
</main>
@include('sweetalert::alert')
@endsection