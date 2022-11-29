<?php

namespace App\Http\Controllers;

use App\Models\Evolucion;
use App\Http\Requests\StoreEvolucionRequest;
use App\Http\Requests\UpdateEvolucionRequest;

class EvolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('valoracionFisica.crear');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return "hola";
        // return view('valoracionFisica.crear');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEvolucionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEvolucionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evolucion  $evolucion
     * @return \Illuminate\Http\Response
     */
    public function show(Evolucion $evolucion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evolucion  $evolucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Evolucion $evolucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEvolucionRequest  $request
     * @param  \App\Models\Evolucion  $evolucion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEvolucionRequest $request, Evolucion $evolucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evolucion  $evolucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evolucion $evolucion)
    {
        //
    }
}
