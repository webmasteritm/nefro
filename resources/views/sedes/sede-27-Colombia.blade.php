@extends('layauts.plantilla')
@section('content')

    <section>

        {{-- <div style="text-align: center; margin-top: 20px;">
            <img src="{{ asset('assets/img/banners/sede-colombia.jpg') }}" alt="Descripción de la imagen"
                style="max-width: 100%; height: 100%;">
        </div>
        <br>
        <div class="bg-orange text-white text-center py-1" style="background-color: #f57d00; width: 100%; height: 30px;">

            <!-- Contenido de la franja naranja -->
        </div> --}}
        <br><br><br><br><br><br>
        <h2 class="text-center text-mute"><span style="color: #737373;"><b>NUESTRAS</b> </span> <span
                style="color: #f57d00;"><b>SEDES</b></span> </span>
        </h2>
        <p class="text-center text-mute">NEFROUROS Unidad Renal cuenta con sedes a nivel nacional permitiéndonos prestar
            servicios con alta calidad científica de la mano de la más alta calidez humana en cualquier parte del país..</p>
        <div class="site-section pb-0">
            <div class="container">
                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-lg-4 mb-5 text-center">
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '14', 'sede' => 'Apartado']) }}"><img
                                            src="assets/img/sedes/UR-apartado/FACHADAA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '14', 'sede' => 'Apartado']) }}">Sede
                                                Apartadó</a>
                                        </h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '19', 'sede' => 'armenia']) }}"><img
                                            src="assets/img/sedes/UR-armenia/FACHADA-1.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '19', 'sede' => 'armenia']) }}">Sede
                                                Armenia</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '10', 'sede' => 'Barrancabermeja']) }}"><img
                                            src="assets/img/sedes/UR-barrancabermeja/FACHADA.webp" alt=""
                                            width="420" height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '10', 'sede' => 'Barrancabermeja']) }}">Sede
                                                Barrancabermeja</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '2', 'sede' => 'Barranquilla']) }}"><img
                                            src="assets/img/sedes/UR-barranquilla/FACHADA.webp" alt=""
                                            width="420" height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '2', 'sede' => 'Barranquilla']) }}">Sede
                                                Barranquilla</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '18', 'sede' => 'bello']) }}"><img
                                            src="assets/img/sedes/UR-bello/FACHADAA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '18', 'sede' => 'bello']) }}">Sede
                                                Bello</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '22', 'sede' => 'bogota']) }}"><img
                                            src="assets/img/sedes/UR-bogota/FACHADA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '22', 'sede' => 'bogota']) }}">Sede
                                                Bogotá</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '21', 'sede' => 'cucuta']) }}"><img
                                            src="assets/img/sedes/UR-cucuta/FACHADAA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '21', 'sede' => 'cucuta']) }}">Sede
                                                Cúcuta</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '13', 'sede' => 'Duitama']) }}"><img
                                            src="assets/img/sedes/UR-duitama/FACHADAA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '13', 'sede' => 'Duitama']) }}">Sede
                                                Duitama</a>
                                        </h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '6', 'sede' => 'Envigado']) }}"><img
                                            src="assets/img/sedes/UR-envigado/FACHADA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '6', 'sede' => 'Envigado']) }}">Sede
                                                Envigado</a>
                                        </h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '5', 'sede' => 'Garzon']) }}"><img
                                            src="assets/img/sedes/UR-garzon/FACHADAA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '5', 'sede' => 'Garzon']) }}">Sede
                                                Garzón</a>
                                        </h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '11', 'sede' => 'Ibague']) }}"><img
                                            src="assets/img/sedes/UR-ibague/FACHADA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '11', 'sede' => 'Ibague']) }}">Sede
                                                Ibagué</a>
                                        </h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '15', 'sede' => 'Lorica']) }}"><img
                                            src="assets/img/sedes/UR-lorica/FACHADAA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '15', 'sede' => 'Lorica']) }}">Sede
                                                Lorica</a>
                                        </h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '25', 'sede' => 'Medellin']) }}"><img
                                            src="assets/img/sedes/UR-Medellin/FACHADA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '25', 'sede' => 'Medellin']) }}">Sede
                                                Medellín</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div> --}}
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '3', 'sede' => 'NefroprevencionMedellin']) }}"><img
                                            src="assets/img/sedes/Nefroprevencion/NEFRO.webp" alt=""
                                            width="420" height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '3', 'sede' => 'NefroprevencionMedellin']) }}">Sede
                                                Nefroprevención
                                                Medellín</a>
                                        </h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '8', 'sede' => 'Monteria']) }}"><img
                                            src="assets/img/sedes/UR-monteria/FACHADA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '8', 'sede' => 'Monteria']) }}">Sede
                                                Monteria</a>
                                        </h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '1', 'sede' => 'Neiva']) }}"><img
                                            src="assets/img/sedes/UR-neiva/FACHADA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '1', 'sede' => 'Neiva']) }}">Sede
                                                Neiva</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '24', 'sede' => 'Pasto']) }}"><img
                                            src="assets/img/sedes/UR-pasto/FACHADA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '24', 'sede' => 'Pasto']) }}">Sede
                                                Pasto</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '23', 'sede' => 'pereira']) }}"><img
                                            src="assets/img/sedes/UR-pereira/FACHADAA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '23', 'sede' => 'pereira']) }}">Sede
                                                Pereira</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '7', 'sede' => 'Pitalito']) }}"><img
                                            src="assets/img/sedes/UR-pitalito/FACHADA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '7', 'sede' => 'Pitalito']) }}">Sede
                                                Pitalito</a>
                                        </h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '20', 'sede' => 'popayan']) }}"><img
                                            src="assets/img/sedes/UR-popayan/FACHADA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '20', 'sede' => 'popayan']) }}">Sede
                                                Popayán</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '16', 'sede' => 'Puertoasis']) }}"><img
                                            src="assets/img/sedes/UR-puertoasis/FACHADA.webp" alt=""
                                            width="420" height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '16', 'sede' => 'Puertoasis']) }}">Sede
                                                Puerto
                                                Asís</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '4', 'sede' => 'Rionegro']) }}"><img
                                            src="assets/img/sedes/UR-rionegro/FACHADA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '4', 'sede' => 'Rionegro']) }}">Sede
                                                Rionegro</a>
                                        </h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '12', 'sede' => 'Tunja']) }}"><img
                                            src="assets/img/sedes/UR-tunja/FACHADAA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '12', 'sede' => 'Tunja']) }}">Sede
                                                Tunja</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '17', 'sede' => 'Valledupar']) }}"><img
                                            src="assets/img/sedes/UR-valledupar/FACHADA.webp" alt=""
                                            width="420" height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '17', 'sede' => 'Valledupar']) }}">Sede
                                                Valledupar</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '9', 'sede' => 'Yopal']) }}"><img
                                            src="assets/img/sedes/UR-yopal/FACHADA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '9', 'sede' => 'Yopal']) }}">Sede
                                                Yopal</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '26', 'sede' => 'rd']) }}"><img
                                            src="assets/img/sedes/UR-rd/FACHADA.webp" alt="" width="420"
                                            height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '26', 'sede' => 'rd']) }}">Sede
                                                Santo Domingo (RD)</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
