<?php

namespace App\Http\Controllers;

use App\Models\Medicina;
use App\Models\AntecedenteMedicina;

use DB;

use App\Http\Requests\StoreMedicinaRequest;
use App\Http\Requests\UpdateMedicinaRequest;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;


class MedicinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            if ($request) {
                $lista = Medicina::select('id', 'nombre', 'apellido', 'edad', 'fecha')->get();   
                return view('medicina_general.listar', compact('lista'));
                // return $lista;
            }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicina_general.crear');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedicinaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicinaRequest $request)
    {
        // objeto->campo bd->request->campo name
        $antecedentes_medicina = new AntecedenteMedicina;
        $medicina = new Medicina;

        $antecedentes_medicina->patologicos=$request->patologicos;
        $antecedentes_medicina->alergicos=$request->alergicos;
        $antecedentes_medicina->toxicos=$request->toxicos;
        $antecedentes_medicina->farmacologicos=$request->farmacologicos;
        $antecedentes_medicina->examen_fisico=$request->examen_fisico;
        $antecedentes_medicina->signos_vitales=$request->signos_vitales;
        $antecedentes_medicina->cabeza_cuello=$request->cabeza_cuello;
        $antecedentes_medicina->cardiopulmonar=$request->cardiopulmonar;
        $antecedentes_medicina->abdominal=$request->abdominal;
        $antecedentes_medicina->genitourinario=$request->genitourinario;
        $antecedentes_medicina->extremidades=$request->extremidades;
        $antecedentes_medicina->neurologico=$request->neurologico;
        $antecedentes_medicina->laboratorio=$request->laboratorio;
        $antecedentes_medicina->analisis=$request->analisis;
        $antecedentes_medicina->diagnostico=$request->diagnostico;
        $antecedentes_medicina->tratamiento=$request->tratamiento;
        $antecedentes_medicina->firma=$request->firma;
        $antecedentes_medicina->saveOrFail();
        
        $medicina->fecha=$request->fecha;
        $medicina->nombre=$request->nombre;
        $medicina->apellido=$request->apellido;
        $medicina->edad=$request->edad;
        $medicina->motivo_consulta=$request->motivo_consulta;
        $medicina->enfermedad_actual=$request->enfermedad_actual;
        $medicina->revision_sistemas=$request->revision_sistemas;
        // traer ultimo id registrado
        $idMed = $antecedentes_medicina->id;
        $medicina->antecedente_medicina_id=$idMed;
        $medicina->documento=$request->documento;
        $medicina->lugar_documento=$request->lugar_documento;
        // $medicina->antecedente_medicina_id=$antecedente_medicina_id;
        // $medicina->documento_id=$request->documento_id;
        $medicina->saveOrFail();

        if ($antecedentes_medicina && $medicina) {
            alert('Title','registro exitoso', 'success');
            return redirect()->route('medicina.create');

        // para enviar datos por apis se debe retornar un array, no haye otra menera debe ser asi
        // return [$documento, $antecedentes_medicina, $medicina];
        }else{
            alert('Title','ocurrio un error', 'danger');
            return redirect()->route('medicina.create');
            // return 'se ha producido un error';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicina  $medicina
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lista = Medicina::select('medicina_general.*','am.*', 'd.*')
        ->join('antecedente_medicina as am', 'medicina_general.id', '=', 'am.id')
        ->join('documento as d', 'medicina_general.id', '=', 'd.id')
        ->findOrFail($id);
        return view('medicina_general.listar', compact('lista'));
        // return $medicina;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicina  $medicina
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicina = Medicina::select('medicina_general.*','am.*', 'd.*')
        ->join('antecedente_medicina as am', 'medicina_general.id', '=', 'am.id')
        ->join('documento as d', 'medicina_general.id', '=', 'd.id')
        ->findOrFail($id);
        return $medicina;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicinaRequest  $request
     * @param  \App\Models\Medicina  $medicina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            // objeto->campo bd->request->campo name-> si es para formularios.
            //  si es para apis es: objeto->campo bd->request->campo bd

            $lista = Medicina::select('medicina_general.*','am.*', 'd.*')
            ->join('antecedente_medicina as am', 'medicina_general.id', '=', 'am.id')
            ->join('documento as d', 'medicina_general.id', '=', 'd.id')
            ->findOrFail($id);

            $lista->update($request->all());
            // return view('medicina_general.actualizar', compact('lista'));
            return $lista;
       
        

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicina  $medicina
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicina = Medicina::destroy($id);
        return $medicina;
    }
    
}
