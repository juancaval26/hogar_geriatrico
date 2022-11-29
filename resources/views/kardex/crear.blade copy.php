@extends('layouts.inicio')
@section('kardex_crear')
    <main class="content">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Kardex Enfermeria</h1>
        </div>

        <form class="form-inline" method="POST"  action="{{ route('kardex.store') }}">
        @csrf

        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Fecha">
                </div>
                <div class="form-group mt-3">
                    <label for="ape">Apellido:</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellidos">
                </div>
                <div class="form-group">
                    <label for="ced" class="mt-3">N° Cedula:</label>
                    <input type="number" class="form-control" name="cedula" id="cedula" placeholder="Numero Cedula">
                </div> 
                <div class="form-group">
                    <label for="eps" class="mt-3">EPS:</label>
                    <input type="text" class="form-control" name="eps" id="eps" placeholder="EPS">
                </div>
                <div class="form-group">
                    <label for="medico_m" class="mt-3">Medico Tratante:</label>
                    <input type="text" class="form-control" name="medico_tratante" id="medico_tratante" placeholder="Medico Tratante">
                </div>
                <hr>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <div class="form-group">
                    <label for="nom" class="">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres">
                </div>
                <div class="form-group">
                    <label for="diag" class="mt-3">Diagnostico:</label>
                    <textarea name="diagnostico" id="diagnostico" cols="25" rows="11" class="form-control" placeholder="Diagnostico"></textarea>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12">
                <label for="medi">Medicamento</label>
                <textarea name="medicamento" id="medicamento" cols="30" rows="4" class="form-control" placeholder="Medicamento"></textarea>

            </div>
            <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12">
                <label for="dosis">Dosis</label>
                <textarea name="dosis" id="dosis" cols="30" rows="4" class="form-control" placeholder="Dosis"></textarea>

            </div>
            <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12">
                <label for="via">Via</label>
                <textarea name="via" id="via" cols="30" rows="4" class="form-control" placeholder="Via"></textarea>

            </div>
            <!-- se ve rara la organizacion de los radios, pero se debe dejar asi -->
            <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12">
                <div class="form-group mt-2">
                    <strong><label for="">Jornada</label></strong><br>
                    <input type="radio" id = "jornada" name="jornada" value="mañana" checked="checked">
                    <label for="jornada" class = "my-2">Mañana</label><br>
                    <input type="radio" id = "jornada" name="jornada" value="tarde">
                    <label for="jornada" class = "my-2">Tarde</label><br>
                    <input type="radio" id = "jornada" name="jornada" value="noche">
                    <label for="jornada" class = "my-2">Noche</label>
                </div>

            </div>
            <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12">
                <div class="form-group">
                <table class="table table-hover" id = 'tblBody'>
                    <thead>
                    <tr>
                        <th>Medicamento</th>
                        <th>Dosis</th>
                        <th>Via</th>
                        <th>Jornada</th>
                    </tr>
                    </thead>
                    <!-- datos desde js -->
                    <tbody></tbody>
                </table>

                <!-- tiene los registros en un array de cada valor, cada vez que se hace click en agregar -->
                <textarea name="via" id="med1" cols="5" rows="2" class="form-control" hidden></textarea>
                <textarea name="via" id="dos1" cols="5" rows="2" class="form-control" hidden></textarea>
                <textarea name="via" id="vias1" cols="5" rows="2" class="form-control" hidden></textarea>
                <textarea name="via" id="rad1" cols="5" rows="2" class="form-control" hidden></textarea>

                <button type="button" onclick = "agregarFila()" class = "form-control btn btn-success my-1">agregar</button>
                <button type="button" onclick = "eliminarFila()"class = "form-control btn btn-danger">limpiar</button>
                </div>

            </div>
        </div>
        <div>
            <label for="obs" class="mt-4">Observaciones</label>
            <textarea name="observaciones" id="observaciones" cols="30" rows="10" class="form-control" placeholder="Observaciones"></textarea>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <label for="fecha_r" class="mt-3">Fecha De Revision</label>
                <input type="date" name="fecha_revision" id="fecha_revision" placeholder="Firma" class="form-control"placeholder="Firma">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <label for="firma_a" class="mt-3">firma Auxiliar</label>
                <input type="text" name="firma_auxiliar" id="firma_auxiliar" placeholder="Firma" class="form-control" placeholder="Firma">
            </div>
        </div>
        <div>
            <button type="submit" id="form" class="btn btn-success mt-4">Enviar</button>
        </div>
    </form>
</main>
<script>
// gran parte de este codigo es de 
// https://es.stackoverflow.com/questions/192336/agregar-filas-a-tabla-con-javascript-dom

    var clicks = 0;
    var med = [];
    var dos = [];
    var vias = [];
    var rad = [];
    
    function agregarFila() {
       
        var medicamento = document.getElementById('medicamento').value;
        var dosis = document.getElementById('dosis').value;
        var via = document.getElementById('via').value;
        // https://www.w3schools.com/jsrEF/met_doc_getelementsbyname.asp
        var radio = document.getElementsByName('jornada'); // sin value, para saber cuantos elementos tiene el radio que tienen propiedad name
        if (medicamento != "" && dosis != "" && via != "" && radio.value != "") {  // con value, para que valide que no este nulo, este campo siempre tiene valores
            for (var i = 0; i <  radio.length; i++) {
                if (radio[i].checked && clicks >= 0) {
                    data =
                    document.getElementById('tblBody').insertRow(-1).innerHTML = '<td>'+medicamento+'</td>'+
                    '<td>'+dosis+'</td>'+'<td>'+via+'</td>'+'<td>'+radio[i].value+'</td>'; // con value, para que guarde el valor, cada vez que haga iteraciones
                    med[i] = medicamento;
                    dos[i] = dosis;
                    vias[i] = via;
                    rad[i] = radio[i].value;
                    document.getElementById('med1').textContent += med[i]+"\n";
                    document.getElementById('dos1').textContent += dos[i]+"\n";
                    document.getElementById('vias1').textContent += vias[i]+"\n";
                    document.getElementById('rad1').textContent += rad[i]+"\n";
                    
                    clicks+=1;
                    break;
                }
            }
        }
    }

    $( "#form").on("click", function(event) {
        event.preventDefault();
        async function guardarDatos() {
            //  debugger;
            var fecha = document.getElementById('fecha').value;
            var apellido = document.getElementById('apellido').value;
            var cedula = document.getElementById('cedula').value;
            var eps = document.getElementById('eps').value;
            var medico_tratante = document.getElementById('medico_tratante').value;
            var nombre = document.getElementById('nombre').value;
            var diagnostico = document.getElementById('diagnostico').value;
            var fecha_revision = document.getElementById('fecha_revision').value;
            var firma_auxiliar = document.getElementById('firma_auxiliar').value;
            
            var m1 = document.getElementById('med1').value;
            var d1 = document.getElementById('dos1').value;
            var v1 = document.getElementById('vias1').value;
            var r1 = document.getElementById('rad1').value;

            const url = "{{ route('kardex.store') }}";
            var data = {'medicamentos': m1, 'dosis': d1, 'via': v1, 'jornada': r1,
                    'firma_auxiliar': firma_auxiliar,'fecha_revision': fecha_revision,
                    'observaciones': observaciones,'diagnostico': diagnostico,'nombre': nombre,
                    'medico_tratante': medico_tratante,'eps': eps,
                    'cedula': cedula.value,'apellido': apellido,'fecha': fecha
                };
            await fetch(url, {
 
                method:'POST',
                credentials: "same-origin",
                mode: "cors",
                body: JSON.stringify(data),
                headers:{
                    'X-CSRF-TOKEN':  $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json',
                }
            });
            
        }
        guardarDatos();
    });
    const eliminarFila = () => {
        const tabla = document.getElementById('tblBody')
        const filas = tabla.rows.length
        
        //   se le pone <= porque si se quita elimina el encabezado
        if (filas <= 1)
            alert('No hay datos por limpiar')
        else
            tabla.deleteRow(filas -1)
    }

</script>
@include('sweetalert::alert')
@endsection