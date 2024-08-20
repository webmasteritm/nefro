<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Blog;
use App\Models\blogcategoria;
use App\Models\blogImagen;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saludables_blog = DB::table('blog_noticias')
            ->join('blog_categorias', 'blog_noticias.id_categoria', '=', 'blog_categorias.id')
            ->select('blog_noticias.*', 'blog_categorias.*')
            ->orderBy('blog_noticias.id_noticia', 'desc')
            ->where('blog_noticias.id_categoria', '=', 1)
            ->paginate(3);

        $pacientes_blog = DB::table('blog_noticias')
            ->join('blog_categorias', 'blog_noticias.id_categoria', '=', 'blog_categorias.id')
            ->select('blog_noticias.*', 'blog_categorias.*')
            ->orderBy('blog_noticias.id_noticia', 'desc')
            ->where('blog_noticias.id_categoria', '=', 2)
            ->paginate(2);


        $covid_blog = DB::table('blog_noticias')
            ->join('blog_categorias', 'blog_noticias.id_categoria', '=', 'blog_categorias.id')
            ->select('blog_noticias.*', 'blog_categorias.*')
            ->orderBy('blog_noticias.id_noticia', 'desc')
            ->where('blog_noticias.id_categoria', '=', 3)
            ->paginate(3);

        $novedades_blog = DB::table('blog_noticias')
            ->join('blog_categorias', 'blog_noticias.id_categoria', '=', 'blog_categorias.id')
            ->select('blog_noticias.*', 'blog_categorias.*')
            ->orderBy('blog_noticias.id_noticia', 'desc')
            ->where('blog_noticias.id_categoria', '=', 4)
            ->paginate(3);


        return view('Blognoticias.index', compact('saludables_blog', 'pacientes_blog', 'covid_blog','novedades_blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()


    {
        $categorias = blogcategoria::all();
        return view('Blognoticias.subir-noticia', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = new Blog($request->all());
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
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
    public function blogdetalles($id, $categoria)
    {

        $detalles_blog = DB::table('blog_noticias')
            ->where('blog_noticias.id_noticia', '=', $id)
            ->paginate(1);
        $imagenes_blog = DB::table('blog_imagenes')
            ->where('blog_imagenes.id_noticia', '=', $id)
            ->get();
        $reciente_blog = DB::table('blog_noticias')
            ->latest()
            ->take(5)
            ->get();
        return view('Blognoticias.index-detalles', compact('detalles_blog', 'imagenes_blog', 'reciente_blog', 'categoria'));
    }
    public function novedad($id, $categoria)
    {
        $novedad_blog = DB::table('blog_noticias')
            ->where('blog_noticias.id_noticia', '=', $id)
            ->paginate(1);
        $img_blog = DB::table('blog_imagenes')
            ->where('blog_imagenes.id_noticia', '=', $id)
            ->get();
            $reciente_blog = DB::table('blog_noticias')
            ->latest()
            ->take(5)
            ->get();
            return view('Blognoticias.novedad-detalles', compact('novedad_blog', 'img_blog','reciente_blog','categoria'));
    }
}
