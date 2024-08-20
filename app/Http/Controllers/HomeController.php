<?php

namespace App\Http\Controllers;

use Actividades;
use App\Models\Actividad;
use Illuminate\Support\Facades\DB;
use App\Models\Imagen;
use App\Models\Sede;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class HomeController extends Controller
{
    public function index()
    {
        return view('inicio');
    }
    public function acercadenosotros()
    {
        return view('acercadenosotros');
    }
    public function servicios()
    {
        return view('servicios');
    }

    public function plataformaEstrategica()
    {
        return view('plataformaEstrategica');
    }
    public function codigosdeEtica()
    {
        return view('codigosdeEtica');
    }
    public function estadosFinancieros()
    {
        return view('estadosFinancieros');
    }
    public function sarlaft()
    {
        return view('Sarlaft');
    }
    public function CalendaiodeActividades()
    {
        $date = date('m');
        $mes = DB::table('calendario_meses')->where('id_mesdate', '=', $date)->get();
        $datos = DB::table('calendario_actividades')
            ->where('id_calendario', '=', $date)
            ->get();
        return view('CalendariodeActividades', compact('datos', 'mes'));
    }
    public function AsociacionUsuarios()
    {
        return view('AsociacionUsuarios');
    }
    public function DerechosyDeberes()
    {
        return view('DerechosyDeberes');
    }

    public function ValoreAgregados()
    {
        return view('ValoreAgregados');
    }
    public function prefuntasFrecuentes()
    {
        return view('prefuntasFrecuentes');
    }
    public function ActividadesPacientes()
    {
        $datos = actividad::all();
        $sedesactividad =  DB::table('actividades')
            ->join('sedes', 'actividades.sede_id', '=', 'sedes.id')
            ->orderBy('actividades.id', 'desc')
            ->paginate(13);
        // =====> misma consulta query builder DB::select('SELECT * FROM actividades INNER JOIN sedes ON actividades.sede_id = sedes.id '); // Actividad::paginate(5);
        return view('actividadesPacientes', compact('sedesactividad', 'datos'));
    }

    public function todasLasactividades($sede, $id)
    {
        // $datos = sede::all();
        // $actividadesimg = DB::table('sedes')
        //     ->join('actividades', 'actividades.sede_id', '=', 'sedes.id')
        //     ->join('imagenes_pacientes', 'imagenes_pacientes.id_actividades', '=', 'actividades.id')
        //     ->orderBy('actividades.id', 'desc')
        //     ->select('actividades.*', 'sedes.*', 'imagenes_pacientes.*')
        //     ->where('sedes.id', '=', $id)
        //     ->paginate(8);
        //  ==============>>>>> misma consulta con query builder  $actividadesimg = DB::select("SELECT * FROM sedes INNER JOIN actividades
        // ON actividades.sede_id = sedes.id INNER JOIN imagenes_pacientes on
        // imagenes_pacientes.id_actividades = actividades.id  AND sedes.id = $id ");
        $actividadesimg = DB::table('actividades')->where('actividades.id', '=', $id)->get();
        $images = DB::table('imagenes_pacientes')->where('imagenes_pacientes.id_actividades', '=', $id)->get();
        return  view('GaleriaActividades.todaslasactividades', compact('actividadesimg', 'datos', 'sede', 'images'));
    }
    public function actividadGaleria($sede, $id)

    {

        $datos = sede::all();
        $actividadesimg =  DB::table('actividades')
            ->orderBy('actividades.id', 'desc')
            ->where('actividades.sede_id', '=', $id)
            ->paginate(10);

        //return $actividadesimg; //DB::select("SELECT * FROM actividades INNER JOIN sedes ON actividades.sede_id = sedes.id and sede_id = $id");
        return  view('GaleriaActividades.index', compact('actividadesimg', 'datos', 'sede'));
    }
}
