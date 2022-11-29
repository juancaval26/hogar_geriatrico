@extends('layouts.inicio')
@section('notas_lista')

<main class="content">
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Lista De Registros</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th class="d-none d-xl-table-cell">Apellidos</th>
                            <th class="d-none d-xl-table-cell">Edad</th>
                            <th class="d-none d-xl-table-cell">Sexo</th>
                            <th class="d-none d-md-table-cell">Modulo</th>
                            <th class="d-none d-md-table-cell">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lista as $dato)
                            <tr>
                                <td>{{ $dato->nombre }}</td>
                                <td>{{ $dato->apellido }}</td>
                                <td>{{ $dato->historia_clinica }}</td>
                                <td>{{ $dato->sexo }}</td>
                                <td>
                                    <a href="{{route('imp', $dato->historia_clinica)}}" target = "_blank">
                                        <button type="text" name = "enviar"
                                        class="btn btn-circle btn-xs btn-info" title="imprimir">Imprimir</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('imp', $dato->historia_clinica)}}" target = "_blank">
                                        <button type="text" name = "enviar"
                                        class="btn btn-circle btn-xs btn-info" title="Editar">agregar detalles</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('imp', $dato->historia_clinica)}}" target = "_blank">
                                        <button type="text" name = "enviar"
                                        class="btn btn-circle btn-xs btn-info" title="Editar">Editar</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@include('sweetalert::alert')
@endsection