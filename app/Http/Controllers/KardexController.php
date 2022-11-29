<?php

namespace App\Http\Controllers;

use App\Models\Kardex;
use App\Models\MedicamentoJornada;
use DB;

use App\Http\Requests\StoreKardexRequest;
use App\Http\Requests\UpdateKardexRequest;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;


class KardexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $lista = Kardex::select('id', 'nombre', 'apellido', 'eps', 'cedula', 'fecha')->get();   
            return view('kardex.listar', compact('lista'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kardex.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKardexRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKardexRequest $request)
    {

        /* esta sintaxis es para usar por medio de postman en formato RAW, con JSON
            $medicamentos = new MedicamentoJornada;
            $med = $request->input('medicamentos');
            // return count($med);
            $dos = $request->input('dosis');
            $via = $request->input('via');
            $jornada = $request->input('jornada');

        */
        // dd($request->all());
        // for ($i=0; $i < count($jornada); $i++) {
        //     // $jornada = $medicamentos->manana=$jornada[$i];
        //     if ($jornada[$i] == "manana") {
        //         $medicamentos->manana=$jornada[$i];
        //     }else if ($jornada[$i] == "tarde") {
        //         $medicamentos->manana=$jornada[$i];
        //     }else if ($jornada[$i] == "noche") {
        //         $medicamentos->noche=$jornada[$i];
        //     }
        // }

        $medicamentos = new MedicamentoJornada;
        $kardex = new Kardex;
        // objeto->campo bd->request->campo name
        // dd($request->all());

        $kardex->fecha=$request->fecha;
        $kardex->nombre=$request->nombre;
        $kardex->apellido=$request->apellido;
        $kardex->eps=$request->eps;
        $kardex->cedula=$request->cedula;
        $kardex->diagnostico=$request->diagnostico;
        $kardex->medico_tratante=$request->medico_tratante;
        $kardex->save();

        $medicamentos->medicamento=$request->medicamento;
        $medicamentos->dosis=$request->dosis;
        $medicamentos->via=$request->via;
        $medicamentos->jornada=$request->jornada;

        $medicamentos->observaciones=$request->observaciones;
        $medicamentos->fecha_revision=$request->fecha_revision;
        $medicamentos->firma_auxiliar=$request->firma_auxiliar;
        $medicamentos->kardex_id=$kardex->id;
        $medicamentos->save();


        // $kardex->fecha=$request->input('fecha');
        // $kardex->nombre=$request->input('nombre');
        // $kardex->apellido=$request->input('apellido');
        // $kardex->cedula=$request->input('cedula');
        // $kardex->eps=$request->input('eps');
        // $kardex->diagnostico=$request->input('diagnostico');
        // $kardex->medico_tratante=$request->input('medico_tratante');
    
            // $medicamentos->medicamento=$med[$i];
            // $medicamentos->dosis=$dos[$i];
            // $medicamentos->via=$via[$i];
            // $medicamentos->manana=$jornada[$i];
            // $medicamentos->tarde=$jornada[$i];
            // $medicamentos->noche=$jornada[$i];
            // // echo $medicamentos;
            // $medicamentos->observaciones=$request->input('observaciones');
            // $medicamentos->fecha_revision=$request->input('fecha_revision');
            // $medicamentos->firma_auxiliar=$request->input('firma_auxiliar');

        return "registro bien";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kardex  $kardex
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kardex = DB::table('kardex')->find($id);
        return $kardex;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kardex  $kardex
     * @return \Illuminate\Http\Response
     */
    public function edit(Kardex $kardex)
    {
        $kardex = DB::table('kardex')->find($id);
        return $kardex;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKardexRequest  $request
     * @param  \App\Models\Kardex  $kardex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kardex = DB::table('kardex')->find($id);
        return $kardex;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kardex  $kardex
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kardex $kardex)
    {
        //
    }
}
