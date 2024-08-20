@extends('adminlte::page')
@section('title', 'Nefrouros|Subir-Actividad')
@section('content')
    <link href="assets/img/favicon.png" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <section class="container-fluid" style="background-color: white">
        <header>
            <div class="container-fluid" style="background-color: white">
                <img src="https://nefrouros.net/assets/img/05.png">

            </div>
        </header>
        <br>
        <hr style="background-color: rgb(255, 166, 0)">
        <div id="contact" class="contact">
            <form action="{{ route('imgActividadUpload') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <strong>Imagenes:</strong>
                            <input type="file" multiple name="imagen_actividad[]" id="imagen_actividad[]" accept="image/*">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <strong>Selecione la imagen principal:</strong>
                            <input type="file" name="imagen_principal[]" id="imagen_principal[]" accept="image/*">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <strong>sede:</strong>
                            <select class="custom-select" id="sede" name="sede">
                                <option selected>Seleccionar</option>
                                @foreach ($sedes as $item)
                                    <option value="{{ $item->id }}">{{ $item->sede }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <strong>Mes:</strong>
                            <select class="custom-select" id="mes" name="mes">
                                <option selected>Seleccionar</option>
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
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <strong>Actividad:</strong>
                            <input type="text" name="actividad" class="form-control" placeholder="actividad">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <strong>Año:</strong>
                            <input type="number" name="year" class="form-control"
                                placeholder="Año">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <strong>descripcion:</strong>
                            <input type="text" name="descripcion" class="form-control"
                                placeholder="Descripcion de la actividad">
                        </div>
                    </div>
                    <div class="text-center col-sm-12">
                        <a href="javascript: history.go(-1)" class="btn btn-success">CANCELAR</a>
                        <button type="submit" class="btn btn-primary">ENVIAR</button>

                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
{{-- @section('maxnum')
<script>
    $(function(){
    $("input[type='submit']").click(function(){
        var $fileUpload = $("input[type='file']");
        if (parseInt($fileUpload.get(0).files.length)>7){
         alert("Elija unicamente la 7 mejores imagenes");
        }
    });    
});
</script>


    
@endsection --}}