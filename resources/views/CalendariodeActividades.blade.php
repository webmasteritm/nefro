@extends('layauts.plantilla')
@section('content')
    <div style="text-align: center; margin-top: 20px;">
        <img src="{{ asset('assets/img/banners/calendario-de-actividades.jpg') }}" alt="Descripción de la imagen"
            style="max-width: 100%; height: 1%;">
    </div>
    <br>
    <div class="bg-orange text-white text-center py-1" style="background-color: #f57d00; width: 100%; height: 30px;">

        <!-- Contenido de la franja naranja -->
    </div>
    <section id="departments" class="departments">
        <div class="container">
            <div class="section-title text-center
            ">
                <br>
                <h2><span style="color: #737373;">CALENDARIO DE </span> <span style="color: #f57d00;">ACTIVIDADES</span>
                    </span>
                </h2>
                <i class="icofont-ui-calendar"></i>
                @foreach ($mes as $meses)
                    <p>{{ $meses->id_mesdate }}</p>
                    <p>{{ $meses->meses }}</p>
                @endforeach
            </div>
            <div class="row">

                <div class="col-lg-3">

                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            @foreach ($datos as $actividad)
                                <a class="nav-link" data-toggle="tab" href="#tab-{{ $actividad->id }}"><i
                                        class="icofont-ui-next"></i>&nbsp;{{ $actividad->fecha }}:
                                    {{ $actividad->actividad }}</a>
                            @endforeach

                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        @foreach ($datos as $actividad)
                            <div class="tab-pane active" id="tab-{{ $actividad->id }}">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Actividad : {{ $actividad->actividad }}</h3>
                                        </h3>
                                        <p class="font-poppins ">


                                        <p><a class="fin" href=""><i
                                                    class="icofont-check"></i>&nbsp;{{ $actividad->detalles }}</a></p>
                                        <h5 style="color: #737373;"><i class="icofont-wall-clock"> {{ $actividad->fecha }}
                                            </i></h5>
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>


        <br><br><br><br><br><br>
    </section>
@endsection
