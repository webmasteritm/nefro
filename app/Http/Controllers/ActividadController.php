<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Imagen;
use App\Models\Sede;




class ActividadController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { {
            $datos = sede::all();
            $sedesactividad =  DB::table('actividades')
                ->join('sedes', 'actividades.sede_id', '=', 'sedes.id')
                ->orderBy('actividades.id','desc')
                ->paginate(12);
            // =====> misma consulta query builder DB::select('SELECT * FROM actividades INNER JOIN sedes ON actividades.sede_id = sedes.id '); // Actividad::paginate(5);
            return view('galeria.carga-actividad', compact('sedesactividad', 'datos'));
            
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sedes = DB::table('sedes')
        ->get();
        return view('galeria.subir-actividad', compact('sedes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // E===========>>> Ejemplo Iner Join
        DB::select('SELECT * FROM actividades INNER JOIN sedes ON actividades.sede_id = sedes.id ');

        $actividad = new Actividad($request->all());
        $actividad->nombre_actividad = $request->input('actividad');
        $actividad->descripcion_actividad = $request->input('descripcion');
        $actividad->mes=$request->input('mes');
        $actividad->year=$request->input('year');
        $actividad->sede_id = $request->input('sede');
        $imganesurl = [];
        if ($request->hasFile('imagen_principal')) {
            $files          = $request->file("imagen_principal");
            //dd($files);
            foreach ($files as $file) {
                $ruta = $request->input('actividad');
                $datos = str_replace(' ', '-', $ruta);
                $nombrearchivo  = $request->input('sede').'-'.$request->input('mes')
                    . '-' . $datos . '-' . '.' . $file->getClientOriginalExtension();
                $rutadisco = 'img/actividades/sedes/img_principal/';
                $rutafinal = $rutadisco . $datos . '/';
                $file->move(public_path($rutafinal), $nombrearchivo);
                $imganesurl[] = $rutafinal . $nombrearchivo;
            }
        }

        $datosurl = implode("", $imganesurl);

        $actividad->imagen_principal = $datosurl;

        $actividad->save();


        $id_actual = $actividad->id;
        if ($request->hasFile('imagen_actividad')) {
            $file           = $request->file("imagen_actividad");
            foreach ($file as $files) {
                $imagenesurl = new Imagen($request->all());
                $identificador = uniqid();
                $actividad = $request->input('actividad').'-'.$request->input('mes');
                $datos = str_replace(' ', '-', $actividad);
                $nombrearchivo  = $request->input('sede')
                    . '-' . $datos . '-' . $identificador  . '.' . $files->getClientOriginalExtension();
                $ruta = $datos;
                $rutadisco = 'img/actividades/sedes/' . $request->input('sede');
                $rutafinal = ($rutadisco . '/' . $ruta . '/');
                $files->move(public_path($rutafinal), $nombrearchivo);
                $imagenesurl->url = $rutafinal . $nombrearchivo;
                $imagenesurl->id_actividades = $id_actual;

                $imagenesurl->save();
            }
        }


        return  redirect('Carga-actividad');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    // public function edit(Actividad $actividad)
    // {
    //     $actividad = Actividad::all();
    //     return view('galeria.editar-actividad', compact('actividad'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividad $actividad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        //
    }
    public function galeriaActividad($datos, $id)
    {
        DB::select('SELECT * FROM actividades INNER JOIN sedes ON actividades.sede_id = sedes.id ');
        $sede = $datos;
        $idsede = $id;
        $actividadesimg = DB::select('SELECT * FROM imagenes_pacientes INNER JOIN actividades ON WHERE imagenes_pacientes.id_actividades = actividades.sede_id ');
        $actividadesimg = Imagen::select('imagenes_pacientes.id_actividades', 'actividades.id')
            ->join('actividades', 'imagenes_pacientes.id_actividades', '=', 'actividades.id')
            ->get();

        return  view('GaleriaActividades.index', compact('actividadesimg', 'sede'));
    }
}
