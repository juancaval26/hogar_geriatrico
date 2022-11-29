@extends('layouts.inicio')
@section('kardex_crear')
    <main class="content">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Kardex Enfermeria</h1>
        </div>

        <form class="form-inline" method="POST" action="{{ route('kardex.store') }}">
        @csrf

        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <div class="form-group">
                    <label for="fecha">Fecha Actual:</label>
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
            <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12">
                <div class="form-group">
                    <label>Jornada</label>
                    <textarea name="jornada" id="jornada" cols="30" rows="4" class="form-control" placeholder="Ingresar Jornada"></textarea>
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
                        <th>Jornadas</th>
                    </tr>
                    </thead>
                    <!-- datos desde js -->
                    <tbody></tbody>
                </table>

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
            <button type="button" id="formu" class="btn btn-success mt-4">Enviar</button>
        </div>
    </form>
</main>
<script>
// gran parte de este codigo es con ayuda de
// https://es.stackoverflow.com/questions/192336/agregar-filas-a-tabla-con-javascript-dom

let jornada = document.getElementById('jornada').value = "mañana tarde noche";

    function agregarFila() {
       
        let medicamento = document.getElementById('medicamento').value;
        let dosis = document.getElementById('dosis').value;
        let via = document.getElementById('via').value;
        let jornada = document.getElementById('jornada').value;
        // https://es.stackoverflow.com/questions/185624/obtener-valor-de-checkbox-seleccionados-con-jquery
        if (medicamento != "" && dosis != "" && via != "") {  // con value, para que valide que no este nulo, este campo siempre tiene valores
            data =
            document.getElementById('tblBody').insertRow(-1).innerHTML = '<td>'+medicamento+'</td>'+
            '<td>'+dosis+'</td>'+'<td>'+via+'</td>'
            +'<td>'+jornada+'</td>';
        }
        if (medicamento == "" && dosis == "" && via == "") {
            alert("no hay datos por agregar");
        }

    }

    $( "#formu").on("click", function(event) {
        event.preventDefault();
        async function guardarDatos() {
            let fecha = document.getElementById('fecha').value;
            let nombre = document.getElementById('nombre').value;
            let apellido = document.getElementById('apellido').value;
            let eps = document.getElementById('eps').value;
            let cedula = document.getElementById('cedula').value;
            let diagnostico = document.getElementById('diagnostico').value;
            let medico_tratante = document.getElementById('medico_tratante').value;

            let medicamento = document.getElementById('medicamento').value;
            let dosis = document.getElementById('dosis').value;
            let via = document.getElementById('via').value;
            let jornada = document.getElementById('jornada').value;
            let observaciones = document.getElementById('observaciones').value;
            let fecha_revision = document.getElementById('fecha_revision').value;
            let firma_auxiliar = document.getElementById('firma_auxiliar').value;
            

            const url = "{{ route('kardex.store') }}";
            let data = {'fecha': fecha, 'nombre': nombre, 'apellido': apellido, 'eps': eps,
                'cedula': cedula, 'diagnostico': diagnostico, 'medico_tratante': medico_tratante,
                'medicamento': medicamento, 'dosis': dosis, 'via': via, 'jornada': jornada,
                'observaciones': observaciones, 'fecha_revision': fecha_revision,
                'firma_auxiliar': firma_auxiliar   
                };
            //  debugger;

            await fetch(url, {
 
                method:'POST',
                credentials: "same-origin",
                mode: "cors",
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            });
            // promesa
            let promise = new Promise((resolve, reject) => {
                let medicamento = document.getElementById('medicamento').value = "";
                let dosis = document.getElementById('dosis').value = "";
                let via = document.getElementById('via').value = "";
                resolve("registro ingresado");
            });

            let result = await promise;
            alert(result);
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
            tabla.deleteRow(filas -1);
            let medicamento = document.getElementById('medicamento').value = "";
            let dosis = document.getElementById('dosis').value = "";
            let via = document.getElementById('via').value = "";
            let jornada = document.getElementById('jornada').value ="";
    }

</script>
@include('sweetalert::alert')
@endsection
