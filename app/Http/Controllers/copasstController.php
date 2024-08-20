<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class copasstController extends Controller
{
    public function nefrourosFundacion(){
        return view('copasst.nefrourosFundacion');
    }
    public function nefroServicios(){
        return view('copasst.nefroServicios');
    }
    public function sesSalud(){
        return view('copasst.sesSalud');
    }
    public function Garzon(){
        return view('copasst.nefrourosGarzon');
    }
    public function Envigado(){
        return view('copasst.nefrourosEnvigado');
    }
    public function Rionegro(){
        return view('copasst.nefrourosRionegro');
    }
    public function Pitalito(){
        return view('copasst.nefrourosPitalito');
    }
}
