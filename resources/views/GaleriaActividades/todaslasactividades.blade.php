@extends('../layauts.plantilla')
@section('content')
    <section id="gallery" class="gallery">

        <div class="container">

            <div class="container-fluid">
                <div class="row no-gutters">
                    <h2 style="align-items: center"><span style="color: #737373;">Galeria de actividades: Nuestros pacientes
                            en la sede:
                        </span> <span style="color: #f57d00;">{{ $sede }}</span>
                        </span>
                    </h2>
                    {{-- <nav class="navegacion">
                        <ul class="menu">
                            @foreach ($datos as $detail)
                                <li><a
                                        href="{{ route('actividades.pacientes', ['id' => $detail->id, 'sede' => $detail->sede]) }}">{{ $detail->sede }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav> --}}
                </div <div class="container">
                <div class="container-fluid">
                    <div class="row no-gutters">
                        @foreach ($images as $item)
                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ $item->url }}" class="venobox" data-gall="gallery-item">
                                        <img src="{{ $item->url }}" alt="" class="img-fluid">
                                        <div class="experts_name text-center">
                                            {{-- @foreach ($actividadesimg as $desc)
                                                <h5>{{ $desc->nombre_actividad }}</h5>
                                                <span>{{ $desc->descripcion_actividad }}</span><br>
                                            @endforeach
                                            <span>{{ $sede }}</span> --}}

                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
