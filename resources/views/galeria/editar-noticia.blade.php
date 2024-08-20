@extends('adminlte::page')
@section('title', 'Nefrouros|Editar-Noticia')
@section('content')
<style>
    .dirty-dash {
    }
    
    .prueba {
        background-color: #f57d00;
    }
    .gal {
        width: 150px;
        height: 150px;
        float: left;
        margin: 1%;
    }
    .btn-outline-danger {
        background-color: transparent;
        border-radius: 80%;
        border-color: transparent;
        margin-left: 35%;
    }
    .bi-trash {
        color: black;
        width: -150px;
        
    }
    </style>
    <link href="assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <section class="container-fluid" style="background-color: white; height:900px;">
        <header>
            <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

            <div class="container-fluid" style="background-color: white">
                <img src="https://nefrouros.net/assets/img/05.png">

            </div>
        </header>
        <br>

        <hr class="prueba">

        <form method="post" action="{{ route('actualizar-noticia', ['id' => $noticias->id_noticia]) }}"
            enctype="multipart/form-data" class="php-email-form alerta">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" value="{{ $noticias->nombre_noticia }}" name='nombre'
                        id="nombre">
                </div>
                <div class="form-group col-md-6">
                    <label for="categotria">Fecha:</label>
                    <select id="categotria" class="form-control" name='fecha' id="fecha">
                        <option value="null">{{$noticias->fecha_noticia}}</option>
                        <option>Enero</option>
                        <option>Febrero</option>
                        <option>Marzo</option>
                        <option>Abril</option>
                        <option>Mayo</option>
                        <option>Junio</option>
                        <option>Julio</option>
                        <option>Agosto</option>
                        <option>Septiembre</option>
                        <option>Octubre</option>
                        <option>Noviembre</option>
                        <option>Diciembre</option>

                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="detalles">detalles</label>
                    <textarea class="form-control" id="detalles" name="detalles"
                        placeholder="Describa la noticia">{!! $noticias->detalles_noticia !!}</textarea>
                </div>


                <div class="form-group col-md-6">
                    <label for="categotria">Categoria:</label>
                    <select id="categotria" class="form-control" name='categoria' id="categotria">
                        <option value="{{ $noticias->id_categoria }}">{{ $noticias->id_categoria }}</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>

                        @endforeach

                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="imagen_princial">Imagen principal</label>
                    <input type="file" name="imagen_princial[]" id="imagen_princial[]" accept="image/*">
                </div>
                <div class="form-group col-md-6">
                    <label for="imagenes_noticias">Imagenes Noticias</label>
                    <input type="file" multiple name="imagenes_noticias[]" id="imagenes_noticias[]" accept="image/*">
                </div>
                <div class=" col-md-6">
                    <button type="submit" class="btn btn-primary" name='btn_send' style="margin-left: 80%">Enviar </button>
                </div>
            </div>
        </form>
        <div class="col-sm-12">
            <h5>Imagenes de la noticia</h5>
            @foreach ($imagen as $k)


            <div class="gal">

                <div class="dirty-dash">
                    <div>
                        <div class="card">
                            
                                <form action="{{ route('delete.imagenoticia', ['id' => $k->id]) }}" method="POST">
                                    <img src="{{ $k->url }}" alt="" class="img-fluid" style="width:250px">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="btn btn-outline-danger" style="border-radius:80%"><i
                                        class="bi bi-trash"></i></button>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </section>
    <script>
        CKEDITOR.replace('detalles');
    </script>
@endsection
