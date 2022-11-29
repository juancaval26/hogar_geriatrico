@extends('layouts.inicio')
@section('kardex_crear')
    <h1 class = "my-2">Exploracion Fisica del Dolor</h1>
    <label for="">para rellenar la siguiente tabla se tendra en cuenta:</label>
    <ul>
        <li>Dolor: Movimiento y Reposo</li>
        <li>B.A: 0% 25% 50% 75% 100%</li>
        <li>B.M: 0  1  2  3  4  5</li>
        <li>Marcha:</li>
        <ul>
            <li>0 = no anda, no carga</li>
            <li>1 = anda con ayuda parcial / carga parcial</li>
            <li>2 = anda sin ayuda / carga total</li>
        </ul>

    </ul>
@include('sweetalert::alert')
@endsection