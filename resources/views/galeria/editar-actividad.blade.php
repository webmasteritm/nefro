@extends('adminlte::page')
@section('title', 'Nefrouros|Editar-Actividades')
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
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <section class="container-fluid" style="background-color: white; height:900px;">
        <header>
            <div class="container-fluid" style="background-color: white">
                <img src="https://nefrouros.net/assets/img/05.png">

            </div>
        </header>
        <br>

        <hr class="prueba">
        <div id="contact" class="contact">

            <form action="{{ route('actualizar.actividad', ['id' => $actividad->id]) }}" enctype="multipart/form-data"
                method="POST">
                @method('PUT')
                @csrf

                <div class="row">




                    <div class="col-sm-12">
                        <div class="form-group">
                            <strong>Imagen:</strong>
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
                            <select class="custom-select" id="sede" name="sede" value="dasdsa">
                                <option selected>{{ $actividad->sede_id }}</option>
                                @foreach ($sede as $item)
                                    <option value="{{ $item->id }}">{{ $item->sede }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <strong>Mes:</strong>
                            <select class="custom-select" id="mes" name="mes">
                                <option selected>{{$actividad->mes}}</option>
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
                           <strong>Año:</strong>
                           <input type="number" name="year" class="form-control"
                                value="{{ $actividad->year }}">

                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <strong>Actividad:</strong>
                            <input type="text" name="actividad" class="form-control"
                                value="{{ $actividad->nombre_actividad }}">

                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="form-group">
                            <strong>descripcion:</strong>
                            <input type="text" name="descripcion" class="form-control"
                                value="{{ $actividad->descripcion_actividad }}">
                        </div>
                    </div>






                    <div class="col-sm-12 text-center">
                        <a href="javascript: history.go(-1)" class="btn btn-success">CANCELAR</a>
                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-sm-12">
                    <h4>Imagenes Actividad</h4>
                    @foreach ($imagen as $k)


                        <div>

                            <div class="dirty-dash">
                                <div class="gal">
                                    <div class="card">

                                        <form action="{{ route('delete.imagen', ['id' => $k->id]) }}" method="POST">
                                            <img src="{{ $k->url }}" alt="" class="img-fluid">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="btn btn-outline-danger"><i
                                                    class="bi bi-trash"></i></button>

                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
         

        </div>
        {{-- <div class="row">
            <div class="col-sm-12">
                <h4>Imagen Principal</h4>



                <div class="gal">

                    <div class="dirty-dash">
                        <div>
                            <div class="card">

                                <form action="{{ route('delete.imagenprin', ['id' => $actividad->id]) }}" method="POST">
                                    <img src="{{ $actividad->imagen_principal }}" alt="" class="img-fluid">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="btn btn-outline-danger" style="border-radius:80%"><i
                                            class="bi bi-trash"></i></button>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div> --}}

    </section>




@endsection
