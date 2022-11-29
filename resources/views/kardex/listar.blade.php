@extends('layouts.inicio')
@section('kardex_lista')
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
                            <th class="d-none d-xl-table-cell">EPS</th>
                            <th class="d-none d-xl-table-cell">Cedula</th>
                            <th class="d-none d-md-table-cell">Fecha</th>
                            <th class="d-none d-md-table-cell">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lista as $listar)
                            <tr>
                                <td>{{ $listar->nombre }}</td>
                                <td>{{ $listar->apellido }}</td>
                                <td>{{ $listar->eps }}</td>
                                <td>{{ $listar->cedula }}</td>
                                <td>{{ $listar->fecha }}</td>
                                <td>
                                    <button type="button" onclick="detalles({{ $listar->id }})" data-toggle="modal"
                                        data-target=".bs-lista-modal-lg" class="btn btn-circle btn-xs btn-info"
                                        title="detalles">detalles</button>
                                    <button type="button" onclick="editar({{ $listar->id }})" data-toggle="modal"
                                        data-target="#bs-editar-modal-lg" class="btn btn-circle btn-xs btn-success"
                                        title="editar">Editar</button>
                                    <a href="{{ route('nota.show', $listar->id) }}"
                                        class="btn btn-circle btn-xs btn-info" title="visualizar">detalles</a>
                                    <a href="{{ route('nota.edit', $listar->id) }}"
                                        class="btn btn-xs btn-success" title="editar">Editar</a>
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