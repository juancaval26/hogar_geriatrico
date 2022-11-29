<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use DB;

use App\Http\Requests\StoreNotaRequest;
use App\Http\Requests\UpdateNotaRequest;

use Illuminate\Support\Facades\Gate;
use Barryvdh\DomPDF\Facade\PDF;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request) {
            $lista = Nota::distinct()->get(["nombre", "apellido", "historia_clinica", "sexo"]);
            // $lista = DB::select(DB::raw("SELECT DISTINCT id, nombre, apellido, historia_clinica, sexo  
            // FROM notas"));

                return view('notas.listar', compact('lista'));
        }
    }

    public function imp($id){
        // $sql = DB::table('notas')->select('notas.*')
        // ->find($id);
        // debe quedan en el array para evita errores
        // $lista = [$sql];
        // return $pdf->download('pdf.listar', compact('lista'));

        $lista = DB::table('notas as n')->select('n.*')->where("historia_clinica", "=", $id)
        ->get();
        // dd($lista);
        $pdf = \PDF::loadView('pdf.listar', compact('lista'));
        return $pdf->stream();
        // return view('pdf.listar', compact("lista"));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexo = array('1' => 'Masculino', '2' => 'Femenino');
        return view('notas.crear', compact('sexo'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNotaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // objeto
            $nota = new Nota;
            // objeto->campo bd->request->campo name
            $nota->nombre=$request->nombre;
            $nota->apellido=$request->apellido;
            $nota->historia_clinica=$request->historia;
            $nota->edad=$request->edad;
            $nota->sexo=$request->sexo;
            $nota->modulo=$request->modulo;
            $nota->fecha=$request->fecha;
            $nota->detalle=$request->detalle;
            $nota->saveOrFail();

            if ($nota) {
                alert('Title','registro exitoso', 'success');
                return redirect()->route('nota.create');
            }else{
                alert('Title','ocurrio un error', 'danger');
                return redirect()->route('nota.create');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nota = DB::table('notas')->find($id);
        return $nota;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = DB::table('notas')->find($id);
        return $nota;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNotaRequest  $request
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nota = DB::table('notas')->find($id);
        return $nota;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        //
    }
}
