<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sede;
use App\Models\Actividad;
use App\Models\Blog;
use App\Models\blogcategoria;
use App\Models\blogImagen;
use App\Models\Imagen;
use App\Models\CalendarioActividades;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use Illuminate\Http\rename;
use Illuminate\Support\Facades\Storage;
use Sedes;

class DashController extends Controller
// -----------------------------------------------------ACTIVIDADES---------------------------------------------------------
{
    public function cargaactividad()

    {
        $datos =  DB::table('sedes')
            ->join('actividades',  'sedes.id', '=', 'actividades.sede_id')
            ->orderBy('actividades.id', 'desc')
            ->get();
        return view('galeria.carga-actividad', compact('datos'));
    }

    public function edit($sede,$id)
    {
        $sede= Sede::all();
        $actividad = Actividad::find($id);
        $imagen=  DB::table('actividades')
        ->join('imagenes_pacientes', 'imagenes_pacientes.id_actividades', '=', 'actividades.id')
        ->where('actividades.id', '=', $id)
         ->get();
     
        return  view('galeria.editar-actividad', compact('sede','actividad','imagen' ));
       
    }
    public function update(Request $request,$id)
    {
        $actividad=Actividad::find($id);
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

    public function destroy($sede,$id)
    {
        $actividad = Actividad::find($id);
        $datos = str_replace(' ', '-', $actividad->nombre_actividad);
        $link = 'img/actividades/sedes' . '/' . $actividad->sede_id . '/' . $datos .'-'. $actividad->mes;
      
        File::deleteDirectory(public_path($link));
    //   return $link;
        $actividad->delete();
        // dd($link);


        // $actividad = Actividad::find($id);
        // $actividad->delete(); sirve NO TOCAR
        // return  $datos;
        return  redirect('Carga-actividad');

    }

    public function destroyimg(Actividad $id)
    {
           File::delete(public_path($id->imagen_principal));
           $id->delete();
        
        return "imagen eliminada con exito";
    }

    
    public function destroyprin( Imagen $id)
    {
        File::delete(public_path($id->url));
        $id->delete();
        
        return "imagen eliminada con exito";
    
    }
    // -----------------------------------------------------------------------FIN ACTIVIDAD-------------------------------------------

    // -----------------------------------------------------------------------CALENDARIO-------------------------------------------
    public function cargacalendario()

    {


        $datos = DB::table('calendario_actividades')
            ->get();
        return view('galeria.carga-calendario', compact('datos'));
      

    }
    
    public function editarcalendario($id)
    {

        $meses= DB::table('calendario_meses')->get();
        $actividad = CalendarioActividades::find($id);
        
        return  view('galeria.editar-calendario', compact('actividad', 'meses' ));
       
    }
    public function updatecalem(Request $request,$id)
    {
        $actividad = CalendarioActividades::find($id);
        $actividad->actividad = $request->input('actividad');
        $actividad->detalles =  $request->input('detalles');
        $actividad->fecha = $request->input('fecha');
        $actividad->id_calendario = $request->input('idcalendario');
        $actividad->save();
        return redirect('Carga-calendario');
    }

    public function destroycalem($id)
    {

        $actividad = CalendarioActividades::find($id);
        $actividad->delete();
        
        return redirect('Carga-calendario');
       
    }
     // -----------------------------------------------------------------------FIN CALENDARIO-------------------------------------------

    //-------------------------------------------------------------------------NOTICIAS---------------------------------------------------
    public function carganoticias()

    {
        $noticias= Blog::all();

        return view('galeria.carga-noticias',compact('noticias'));
      

    }
    public function editarnoticia($id)
    {
      
        $categorias= DB::table('blog_categorias')->get();
        $noticias=Blog::find($id);
        $imagen=  DB::table('blog_noticias')
        ->join('blog_imagenes', 'blog_imagenes.id_noticia', '=', 'blog_noticias.id_noticia')
        ->where('blog_noticias.id_noticia', '=', $id)
         ->get();

      return view('galeria.editar-noticia', compact('noticias','categorias','imagen'));      
    }
    public function updatenoticia(Request $request,$id)
    {
        $noticia=Blog::find($id);
        $noticia->nombre_noticia = $request->input('nombre');
        $noticia->detalles_noticia = $request->input('detalles');
        $noticia->fecha_noticia = $request->input('fecha');
        $noticia->id_categoria = $request->input('categoria');
        $imganesurl = [];
        if ($request->hasFile('imagen_princial')) {
            $files          = $request->file("imagen_princial");
            foreach ($files as $file) {
                $ruta = $request->input('categoria');
                $fecha = uniqid();
                $datos = str_replace(' ', '-', $ruta);
                $nombrearchivo  = $request->input('categoria')
                    . '-' . $datos . '-' . $fecha . '.' . $file->getClientOriginalExtension();
                $rutadisco = 'img/noticias/sedes/img_princiapal/';
                $rutafinal = $rutadisco . $datos . '/';
                $file->move(public_path($rutafinal), $nombrearchivo);
                $imganesurl[] = $rutafinal . $nombrearchivo;
            }
        }

        $datosurl = implode("", $imganesurl);
        $noticia->imagen_principal = $datosurl;
        $noticia->save();

        $id_actual = $noticia->id_noticia;
        if ($request->hasFile('imagenes_noticias')) {
            $file           = $request->file("imagenes_noticias");
            // dd($id_actual);
            foreach ($file as $files) {
                $imagenesurl = new blogImagen($request->all());
                $fecha = uniqid();
                $actividad = $request->input('nombre').'-'.$request->input('fecha');
                $datos = str_replace(' ', '-', $actividad);
                $nombrearchivo  = $request->input('categoria')
                    . '-' . $datos . '-' . $fecha . '.' . $files->getClientOriginalExtension();
                $ruta = $datos;
                $rutadisco = 'img/noticias/categoria/'. $request->input('categoria');
                $rutafinal = ($rutadisco . '/' . $ruta . '/');
                $files->move(public_path($rutafinal), $nombrearchivo);
                $imagenesurl->url = $rutafinal . $nombrearchivo;
                $imagenesurl->id_noticia = $id_actual;

                $imagenesurl->save();

            }
        }
        return redirect('Carga-noticias');
    }
    public function destroynoticia($id)
    {
        $noticia = Blog::find($id);
        $datos = str_replace(' ', '-', $noticia->nombre_noticia);
        $link='img/noticias/categoria'.'/'.$noticia->id_categoria.'/'.$datos.'-'.$noticia->fecha_noticia;
        
        File::deleteDirectory(public_path($link));
    //   return $link;
        // $noticias=Blog::find($id);
        $noticia->delete(); 
        // dd($link);
        // SIRVE NO TOCAR
        return redirect('Carga-noticias');
    }
    public function destroyimgnews(blogImagen $id)
    {
        File::delete(public_path($id->url));
        $id->delete();
        
        return "imagen eliminada con exito";
    
    }
    
}

 //-------------------------------------------------------------------------FIN NOTICIAS---------------------------------------------------