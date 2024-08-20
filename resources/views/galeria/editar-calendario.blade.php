@extends('adminlte::page')
@section('title', 'Nefrouros|Editar-Calendario')
@section('content')
    <link href="assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <section class="container-fluid" style="background-color: white">
        <header>
            <div class="container-fluid" style="background-color: white">
                <img src="https://nefrouros.net/assets/img/05.png">

            </div>
        </header>
        <br>

        <hr class="prueba">
        <form method="post" action="{{ route('actualizar-calendario', ['id' => $actividad->id]) }}"
            class="php-email-form alerta">
            @method('put')
            @csrf




            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">actividad</label>
                    <input type="text" class="form-control" value="{{ $actividad->actividad }}" name='actividad'
                        id="actividad">
                </div>
                <div class="form-group col-md-6">
                    <label for="tetx">Fecha </label>
                    <input type="text" class="form-control" value="{{ $actividad->fecha }}" name="fecha" id="fecha">
                </div>
                <div class="form-group col-md-6">
                    
                        <label for="detalles">detalles</label>
                        <textarea class="form-control" id="detalles" name="detalles"
                            placeholder="Describa la noticia">{{ $actividad->detalles }}</textarea>
                   
                </div>
                {{-- <div class="form-group col-md-6">
                    <label for="idcalendario">Semana:</label>
                    <select id="idcalendario" class="form-control" name='idcalendario' id="idcalendario">
                        <option value=""></option>
                        <option value="">Primera Semana</option>
                        <option value="">Segunda Semana</option>
                        <option value="">Tercera Semana</option>
                        <option value="">Cuarta Semana</option>
                    </select>
                </div> --}}

                <div class="form-group col-md-6">
                    <label for="idcalendario">MES:</label>
                    <select id="idcalendario" class="form-control" name='idcalendario' id="idcalendario">
                        <option value="{{ $actividad->id_calendario }}">{{ $actividad->id_calendario }}</option>
                        @foreach ($meses as $mes)
                            <option value="{{ $mes->id }}">{{ $mes->meses }}</option>
                        @endforeach

                    </select>
                </div>

                <div class=" col-md-12">
                    <button type="submit" class="btn btn-primary" name='btn_send' style="margin-left: 50%">Enviar </button>
                </div>
            </div>



        </form>
    </section>
@endsection
