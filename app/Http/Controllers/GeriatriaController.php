<?php

namespace App\Http\Controllers;

use App\Models\Geriatria;
use DB;

use App\Http\Requests\StoreGeriatriaRequest;
use App\Http\Requests\UpdateGeriatriaRequest;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;


class GeriatriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $lista = Geriatria::select('id', 'nombre', 'apellido', 'edad', 'ciudad', 'identificacion')->get();   
            return view('geriatria.listar', compact('lista'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('geriatria.crear');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGeriatriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGeriatriaRequest $request)
    {
           // objeto
           $geriatria = new Geriatria;
           // objeto->campo bd->request->campo name
           $geriatria->fecha_actual=$request->fecha_a;
           $geriatria->impresion_general=$request->impresion_g;
           $geriatria->nombre=$request->nombre;
           $geriatria->apellido=$request->apellido;
           $geriatria->sexo=$request->sexo;
           $geriatria->edad=$request->edad;
           $geriatria->fecha_nacimiento=$request->fecha_n;
           $geriatria->estado_civil=$request->estado_c;
           $geriatria->ocupacion=$request->ocupacion;
           $geriatria->identificacion=$request->iden;
           $geriatria->rh=$request->rh;
           $geriatria->etnia=$request->etnia;
           $geriatria->desplazado=$request->desp;
           $geriatria->ciudad=$request->ciudad;
           $geriatria->responsable=$request->resp;
           $geriatria->antecedentes_geriatria_id=$request->antecedentes_id;
           $geriatria->saveOrFail();

           if ($geriatria) {
               alert('Title','registro exitoso', 'success');
               return redirect()->route('geriatria.create');
           }else{
               alert('Title','ocurrio un error', 'danger');
               return redirect()->route('geriatria.create');
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Geriatria  $geriatria
     * @return \Illuminate\Http\Response
     */
    public function show(Geriatria $geriatria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Geriatria  $geriatria
     * @return \Illuminate\Http\Response
     */
    public function edit(Geriatria $geriatria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGeriatriaRequest  $request
     * @param  \App\Models\Geriatria  $geriatria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGeriatriaRequest $request, Geriatria $geriatria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Geriatria  $geriatria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Geriatria $geriatria)
    {
        //
    }
}
