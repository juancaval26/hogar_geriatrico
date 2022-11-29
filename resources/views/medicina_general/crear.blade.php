@extends('layouts.inicio')
@section('medicina_crear')
<main class="content">
    <div class="mb-3">
        <h1 class="h1 d-inline align-middle">Datos Personales</h1>
    </div>

    <form class="form-inline" method="POST" action="{{route('medicina.store')}}">
    {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" class="form-control" name="fecha" id="fecha">
                </div>
                <div class="form-group mt-4">
                    <label for="apellido" class="">Apellido:</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
                </div>
                <div class="form-group ">
                    <label for="edad" class="mt-4">Edad:</label>
                    <input type="number" class="form-control" name="edad" id="edad" placeholder="Edad">
                </div>
                <div>
                    <label for="enfermedad_actual" class="mt-4">Enfermedad Actual</label>
                    <textarea name="enfermedad_actual" id="enfermedad_actual" cols="30" rows="15" class="form-control"
                        placeholder="Enfermedad Actual"></textarea>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                        <div class="form-group">
                            <label for="documento" class="mt-4">Documento:</label>
                            <input type="numer" class="form-control" name="documento" id="documento" placeholder="Numero Documento">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                        <div class="form-group mt-4">
                            <label for="lugar_documento" class="">De:</label>
                            <input type="text" class="form-control" name="lugar_documento" id="lugar_documento" placeholder="De Donde es el Documento">
                        </div>
                    </div>
                </div>
                <div>
                    <label for="motivo_consulta" class="mt-4">Motivo Consulta</label>
                    <textarea name="motivo_consulta" id="motivo_consulta" cols="30" rows="10" class="form-control"
                        placeholder="Motivo Consulta"></textarea>
                </div>
                <div>
                    <label for="revision_sistemas" class="mt-4">Revision Por Sistemas</label>
                    <textarea name="revision_sistemas" id="revision_sistemas" cols="30" rows="6" class="form-control"
                        placeholder="Revision Por Sistemas"></textarea>
                </div>
            </div>

            <div class="mt-4">
                <h1 class="h2 d-inline align-middle">Antecedentes Personales</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                    <div>
                        <label for="patologicos" class="mt-4">Patologicos</label>
                        <textarea name="patologicos" id="patologicos" cols="30" rows="6" class="form-control"
                            placeholder="Patologicos"></textarea>
                    </div>
                    <div>
                        <label for="alergicos" class="mt-4">Alergicos</label>
                        <textarea name="alergicos" id="alergicos" cols="30" rows="6" class="form-control"
                            placeholder="Alergicos"></textarea>
                    </div>
                    <div>
                        <label for="toxicos" class="mt-4">Toxicos</label>
                        <textarea name="toxicos" id="toxicos" cols="30" rows="6" class="form-control"
                            placeholder="Toxicos"></textarea>
                    </div>
                    <div>
                        <label for="farmacologicos" class="mt-4">Farmacologicos</label>
                        <textarea name="farmacologicos" id="farmacologicos" cols="30" rows="6" class="form-control"
                            placeholder="Farmacologicos"></textarea>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">

                    <div>
                        <label for="examen_fisico" class="mt-4">Examen Fisico</label>
                        <textarea name="examen_fisico" id="examen_fisico" cols="30" rows="6" class="form-control"
                            placeholder="Examen Fisico"></textarea>
                    </div>
                    <div>
                        <label for="signos_vitales" class="mt-4">Signos Vitales</label>
                        <textarea name="signos_vitales" id="signos_vitales" cols="30" rows="6" class="form-control"
                            placeholder="Signos Vitales"></textarea>
                    </div>
                    <div>
                        <label for="cabeza_cuello" class="mt-4">Cabeza y Cuello</label>
                        <textarea name="cabeza_cuello" id="cabeza_cuello" cols="30" rows="6" class="form-control"
                            placeholder="Cabeza y Cuello"></textarea>
                    </div>
                    <div>
                        <label for="cardiopulmonar" class="mt-4">Cardiopulmonar</label>
                        <textarea name="cardiopulmonar" id="cardiopulmonar" cols="30" rows="6" class="form-control"
                            placeholder="Cardiopulmonar"></textarea>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                    <div>
                        <label for="abdominal" class="mt-4">Abdominal</label>
                        <textarea name="abdominal" id="abdominal" cols="30" rows="6" class="form-control"
                            placeholder="Abdominal"></textarea>
                    </div>
                    <div>
                        <label for="genitourinario" class="mt-4">Genitourinario</label>
                        <textarea name="genitourinario" id="genitourinario" cols="30" rows="6" class="form-control"
                            placeholder="Genitourinario"></textarea>
                    </div>
                    <div>
                        <label for="extremidades" class="mt-4">Extremidades</label>
                        <textarea name="extremidades" id="extremidades" cols="30" rows="6" class="form-control"
                            placeholder="Extremidades"></textarea>
                    </div>
                    <div>
                        <label for="neurologico" class="mt-4">Neurologico</label>
                        <textarea name="neurologico" id="neurologico" cols="30" rows="6" class="form-control"
                            placeholder="Neurologico"></textarea>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                    <div>
                        <label for="laboratorio" class="mt-4">Laboratorio</label>
                        <textarea name="laboratorio" id="laboratorio" cols="30" rows="6" class="form-control"
                            placeholder="Laboratorio"></textarea>
                    </div>
                    <div>
                        <label for="analisis" class="mt-4">Analisis</label>
                        <textarea name="analisis" id="analisis" cols="30" rows="6" class="form-control"
                            placeholder="Analisis"></textarea>
                    </div>
                    <div>
                        <label for="diagnostico" class="mt-4">Diagnostico</label>
                        <textarea name="diagnostico" id="diagnostico" cols="30" rows="6" class="form-control"
                            placeholder="Diagnostico"></textarea>
                    </div>
                    <div>
                        <label for="tratamiento" class="mt-4">Tratamiento</label>
                        <textarea name="tratamiento" id="tratamiento" cols="30" rows="6" class="form-control"
                            placeholder="Tratamiento"></textarea>
                    </div>
                    <div>
                        <label for="firma" class="mt-4">Nombre del Medico</label>
                        <input type="text" name="firma" id="firma" placeholder="Nombre Completo" class="form-control">
                    </div>
                    <div>
                        <input type="submit" value="Enviar" class="btn btn-success mt-4">
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
@include('sweetalert::alert')
@endsection