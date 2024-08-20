<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadosFinancierosController extends Controller
{
    public function Año2019()
    {
        return view('EstadosFinancieros.Año2019');
    }
    public function Año2020()
    {
        return view('EstadosFinancieros.Año2020');
    }
    public function Año2021()
    {
        return view('EstadosFinancieros.Año2021');
    }
    public function Año2022()
    {
        return view('EstadosFinancieros.Año2022');
    }
    public function Año2023()
    {
        return view('EstadosFinancieros.Año2023');
    }
}
