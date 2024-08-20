@extends('layauts.plantilla')
@section('content')
    <!--================Blog Area =================-->
    <section id="gallery" class="gallery">

        <div class="container">

            <div class="container-fluid">
                <div class="row no-gutters">
                    <h2 style="align-items: center"><span style="color: #737373;">Actividades de nuestros pacientes en la
                            sede: </span> <span style="color: #f57d00;">{{ $sede }}</span>
                        </span>
                    </h2>
                    <nav class="navegacion">
                        <ul class="menu">
                            @foreach ($datos as $detail)
                                <li><a
                                        href="{{ route('actividades.galeria', ['id' => $detail->id, 'sede' => $detail->sede]) }}">{{ $detail->sede }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="container">
                <div class="container-fluid">
                    <div class="row no-gutters">
                        @foreach ($actividadesimg as $item)
                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ route('actividades.pacientes', ['id' => $item->id, 'sede' => $sede]) }}"
                                        class="" data-gall="gallery-item">
                                        <img src="{{ $item->imagen_principal }}" alt="" class="img-fluid">
                                        <div class="experts_name text-center">
                                            <span>{{ $item->mes }}</span>
                                            <span>{{ $item->year }}</span>
                                            <h5>{{ $item->nombre_actividad }}</h5>
                                            {{-- <span> {{ $sede }}<br></span> --}}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                    <ul class="pagination">
                        <li class="page-item">
                            {{ $actividadesimg->links() }}
                        </li>

                    </ul>
                </ul>
            </nav>
        </div>
    </section>
@endsection
