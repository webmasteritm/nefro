@extends('../layauts.plantilla')
@section('content')
    <br>
    <br>
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title text-center">
                    <h2><span style="color: #F57D00;">NEFROUROS</span> <span style="color: #737373;">CONTACTENOS</span></h2>
                    {{-- <p>Comunícate con nosotros </p> --}}
                </div>
            </div>
        </div>
        <div class="contact-form text-center" style="padding-top: 0%;">
            <div class="contact-form text-center"
                style="padding-top: 0%;
            margin-left: 20%;
            width: 1200px;">
                {{-- <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Ubicaci&oacute;n</h4>
                            <p>En la seccion sedes del menu principal encontrara informaci&oacute;n detallada de la sede de
                                su interes.</p>
                        </div>
                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>envianos un mensaje:</h4>
                            <p>Nefrouros ofrece a todos nuestros pacientes la posibilidad que contactar,enviar sugerencias o
                                pedir citas por medio de nefrouros.net.</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Llamanos:</h4>
                            <p>En la seccion sedes del menu principal encontrara informaci&oacute;n detallada de la sede de
                                su interes.</p>
                        </div>

                    </div>

                </div> --}}

                {{-- Componente de blade view componentn --}}
                <x-formulario-contacto></x-formulario-contacto>
            </div>
        </div>
    </section>
@endsection
@section('js')
    {{-- Componente del script envio --}}
    <x-formulario-script></x-formulario-script>
@endsection
