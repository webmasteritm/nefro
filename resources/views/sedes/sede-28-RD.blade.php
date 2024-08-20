@extends('layauts.plantilla')
@section('content')
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>


            <a class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(../assets/img/VIDEO.mp4)">
                    <div class="container">


                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(../assets/img/VIDEO.mp4)">
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(../assets/img/sedes/UR-rd/3.webp)">
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

    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <div>
        <div class="navbar navbar-expand-lg navbar-dark justify-content-center" style="background-color: #F57D00;">
            <p class="navbar-brand" href="#">NEFROUROS EL MEJOR LUGAR DONDE UN PACIENTE CON
                ENFERMEDAD RENAL PUEDE
                ESTAR</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="info">

                    <iframe style=""
                        src="https://embed.waze.com/iframe?zoom=17&lat=18.484524&lon=-69.916574&ct=livemap" width="600"
                        height="300" allowfullscreen></iframe>


                </div>
            </div>
            <div class="col">
                <x-formulario-contacto></x-formulario-contacto>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-4">


        </div>

        </>

        {{-- <section id="services" class="services" style="margin-top: 20px">
        <div class="container">
            <div class="section-title">
                <h2><span style="color: #737373;">NUESTROS </span> <span style="color: #f57d00;">SERVICIOS </span></h2>
                <p></p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h6><a href="#" data-toggle="modal" data-target="#servicio1">Hemodialisis</a></h6>
                        <p>
                            <!--mensajes de texto-->
                        </p>
                    </div>
                </div>
                <!-- Modal 1 -->
                <div class="modal fade" id="servicio1" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="servicio1">Hemodialisis
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: justify;">EJEMPLO DE HEMODIALISIS </p>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary " data-dismiss="modal">Cerrar</button>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h6><a href="#" data-toggle="modal" data-target="#servicio2">Hemodialisis Pediatrica</a></h6>
                        <p>
                            <!--mensajes de texto-->
                        </p>
                    </div>
                </div>
                <!-- Modal 2-->
                <div class="modal fade" id="servicio2" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="servicio2" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="servicio2">Hemodialisis Pediatrica
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: justify;">Ejemplo Hemodialisis Pediatrica</p>
                            </div>
                            <div class="modal-footer">
                                <center><button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Cerrar</button>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h6><a href="#" data-toggle="modal" data-target="#servicio3">Dialisis Peritoneal Manual y
                                Automatizada</a>
                        </h6>
                        <p>
                            <!--mensajes de texto-->
                        </p>
                    </div>
                </div>
                <!-- Modal 3-->
                <div class="modal fade" id="servicio3" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="servicio3" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="servicio3">Dialisis Peritoneal Manual y
                                    Automatizada
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: justify;">Ejemplo Dialisis Peritoneal Manual y
                                    Automatizada</p>
                            </div>
                            <div class="modal-footer">
                                <center><button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Cerrar</button>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h6><a href="#" data-toggle="modal" data-target="#servicio4">Consulta de Psicología y
                                Nutrición</a></h6>
                        <p>
                            <!--mensajes de texto-->
                        </p>
                    </div>
                </div>
                <!-- Modal 4-->
                <div class="modal fade" id="servicio4" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="servicio4" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="servicio4">Consulta de Psicología y Nutrición
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: justify;">Ejemplo Consulta de Psicología y Nutrición</p>
                            </div>
                            <div class="modal-footer">
                                <center><button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Cerrar</button>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h6><a href="#" data-toggle="modal" data-target="#servicio5">Consulta de Nefrología y
                                Nefrología Pediatrica<a href=""></a></a>
                        </h6>
                        <p></p>
                    </div>
                </div>
                <!-- Modal 5-->
                <div class="modal fade" id="servicio5" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="servicio5" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="servicio5">Consulta de Nefrología y Nefrología Pediatrica
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: justify;">Consulta de Nefrología y Nefrología Pediatrica
                                </p>
                                <div class="modal-footer">
                                    <center><button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h6><a href="#" data-toggle="modal" data-target="#servicio6">Consulta de Medicina Interna y
                                Familiar</a>
                        </h6>
                        <p></p>
                    </div>
                </div>
                <!-- Modal 6-->
                <div class="modal fade" id="servicio6" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="servicio6" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="servicio6">Consulta de Medicina Interna y
                                    Familiar
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Para cualquier modalidad de diálisis se requiere del acceso bien sea al torrente
                                    sanguíneo del paciente o a la cavidad abdominal. Es por esto que en NEFROUROS contamos
                                    con los mejores especialistas en la creación, cierre
                                    y reparación de accesos para diálisis y de esta forma consolidarnos como una institución
                                    que aborda la integralidad del paciente con enfermedad renal avanzada.</p>
                                <div class="modal-footer">
                                    <center><button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h6><a href="#" data-toggle="modal" data-target="#servicio7">Consulta de Urología y
                                Cardiología</a>
                        </h6>
                        <p></p>
                    </div>
                </div>
                <!-- Modal 6-->
                <div class="modal fade" id="servicio7" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="servicio7" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="servicio7"> Consulta de Urología y Cardiología
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: justify;">La hemoperfusión como tratamiento pretende eliminar
                                    sustancias que se encuentran en la sangre y que se comportan como un agente tóxico para
                                    el organismo. Utiliza de un circuito extracorpóreo conectado a un equipo que se
                                    encarga de extraer parte de la sangre del paciente y a través de un filtro o cartucho
                                    cargado con una sustancia absorbente que se encarga de la extracción del agente
                                    contaminante. Es utilizado para el manejo de intoxicaciones
                                    o sobredosificación de sustancias.</p>
                                <div class="modal-footer">
                                    <center><button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h6><a href="#" data-toggle="modal" data-target="#servicio8"> Consulta de Endocrinología
                            </a></h6>
                        <p></p>
                    </div>
                </div>
                <!-- Modal 7-->
                <div class="modal fade" id="servicio8" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="servicio5" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="servicio8">Consulta de Endocrinología
                                </h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>A través de este procedimiento se busca la extracción del plasma y los diferentes
                                    componentes del sistema inmunológico que allí se encuentran y que se encargan de la
                                    recaída en los síntomas de las enfermedades con un componente
                                    de afectación inmunológica. Este plasma extraído a través de un sistema de filtros que
                                    se encuentran conectados al paciente y sustituido de manera inmediata por plasma de
                                    pacientes sanos o de sustancias que cumplen
                                    la misma función.</p>
                                <div class="modal-footer">
                                    <center><button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button></center>
                                </div>
                            </div>
                        </div>
                    </div>

    </section> --}}
        <br />
        <br />
        <section id="contact" class="contact">

            <div class="container">
                <div class="section-title">
                    <h2><span style="color: #F57D00;">NEFROUROS</span> <span style="color: #737373;">SEDE SANTO
                            DOMINGO</span>
                    </h2>
                    <p>Puede contactar nuestra unidad renal en la ciudad de Santo Domingo, diligencie el formulario y
                        verifique
                        que
                        sus datos esten correctos. </p>
                </div>
            </div>



            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Ubicación:</h4>
                                <p>Avenida San Martín 202
                                    Ensanche la Fe
                                <p> Santo Domingo-República Dominicana</p>
                                </p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>gerenciasantodomingo@nefrouros.net</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-telephone" href="https://wa.me/8093845911"></i>
                                <h4>Teléfono:</h4>
                                <p>8093845911
                                <p></p>
                                </p>
                            </div>

                            <div class="phone">
                                <i class="icofont-smart-phone"></i>
                                <h4>Celular:</h4>
                                <p>849-473-3458
                                <p></p>
                                </p>
                            </div>

                        </div>

                    </div>



                </div>


            </div>
        </section>
        <div class="p-10">
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <div class="text-center">
                        <span class="font-semibold text-lg text-primary block">
                            Empresas de
                        </span>
                        <h2 class="font-bold text-3xl sm:text-4xl text-otherblue md:text-[40px] text-dark mb-4">
                            ARS
                        </h2>
                    </div>
                </div>
            </div>
            <Carousel :autoplay="4000" :wrap-around="true">
                <Slide v-for="(image, i) in images" :key="i">
                    <div class=""><img :src="image.img" class="w-48"
                            style="background-image: url(../assets/img/sedes/UR-rd/3.webp)" /></div>
                </Slide>

                <template #addons>
                    <Pagination />
                </template>
            </Carousel>

        </div>

        <footer id="footer">


            <div class="container">
                <div class="carousel slide carousel-fade">
                    <div class="container d-md-flex py-4">
                        {{-- <div class="address" style="padding-right: 20%;">
                        <i class="icofont-google-map"></i>
                        <h4>Ubicación:</h4>
                        <p>Avenida San Martín 202
                            Ensanche la Fe
                        <p> Santo Domingo-República Dominicana</p>
                        </p>
                    </div>

                    <div class="email">
                        <i class="icofont-envelope" style="padding-right: 20%;"></i>
                        <h4>Email:</h4>
                        <p>gerenciasantodomingo@nefrouros.net</p>
                    </div>

                    <div class="phone">
                        <i class="icofont-telephone" href="https://wa.me/8093845911"></i>
                        <h4>Teléfono:</h4>
                        <p>8093845911
                        <p></p>
                        </p>
                    </div> --}}



                        <div class="social-links text-center text-md-right pt-3 pt-md-0">
                            <a href="https://www.facebook.com/pages/Nefrouros-Unidad-Renal/198206136885995" target="_blank"
                                class="facebook"><i class="bx bxl-facebook"></i>
                            </a>

                            <a href="https://www.instagram.com/nefrouros/" target="_blank" class="instagram"><i
                                    class="bx bxl-instagram"></i>
                            </a>




                            <i class="fa-brands fa-tiktok"></i>
                            <a href="https://wa.me/+573177745801" target="_blank"
                                class="icofont-brand-whatsapp icofont-2x"></a>






                        </div>
                    </div>
                </div>
            </div>
    </div>
    </footer>

    <script>
        document.getElementById("btnabrir1").addEventListener("click", function() {
            document.getElementsByClassName("fondo_uno")[0].style.display = "block"
            return false
        })
        document.getElementsByClassName("modal_cerrar1")[0].addEventListener("click", function() {
            document.getElementsByClassName("fondo_uno")[0].style.display = "none"
        })
        document.getElementById("btnabrir2").addEventListener("click", function() {
            document.getElementsByClassName("fondo_dos")[0].style.display = "block"
            return false
        })
        document.getElementsByClassName("modal_cerrar2")[0].addEventListener("click", function() {
            document.getElementsByClassName("fondo_dos")[0].style.display = "none"
        })
        document.getElementById("btnabrir3").addEventListener("click", function() {
            document.getElementsByClassName("fondo_tres")[0].style.display = "block"
            return false
        })
        document.getElementsByClassName("modal_cerrar3")[0].addEventListener("click", function() {
            document.getElementsByClassName("fondo_tres")[0].style.display = "none"
        })
        document.getElementById("btnabrir4").addEventListener("click", function() {
            document.getElementsByClassName("fondo_cuatro")[0].style.display = "block"
            return false
        })
        document.getElementsByClassName("modal_cerrar4")[0].addEventListener("click", function() {
            document.getElementsByClassName("fondo_cuatro")[0].style.display = "none"
        })
        document.getElementById("btnabrir5").addEventListener("click", function() {
            document.getElementsByClassName("fondo_cinco")[0].style.display = "block"
            return false
        })
        document.getElementsByClassName("modal_cerrar5")[0].addEventListener("click", function() {
            document.getElementsByClassName("fondo_cinco")[0].style.display = "none"
        })
        document.getElementById("btnabrir6").addEventListener("click", function() {
            document.getElementsByClassName("fondo_seis")[0].style.display = "block"
            return false
        })
        document.getElementsByClassName("modal_cerrar6")[0].addEventListener("click", function() {
            document.getElementsByClassName("fondo_seis")[0].style.display = "none"
        })
        document.getElementById("btnabrir7").addEventListener("click", function() {
            document.getElementsByClassName("fondo_siete")[0].style.display = "block"
            return false
        })
        document.getElementsByClassName("modal_cerrar7")[0].addEventListener("click", function() {
            document.getElementsByClassName("fondo_siete")[0].style.display = "none"
        })
        document.getElementById("btnabrir8").addEventListener("click", function() {
            document.getElementsByClassName("fondo_ocho")[0].style.display = "block"
            return false
        })
        document.getElementsByClassName("modal_cerrar8")[0].addEventListener("click", function() {
    </script>
@endsection
@section('js')
    {{-- Componente del script envio --}}
    <x-formulario-script></x-formulario-script>
@endsection
