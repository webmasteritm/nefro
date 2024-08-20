@extends('layauts.plantilla')
@section('content')
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image:url(../assets/img/sedes/UR-barrancabermeja/5.webp)">
                    <div class="container">
                        <h2><span style="color: #F57D00;">NEFROUROS</span> <span style="color: #737373;">SEDE
                                BARRANCABERMEJA</span></h2>

                        <a href="{{ route('citas.home') }}" class="btn-get-started scrollto">Citas en linea</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(../assets/img/sedes/UR-barrancabermeja/6.webp)">
                    <div class="container">
                        <h2><span style="color: #F57D00;">NEFROUROS</span> <span style="color: #737373;">SEDE
                                BARRANCABERMEJA</span></h2>

                        <a href="{{ route('citas.home') }}" class="btn-get-started scrollto">Citas en linea</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(../assets/img/sedes/UR-barrancabermeja/7.webp)">
                    <div class="container">
                        <h2><span style="color: #F57D00;">NEFROUROS</span> <span style="color: #737373;">SEDE
                                BARRANCABERMEJA</span></h2>

                        <a href="{{ route('citas.home') }}" class="btn-get-started scrollto">Citas en linea</a>
                    </div>
                </div>

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
                <h2><span style="color: #F57D00;">NEFROUROS</span> <span style="color: #737373;">SEDE BARRANCABERMEJA</span>
                </h2>

            </div>
        </div>
        <div class="bg-orange text-white text-center py-3.5" style="background-color: #f57d00;">
            <p style="font-size: 40px;">¿QUÉ HACEMOS POR LA VIDA?</p>
        </div>
        <br>
        <section>
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-4" style="margin-bottom: 50px;">
                        <a href="https://nefrouros.net/pacientes-actividades-Barrancabermeja-406">
                            <img src="{{ asset('assets/img/album/barrancabermeja/1.jpg') }}" alt="Foto 1"
                                style="border-radius: 10px;">
                            <p>Campaña Institucional <br>
                                La Diálisis Es Vida, Disfruta Tu Vida</p>
                            <p style="color: #F57D00;"><b>Con El Floclor</b></p>
                        </a>
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 50px;">
                        <a href="https://nefrouros.net/pacientes-actividades-Barrancabermeja-379">
                            <img src="{{ asset('assets/img/album/barrancabermeja/2.jpg') }}" abarrancabermeja 2"
                                style="border-radius: 10px;">
                            <p>Campaña Institucional <br>
                                La Diálisis Es Vida, Disfruta Tu Vida</p>
                            <p style="color: #F57D00;"><b>Con Tu Familia</b></p>
                        </a>
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 50px;">
                        <a href="https://nefrouros.net/pacientes-actividades-Barrancabermeja-357">
                            <img src="{{ asset('assets/img/album/barrancabermeja/3.jpg') }}" alt="Foto 3"
                                style="border-radius: 10px;">
                            <p>Día Mundial <br>
                                Del Riñón</p>
                            <p style="color: #F57D00;"><b>Nefrouros</b></p>
                        </a>
                    </div>
                    <div class="col-lg-4" style="margin-bottom: 50px;">
                        <a href="https://nefrouros.net/pacientes-actividades-Barrancabermeja-426">
                            <img src="{{ asset('assets/img/album/barrancabermeja/4.webp') }}" alt="Foto 4"
                                style="border-radius: 10px;">
                            <p>Campaña Institucional <br>
                                La Diálisis Es Vida </p>
                            <p style="color: #F57D00;"><b>Disruta Tu Vida Con Dios</b></p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <iframe style="border:0; width: 100%; height: 350px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5874852832876!2d-73.85555506121807!3d7.057660191787688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e42eca5b979a649%3A0x7ba5050fec7c54b4!2sCra.%2022%20%2347-8%2C%20Barrancabermeja%2C%20Santander!5e0!3m2!1ses!2sco!4v1639149942279!5m2!1ses!2sco"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Ubicación:</h4>
                            <p>Carrera 22 #47-8</p>
                            <p>Barrancabermeja, Santander</p>
                        </div>
                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>gerencianefroservicios@nefrouros.net</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Teléfonos:</h4>
                            <p>6076262937</p>
                            <p>320 273 9828</p>
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
