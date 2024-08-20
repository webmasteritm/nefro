@extends('layauts.plantilla')
@section('content')
    <!--================Blog Area =================-->
    <section id="gallery" class="gallery">

        <div class="container">
            <br>
            <div class="container-fluid">
                <div class="row no-gutters">
                    <h2 style="align-items: center"><span style="color: #737373;">ACTIVIDADES DE NUESTROS </span> <span
                            style="color: #f57d00;"> PACIENTES</span>
                        </span>
                    </h2>

                </div>
            </div>
            <br><br>
            {{-- menu --}}
            {{-- <section>
                <div class="align-items-center row">
                    <div class="col-md-12 pl-md-10">

                        <section class="about-area section-padding-0-0 herodos-area">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    @foreach ($datos as $sede)

                                        <div class="col-6 col-md-5">
                                            <div class="course-1-item ">

                                            </div>
                                            <div class="services-wrap">
                                                <a class="services-list" aria-expanded="false" aria-controls="m"
                                                    class="services-list"
                                                    href="{{ route('actividades.galeria', ['sede' => $sede->sede, 'id' => $sede->id]) }}"
                                                    data-gall="services-wrap"> {{ $sede->sede }}
                                                   
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </section>
                    </div>
                </div>
            </section> --}}
        </div>
    </section>

    <div class="pb-0 site-section">
        <div class="container">
            <div class="mb-3 text-center row justify-content-center">
                <div class="mb-4 text-center col-lg-3">
                </div>
                <div class="row">
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '14', 'sede' => 'Apartadó']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">

                                <div class="thumbnail-classic-figure"><img src="assets/img/apartado.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '14', 'sede' => 'Apartadó']) }}">Sede
                                                Apartadó</a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '19', 'sede' => 'Armenia']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">

                                <div class="thumbnail-classic-figure"><img src="assets/img/armenia.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '19', 'sede' => 'Armenia']) }}">Sede
                                                Armenia</a></h5>
                                    </div>
                                </div>
                            </article>

                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">

                        <a href="{{ route('actividades.galeria', ['id' => '10', 'sede' => 'Barrancabermeja']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">

                                <div class="thumbnail-classic-figure"><img src="assets/img/barranca.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '10', 'sede' => 'Barrancabermeja']) }}">Sede
                                                Barrancabermeja</a></h5>
                                    </div>
                                </div>
                            </article>

                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '2', 'sede' => 'Barranquilla']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">

                                <div class="thumbnail-classic-figure"><img src="assets/img/barranquilla.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '2', 'sede' => 'Barranquilla']) }}">
                                                Sede Barranquilla</a></h5>
                                    </div>
                                </div>
                            </article>

                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '18', 'sede' => 'Bello']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">

                                <div class="thumbnail-classic-figure"><img src="assets/img/bello.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '18', 'sede' => 'Bello']) }}">Sede
                                                Bello</a></h5>
                                    </div>
                                </div>
                            </article>

                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '22', 'sede' => 'Bogota']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">

                                <div class="thumbnail-classic-figure"><img src="assets/img/bogota.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '22', 'sede' => 'Bogota']) }}">Sede
                                                Bogotá</a></h5>
                                    </div>
                                </div>
                            </article>

                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '21', 'sede' => 'Cucuta']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">

                                <div class="thumbnail-classic-figure"><img src="assets/img/cucuta.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '21', 'sede' => 'Cucuta']) }}">Sede
                                                Cúcuta</a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '13', 'sede' => 'Duitama']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/duitama.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '13', 'sede' => 'Duitama']) }}">Sede
                                                Duitama</a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '6', 'sede' => 'Envigado']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/envigado.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '6', 'sede' => 'Envigado']) }}">Sede
                                                Envigado</a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '5', 'sede' => 'Garzon']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/garzon.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '5', 'sede' => 'Garzon']) }}">Sede
                                                Garzón </a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '11', 'sede' => 'Ibague']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/ibague.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '11', 'sede' => 'Ibague']) }}">Sede
                                                Ibagué</a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '15', 'sede' => 'Lorica']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/lorica.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '15', 'sede' => 'Lorica']) }}">Sede
                                                Lorica</a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">

                        <a href="{{ route('actividades.galeria', ['id' => '3', 'sede' => 'Medellin']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">

                                <div class="thumbnail-classic-figure"><img src="assets/img/medellin.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '3', 'sede' => 'Medellin']) }}">Sede
                                                Medellín Nefroprevención</a></h5>
                                    </div>
                                </div>
                            </article>

                        </a>
                    </div>

                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '8', 'sede' => 'Monteria']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/monteria.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '8', 'sede' => 'Monteria']) }}">Sede
                                                Montería</a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '1', 'sede' => 'Neiva']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/neiva.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '1', 'sede' => 'Neiva']) }}">Sede
                                                Neiva</a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    {{-- <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                    <a href="{{ route('actividades.galeria', ['id' => '24', 'sede' => 'Pasto']) }}">
                        <article class="thumbnail thumbnail-classic thumbnail-md">
                            <div class="thumbnail-classic-figure"><img src="assets/img/pasto.webp" alt="" width="420"
                                    height="350" />
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div class="thumbnail-classic-title-wrap">
                                    <h5 class="thumbnail-classic-title"><a
                                            href="{{ route('actividades.galeria', ['id' => '24', 'sede' => 'Pasto']) }}">Sede Pasto</a></h5>
                                </div>
                            </div>
                        </article>
                    </a>
                    </div>  --}}
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '23', 'sede' => 'Pereira']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/PEREIRA04.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '23', 'sede' => 'Pereira']) }}">Sede
                                                Pereira</a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '7', 'sede' => 'Pitalito']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/pitalito.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '7', 'sede' => 'Pitalito']) }}">Sede
                                                Pitalito</a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '20', 'sede' => 'Popayan']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/popayan.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '20', 'sede' => 'Popayan']) }}">Sede
                                                Popayán</a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '16', 'sede' => 'Puertoasis']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">

                                <div class="thumbnail-classic-figure"><img src="assets/img/puertoasis.webp"
                                        alt="" width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '16', 'sede' => 'Puertoasis']) }}">Sede
                                                Puerto Asís</a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '4', 'sede' => 'Rionegro']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">

                                <div class="thumbnail-classic-figure"><img src="assets/img/rionegro.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '4', 'sede' => 'Rionegro']) }}">Sede
                                                Rionegro </a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '12', 'sede' => 'Tunja']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/tunja.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '12', 'sede' => 'Tunja']) }}">Sede
                                                Tunja </a></h5>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '17', 'sede' => 'Valledupar']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">

                                <div class="thumbnail-classic-figure"><img src="assets/img/valledupar.webp"
                                        alt="" width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '17', 'sede' => 'Valledupar']) }}">Sede
                                                Valledupar</a></h5>
                                    </div>
                                </div>
                            </article>

                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '9', 'sede' => 'Yopal']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/yopal.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '9', 'sede' => 'Yopal']) }}">Sede
                                                Yopal</a></h5>
                                    </div>
                                </div>
                            </article>

                        </a>
                    </div>
                    <div class="mb-5 col-lg-4 col-md-6 mb-lg-5">
                        <a href="{{ route('actividades.galeria', ['id' => '26', 'sede' => 'rd']) }}">
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img src="assets/img/SD01.webp" alt=""
                                        width="420" height="350" />
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <h5 class="thumbnail-classic-title"><a
                                                href="{{ route('actividades.galeria', ['id' => '26', 'sede' => 'Santo Domingo (RD)']) }}">Sede
                                                Santo Domingo (RD)</a></h5>
                                    </div>
                                </div>
                            </article>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    {{-- <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination">
                <ul class="pagination">
                    <li class="page-item">
                        {{ $sedesactividad->links() }}
                    </li>

                </ul>
            </ul>
        </nav> --}}





    </div>

    </section>
