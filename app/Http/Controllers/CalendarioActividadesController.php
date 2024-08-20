<?php

namespace App\Http\Controllers;

use App\Models\CalendarioActividades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class CalendarioActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meses = DB::table('calendario_meses')->get();
        return view('calendario.index', compact('meses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $calendario = new CalendarioActividades();
        $calendario->actividad = $request->input('actividad');
        $calendario->detalles =  $request->input('detalles');
        $calendario->fecha = $request->input('fecha');
        $calendario->id_calendario = $request->input('idcalendario');
        $calendario->save();
        return "su calendario fue agregado";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CalendarioActividades  $calendarioActividades
     * @return \Illuminate\Http\Response
     */
    public function show(CalendarioActividades $calendarioActividades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CalendarioActividades  $calendarioActividades
     * @return \Illuminate\Http\Response
     */
    public function edit(CalendarioActividades $calendarioActividades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CalendarioActividades  $calendarioActividades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalendarioActividades $calendarioActividades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CalendarioActividades  $calendarioActividades
     * @return \Illuminate\Http\Response
     */
    public function destroy(CalendarioActividades $calendarioActividades)
    {
        //
    }
}
