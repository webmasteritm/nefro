@extends('layauts.plantilla')
@section('content')
    <br>
    <br>
<div id="contact" class="contact">
    <form action="{{ route('imgActividadUpload') }}" enctype="multipart/form-data" method="POST">
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
                    <select class="custom-select" id="sede" name="sede">
                        <option selected>Cancelar</option>
                        @foreach ($sedes as $item)
                            <option value="{{ $item->id }}">{{ $item->sede }}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <strong>actividad:</strong>
                    <input type="text" name="actividad" class="form-control" placeholder="actividad" >
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <strong>descripcion:</strong>
                    <input type="text" name="descripcion" class="form-control" placeholder="slug" >
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <a href="javascript: history.go(-1)" class="btn btn-success">CANCELAR</a>
                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </div>
        </div>
    </form>
</div>

@endsection
