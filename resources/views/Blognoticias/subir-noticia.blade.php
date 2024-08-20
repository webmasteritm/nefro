@extends('adminlte::page')
@section('title', 'Nefrouros|Subir-Noticia')
@section('content')
    <style>
        .prueba {
            background-color: #f57d00;
        }

    </style>
    <link href="assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

    <section class="container-fluid" style="background-color: white">
        <header>
            <div class="container-fluid" style="background-color: white">
                <img src="https://nefrouros.net/assets/img/05.png">

            </div>
        </header>
        <br>
        <hr class="prueba">
        <form method="post" action="{{ route('update.blog') }}" enctype="multipart/form-data"
            class="php-email-form alerta">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre de la noticia" name='nombre' id="nombre">
                </div>
                <div class="form-group col-md-6">
                    <label for="categotria">Fecha:</label>
                    <select id="categotria" class="form-control" name='fecha' id="fecha">
                        <option value="null">Seleccionar</option>
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
                        placeholder="Describa la noticia"></textarea>
                </div>


                <div class="form-group col-md-6">
                    <label for="categotria">Categoria:</label>
                    <select id="categotria" class="form-control" name='categoria' id="categotria">
                        <option value="null">Seleccionar</option>
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
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-success" name='btn_send'>Enviar </button>
                </div>
            </div>
        </form>
    </section>
    <script>
        CKEDITOR.replace('detalles');
    </script>
@endsection
