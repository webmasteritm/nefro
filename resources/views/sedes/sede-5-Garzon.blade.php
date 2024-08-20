@extends('layauts.plantilla')
@section('content')
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(../assets/img/sedes/UR-garzon/4.webp)">
                    <div class="container">
                        <h2><span style="color: #F57D00;">NEFROUROS</span> <span style="color: #737373;">SEDE GARZÓN</span>
                        </h2>
                        <a href="{{ route('citas.home') }}" class="btn-get-started scrollto">Citas en linea</a>

                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(../assets/img/sedes/UR-garzon/5.webp)">
                    <div class="container">
                        <h2><span style="color: #F57D00;">NEFROUROS</span> <span style="color: #737373;">SEDE GARZÓN</span>
                        </h2>
                        <a href="{{ route('citas.home') }}" class="btn-get-started scrollto">Citas en linea</a>

                    </div>
                </div>
                <!-- Slide 3 -->
                {{-- <div class="carousel-item" style="background-image: url(../assets/img/sedes/UR-garzon/3.webp)">
                    <div class="container">
                        <h2><span style="color: #F57D00;">NEFROUROS</span> <span style="color: #737373;">SEDE GARZÓN</span>
                        </h2>
                        <a href="{{ route('citas.home') }}" class="btn-get-started scrollto">Citas en linea</a>

                    </div>
                </div> --}}
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section>
    <!-- End Hero -->

    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <section id="contact" class="contact">

        <div class="container">
            <div class="section-title text-center">
                <h2><span style="color: #F57D00;">NEFROUROS</span> <span style="color: #737373;">SEDE GARZÓN</span></h2>

            </div>
        </div>
        <div class="bg-orange text-white text-center py-3.5" style="background-color: #f57d00;">
            <p style="font-size: 40px;">¿QUÉ HACEMOS POR LA VIDA?</p>
        </div>
        <br>
        <section>
            <div class="container">
                <div class="row text-center">
                    <div class="row text-center">
                        <div class="col-lg-4" style="margin-bottom: 50px;">
                            <a href="https://nefrouros.net/pacientes-actividades-Garz%C3%B3n-413">
                                <img src="{{ asset('assets/img/album/garzon/1.jpg') }}" alt="Foto 1"
                                    style="border-radius: 10px;">
                                <p>Campaña Institucional <br>
                                    La Diálisis Es Vida, Disfruta Tu Vida</p>
                                <p style="color: #F57D00;"><b>Con El Floclor</b></p>
                            </a>
                        </div>

                        <div class="col-lg-4" style="margin-bottom: 50px;">
                            <a href="https://nefrouros.net/pacientes-actividades-Garz%C3%B3n-385">
                                <img src="{{ asset('assets/img/album/garzon/2.jpg') }}" alt="Foto 2"
                                    style="border-radius: 10px;">
                                <p>Campaña Institucional <br>
                                    La Diálisis Es Vida, Disfruta Tu Vida</p>
                                <p style="color: #F57D00;"><b>Con Tu Familia</b></p>
                            </a>
                        </div>

                        <div class="col-lg-4" style="margin-bottom: 50px;">
                            <a href="https://nefrouros.net/pacientes-actividades-Garz%C3%B3n-362">
                                <img src="{{ asset('assets/img/album/garzon/3.jpg') }}" alt="Foto 3"
                                    style="border-radius: 10px;">
                                <p>Día Mundial <br>
                                    Del Riñón</p>
                                <p style="color: #F57D00;"><b>Nefrouros</b></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <iframe style="border:0; width: 100%; height: 350px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.879629139879!2d-75.63406388542609!3d2.1991998983970182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e24d95255f2becb%3A0xc0baeafa07c7952b!2sNefrouros%20Unidad%20Renal%20-Garzon!5e0!3m2!1ses-419!2sco!4v1601752435581!5m2!1ses-419!2sco"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Ubicación:</h4>
                            <p>Calle 7 No. 14-95/97 B/ San Vicente</p>
                            <p>Garzón, Huila</p>
                        </div>
                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>gerenciagarzon@nefrouros.net</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Teléfonos:</h4>
                            <p>8338731</p>
                            <p>317 695 3994</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>


    </section>
    <br>
@endsection
@section('js')
    {{-- Componente del script envio --}}
    <x-formulario-script></x-formulario-script>
@endsection
