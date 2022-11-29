@extends('layouts.inicio')
@section('evolucion_crear')
<main class="content">
    <div class="mb-3">
        <h1 class="h1 d-inline align-middle">Hoja De Evolución Enfermeria</h1>
    </div>

    <form class="form-inline" method="POST" action="{{route('nota.store')}}">
    @csrf

        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                </div>
            </div>
                <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                    <div>
                        <label for="fecha" class="mt-4">Fecha</label>
                        <input type="date" name="fecha" id="fecha" class="form-control">
                    </div>
                    <div>
                        <label for="texto" class="mt-4">Evolución</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <input type="date" name="texto" id="texto" class="form-control">
                    </div>
                </div>
                <div>

                </div>
            <div>
                <input type="submit" value="Enviar" name="envio" id="envio" class="btn btn-success">
            </div>
        </div>
    </form>
</main>
@include('sweetalert::alert')
@endsection