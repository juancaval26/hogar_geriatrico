@extends('layouts.inicio')
@section('notas_crear')
<main class="content">
    <div class="mb-3">
        <h1 class="h1 d-inline align-middle">Notas Enfermeria</h1>
    </div>

    <form class="form-inline" method="POST" action="{{route('nota.store')}}">
    @csrf

        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                </div>
                <div class="form-group mt-4">
                    <label for="historial" class="">N° Historia Clinica:</label>
                    <input type="number" class="form-control" name="historia" id="historial" placeholder="Numero Historial">
                </div>
                <div class="form-group mt-4">
                    <label for="pwd">Sexo:</label>
                    <select class="form-select" name="sexo">
                        <option selected>Seleccionar</option>
                        @foreach ($sexo as $key => $value)
                        <option value="{{$value}}">{{$value}}</option>
                        @endforeach

                    </select>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-4 col-xs-12">
                        <div>
                            <label for="fecha" class="mt-4">Fecha</label>
                            <input type="date" name="fecha" id="fecha" class="form-control">
                        </div>

                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8 col-xs-12">
                        <div>
                            <label for="detalle" class="mt-4">Detalle</label>
                            <textarea name="detalle" id="destalle" cols="30" rows="10" class="form-control"
                                placeholder="Detalles"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
                </div>
                <div>
                    <label for="edad" class="mt-4">Edad</label>
                    <input type="number" class="form-control" name="edad" id="edad" placeholder="Edad">
                </div>
                <div>
                    <label for="modulo" class="mt-4">Modulo</label>
                    <input type="number" class="form-control" name="modulo" id="modulo" placeholder="Modulo">
                </div>
            </div>
            <div>
                <input type="submit" value="Enviar" name="envio" id="envio" class="btn btn-success">
            </div>
        </div>
    </form>
</main>
@include('sweetalert::alert')
@endsection