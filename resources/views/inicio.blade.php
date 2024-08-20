@extends('layauts.plantilla')
@section('content')
    <section id="hero">

        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->

                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide4.webp)">

                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide5.webp)">
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide6.webp">
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
    <br><br>
    <section>
        <div class="service_area container-fluid">
            <div class="row" style="color: white">
                <div class="col-lg-3 col-md-6">
                    <div class="single_service">
                        <br>
                        <h5><strong>Citas en línea</strong></h5>
                        <h6>Solicite su cita, con gusto será programada vía correo electrónico.</h6>
                        <a href="{{ route('citas.home') }}" class="boxed-btn3-white">Solicitar cita</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="background-color: #717171;"> <!-- Cambio de color -->
                    <div class="single_service">
                        <br>
                        <h5><strong>Contáctenos</strong></h5>
                        <h6>Déjenos un mensaje con su solicitud y con gusto será atendido. </h6>
                        <a class="boxed-btn3-white" href="{{ route('Contactenos.home') }}">Enviar un mensaje</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_service">
                        <br>
                        <h5><strong>PQRSF</strong></h5>
                        <h6>Apreciamos profundamente su opinión, ya que es fundamental para nosotros.</h6>

                        <a class="boxed-btn3-white" href="{{ route('sugerir.home') }}">Enviar PQRSF</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="background-color: #717171;"> <!-- Cambio de color -->
                    <div class="single_service">
                        <br>
                        <h5><strong>Trabaje con nosotros</strong></h5>
                        <h6>Déjenos su hoja de vida para evaluarla con nuestras vacantes.</h6>
                        <a href="{{ route('trabajar.home') }}" class="boxed-btn3-white">Trabaje con nosotros</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <br>
    {{-- Inicio Carrusel de videos de YOUTUBE --}}
    <section class="text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="section-title text-left mb-4">
                        <h2 class="br-0">
                            <span style="color: #737373;">BIENVENIDOS A </span>
                            <span style="color: #f57d00;">NEFROUROS</span>
                        </h2>
                        <h6 class="text-justify">
                            Somos una empresa especializada en servicios de consulta de Nefroprevención, Hemodiálisis y
                            Diálisis
                            Peritoneal, con 24 sedes en Colombia y una en República Dominicana. Con nuestra misión de
                            prestar atención integral al paciente renal con alta calidad científica de la mano de la más
                            alta calidez humana, hemos consolidado una cultura reconocida a nivel nacional e internacional
                            por nuestra imbatible filosofía de servicio con el alma.
                        </h6>
                    </div>
                </div>

                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="contenedor-video">
                        <div class="carrusel-video">
                            <div class="item-video">
                                <div class="youtube-video" data-id="oAvd_Hugt-w"></div>
                            </div>
                            <div class="item-video">
                                <div class="youtube-video" data-id="3PcXBjgVfWo"></div>
                            </div>
                            <div class="item-video">
                                <div class="youtube-video" data-id="FtJqsxykVFs"></div>
                            </div>
                            <!-- Agrega más videos según sea necesario -->
                        </div>
                        <div class="contenedor-miniaturas"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <style>
        .contenedor-video {
            position: center;
            width: 100%;
            height: 100%;
            padding-top: 1.25%;
            /* Proporción 16:9 para el contenedor de video */
            overflow: hidden;
            margin-top: 0px;
            /* Ajusta este valor según sea necesario */
        }

        .carrusel-video {
            display: flex;
            height: 100%;
            transition: transform 1s ease-in-out;
        }

        .item-video {
            min-width: 100%;
            height: 35vh;
            box-sizing: border-box;
        }

        .contenedor-miniaturas {
            position: absolute;
            top: 0%;
            right: -18%;
            /* Ajusta el espacio entre el contenedor de miniaturas y el lado derecho */
            height: 90%;
            /* Ajusta la altura del contenedor de miniaturas */
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1px;

        }

        .miniatura {
            left: 50%;
            width: 100px;
            height: 70px;
            margin: 5px;
            cursor: pointer;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carruselVideo = document.querySelector(".carrusel-video");
            const contenedorMiniaturas = document.querySelector(".contenedor-miniaturas");
            let reproductores = [];

            const idsVideos = [
                "oAvd_Hugt-w",
                "3PcXBjgVfWo",
                "FtJqsxykVFs",
                // Agrega más IDs según sea necesario
            ];

            idsVideos.forEach((idVideo, index) => {
                const img = document.createElement("img");
                img.src = `https://img.youtube.com/vi/${idVideo}/default.jpg`;
                img.alt = `Miniatura ${index + 1}`;
                img.classList.add("miniatura");
                img.addEventListener("click", () => irASlide(index));
                contenedorMiniaturas.appendChild(img);
            });

            function irASlide(index) {
                const valorTraduccion = -index * 100 + "%";
                carruselVideo.style.transform = `translateX(${valorTraduccion})`;

                // Pausar los videos que no están en el índice seleccionado
                reproductores.forEach((reproductor, i) => {
                    if (i !== index) {
                        reproductor.pauseVideo();
                    }
                });

                // Reproducir el video seleccionado
                reproductores[index].playVideo();
            }

            const etiquetaScript = document.createElement('script');
            etiquetaScript.src = 'https://www.youtube.com/iframe_api';
            const primeraEtiquetaScript = document.getElementsByTagName('script')[0];
            primeraEtiquetaScript.parentNode.insertBefore(etiquetaScript, primeraEtiquetaScript);

            window.onYouTubeIframeAPIReady = function() {
                const contenedoresVideo = document.querySelectorAll('.youtube-video');
                contenedoresVideo.forEach((contenedor, index) => {
                    const reproductor = new YT.Player(contenedor, {
                        height: '100%',
                        width: '100%',
                        videoId: contenedor.getAttribute('data-id'),
                        playerVars: {
                            autoplay: 0,
                            rel: 0, // Ocultar videos relacionados al final del video
                            showinfo: 0, // Ocultar información del video
                            controls: 0, // Opcional: Ocultar los controles del reproductor
                        },
                    });
                    reproductores.push(reproductor);
                });
            };
        });
    </script>
    {{-- Final Carrusel de videos de YOUTUBE --}}
    <br><br>

    {{-- inicio franja naranja  --}}

    <div class="bg-orange text-white text-center py-1" style="background-color: #f57d00">
        <h5 class="font-weight" style="font-size:1.5em">
            NEFROUROS EL MEJOR LUGAR DONDE UN PACIENTE CON ENFERMEDAD DE LOS RIÑONES PUEDE ESTAR
        </h5>
    </div>
    {{-- finaliza franja naranja  --}}

    <br>
    {{-- Inicio de video de youtube --}}
    <div style="display: flex; flex-direction: row; align-items: center; justify-content: center; text-align: center;">

        <div style="margin-right: 20px;"> <!-- Ajusta el margen según sea necesario -->
            <iframe width="860" height="515" src="https://www.youtube.com/embed/_tuamyjEpWY?si=T3NuMlv262HpH8oh?rel=0"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <div style="margin-left: 80px;"> <!-- Ajusta el margen izquierdo según sea necesario -->

            <h2 class="font-semibold">
                <span style="color: #737373; font-size:1.5em;">¿QUÉ HACEMOS></span>
                <br>
                <span style="color: #f57d00; font-size:1.5em;"> POR LA VIDA?></span>
            </h2>
            <br>
        </div>
    </div>

    {{-- Fin de video de youtube --}}
    <br>
    {{-- inicio franja naranja  --}}

    <div class="bg-orange text-white text-center py-1" style="background-color: #f57d00">
        <h5 class="font-weight" style="font-size:2em">
            SOMOS MÁS QUE HACER DIÁLISIS
        </h5>
    </div>

    {{-- finaliza franja naranja  --}}

    <div class="row mb-5 justify-content-center text-center">
        <!-- Imagen 1 -->
        <article class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
            <div class="icon-box">
                <br>
                <a href="#" data-toggle="modal" data-target="#servicio1Modal">
                    <div class="icon">
                        <img src="{{ asset('assets/img/noticias/noticia1.jpg') }}" class="img-fluid"
                            style="width:100%; height:80%;" alt="Noticia 1">
                    </div>
                </a>
                <h5><a href="#" data-toggle="modal" data-target="#servicio1Modal">Campaña Institucional</a>
                </h5>
                <!-- Párrafo a mostrar -->
                <h6 class="parrafo-oculto" id="parrafoServicio1">La
                    Diálisis es Vida, Disfruta Tu Vida</h6>
            </div>
        </article>

        <!-- Modal 1 -->
        <div class="modal fade" id="servicio1Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="servicio1ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="servicio1ModalLabel">CAMPAÑA INSTITUCIONAL</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Carrusel de Bootstrap -->
                        <div id="carouselServicio1" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores del carrusel -->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselServicio1" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselServicio1" data-slide-to="1"></li>
                                <li data-target="#carouselServicio1" data-slide-to="2"></li>
                                <!-- Agrega más <li> según la cantidad de imágenes -->
                            </ol>
                            <!-- Contenido del carrusel -->
                            <div class="carousel-inner">
                                <!-- Imagen 1 -->
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/img/noticias/noticia1-1.jpg') }}" class="d-block w-100"
                                        alt="Primera imagen">
                                </div>
                                <!-- Imagen 2 -->
                                {{-- <div class="carousel-item">
                                    <img src="{{ asset('assets/img/servicios/SERVICIOS05.png') }}" class="d-block w-100"
                                        alt="Segunda imagen">
                                </div>
                                <!-- Imagen 3 -->
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/servicios/SERVICIOS06.png') }}" class="d-block w-100"
                                        alt="Tercera imagen">
                                </div> --}}
                                <!-- Agrega más <div class="carousel-item"> según la cantidad de imágenes -->
                            </div>
                            <!-- Controles del carrusel -->
                            <a class="carousel-control-prev" href="#carouselServicio1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselServicio1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </div>
                        <br>
                        <!-- Contenido del modal -->
                        <h4 class="text-center" style="text-align: justify; color: #f57d00;">
                            Campaña Institucional: La Diálisis es Vida, Disfruta Tu Vida
                        </h4>
                        <p style="text-align: justify;">Todos invitados al gran lanzamiento de
                            nuestra Campaña Institucional LA DIÁLISIS ES VIDA,
                            DISFRUTA TU VIDA. Esta campaña se realiza durante los meses de mayo a septiembre, con una
                            temática diferente cada mes: DISFRUTA TU VIDA CON TU FAMILIA, CON EL FOLCLOR, CON DIOS, EN EL
                            TIEMPO LIBRE y CON TUS AMIGOS.

                            Porque tenemos claro que nada da más satisfacción que servir, cuidando el bien más preciado: su
                            salud.</p>
                        <!-- Párrafo oculto -->
                        <h6 id="parrafoServicio1Modal" style="display: none;"></h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>





        <!-- Imagen 2 -->
        <article class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
            <div class="icon-box">
                <br>
                <a href="#" data-toggle="modal" data-target="#servicio2Modal">
                    <div class="icon">
                        <img src="{{ asset('assets/img/noticias/noticia5.jpg') }}" class="img-fluid"
                            style="width:100%; height:80%;" alt="Imagen 2">
                    </div>
                </a>
                <h5><a href="#" data-toggle="modal" data-target="#servicio2Modal">RECONOCIMIENTO CUENTA DE ALTO
                        COSTO</a></h5>
                <!-- Párrafo a mostrar -->
                <h6 class="parrafo-oculto" id="parrafoServicio2"></h6>
            </div>
        </article>

        <!-- Modal 2 -->
        <div class="modal fade" id="servicio2Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="servicio2ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="servicio2ModalLabel">RECONOCIMIENTO CUENTA DE ALTO
                            COSTO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <!-- Carrusel de Bootstrap -->
                        <div id="carouselServicio2" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores del carrusel -->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselServicio2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselServicio2" data-slide-to="1"></li>
                                <li data-target="#carouselServicio2" data-slide-to="2"></li>
                                <!-- Agrega más <li> según la cantidad de imágenes -->
                            </ol>
                            <!-- Contenido del carrusel -->
                            <div class="carousel-inner">
                                <!-- Imagen 1 -->
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/img/noticias/noticia5-0.jpg') }}" class="d-block w-100"
                                        alt="Primera imagen">
                                </div>
                                <!-- Imagen 2 -->
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/noticias/noticia5-1.jpg') }}" class="d-block w-100"
                                        alt="Segunda imagen">
                                </div>
                                <!-- Imagen 3 -->
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/noticias/noticia5-2.jpg') }}" class="d-block w-100"
                                        alt="Tercera imagen">
                                </div>
                                <!-- Imagen 4 -->
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/noticias/noticia5-3.jpg') }}" class="d-block w-100"
                                        alt="Tercera imagen">
                                </div>
                                <!-- Imagen 5 -->
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/noticias/noticia5-4.jpg') }}" class="d-block w-100"
                                        alt="Tercera imagen">
                                </div>

                                <!-- Agrega más <div class="carousel-item"> según la cantidad de imágenes -->
                            </div>
                            <!-- Controles del carrusel -->
                            <a class="carousel-control-prev" href="#carouselServicio2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselServicio2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </div>
                        <br>
                        <!-- Contenido del modal -->
                        <h4 class="text-center" style="text-align: justify; color: #f57d00;">
                            RECONOCIMIENTO CUENTA DE ALTO COSTO
                        </h4>
                        <p style="text-align: justify;">Con orgullo y satisfacción queremos compartir con ustedes los
                            resultados del Ranking de Instituciones Prestadoras de Servicios de Salud para la atención de
                            pacientes en diálisis renal y programas de prevención renal publicados por la Cuenta de Alto
                            Costo del Ministerio de Salud y Protección Social, institución encargada de evaluar los
                            resultados de más de 3000 instituciones del país. Esta evaluación busca reconocer los esfuerzos
                            en la gestión del riesgo de los pacientes en diálisis y otorga el reconocimiento a las IPS más
                            destacadas por sus resultados a nivel nacional.
                            <br><br>
                            1. Primer puesto del Ranking de Instituciones Prestadoras de servicios de salud en la gestión
                            del riesgo de las personas en diálisis en la categoría de IPS medianas (atendiendo entre 100 y
                            200 pacientes).
                            <br><br>
                            2. Primer puesto del Ranking de Instituciones Prestadoras de servicios de salud en la gestión
                            del riesgo de las personas en diálisis en la categoría IPS pequeñas (atendiendo menos de 100
                            pacientes).
                            <br><br>
                            3. Segundo puesto del Ranking de Instituciones Prestadoras de servicios de salud en la gestión
                            del riesgo cardiovascular en las personas con HTA y/o DM en las IPS que gestionan entre 3.000 y
                            9.000 personas.
                            <br><br>
                            4. Dos de nuestras sedes se ubican dentro de las 10 mejores del Ranking de Instituciones
                            Prestadoras de Servicios de Salud en la gestión del riesgo de las personas en diálisis en la
                            categoría IPS grandes (atendiendo más de 200 pacientes).
                            <br><br>
                            5. Cinco sedes más dentro de las 20 mejores del Ranking de Instituciones Prestadoras de
                            Servicios de Salud en la gestión del riesgo de las personas en diálisis.
                            <br><br>
                            Desde NEFROUROS reiteramos el compromiso con nuestra misión brindando atención integral a los
                            pacientes con enfermedades renales y/o con enfermedad precursoras de daño renal, con alta
                            calidad científica de la mano de la más alta calidez humana; así como nuestro compromiso para la
                            atención y el manejo del riesgo cardiovascular de la población de pacientes atendida por su EPS.
                            <br><br>
                            NEFROUROS, somos el mejor lugar en donde un paciente con enfermedad renal
                        </p>
                        <!-- Párrafo oculto -->
                        <h6 id="parrafoServicio2Modal" style="display: none;">Contenido adicional del segundo servicio.
                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>





        <!-- Imagen 3 -->
        <article class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
            <div class="icon-box">
                <br>
                <a href="#" data-toggle="modal" data-target="#servicio3Modal">
                    <div class="icon">
                        <img src="{{ asset('assets/img/noticias/noticia6.jpg') }}" class="img-fluid"
                            style="width:100%; height:80%;" alt="Imagen 3">
                    </div>
                </a>
                <h5><a href="#" data-toggle="modal" data-target="#servicio3Modal">NOMINACIÓN CUENTA DE ALTO
                        COSTO</a></h5>
                <!-- Párrafo a mostrar -->
                <h6 class="parrafo-oculto" id="parrafoServicio3"></h6>
            </div>
        </article>

        <!-- Modal 3 -->
        <div class="modal fade" id="servicio3Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="servicio3ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="servicio3ModalLabel">NOMINACIÓN CUENTA DE ALTO COSTO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Carrusel de Bootstrap -->
                        <div id="carouselServicio3" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores del carrusel -->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselServicio3" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselServicio3" data-slide-to="1"></li>
                                <li data-target="#carouselServicio3" data-slide-to="2"></li>
                                <!-- Agrega más <li> según la cantidad de imágenes -->
                            </ol>
                            <!-- Contenido del carrusel -->
                            <div class="carousel-inner">
                                <!-- Imagen 1 -->
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/img/noticias/noticia6-1.jpg') }}" class="d-block w-100"
                                        alt="Primera imagen">
                                </div>
                                <!-- Imagen 2 -->
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/noticias/noticia6-2.jpg') }}" class="d-block w-100"
                                        alt="Segunda imagen">
                                </div>
                                <!-- Imagen 3 -->
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/noticias/noticia6-3.jpg') }}" class="d-block w-100"
                                        alt="Tercera imagen">
                                </div>
                                <!-- Imagen 4 -->
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/noticias/noticia6-4.jpg') }}" class="d-block w-100"
                                        alt="Tercera imagen">
                                </div>
                                <!-- Imagen 5 -->
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/noticias/noticia6-5.jpg') }}" class="d-block w-100"
                                        alt="Tercera imagen">
                                </div>
                                <!-- Imagen 6 -->
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/noticias/noticia6-6.jpg') }}" class="d-block w-100"
                                        alt="Tercera imagen">
                                </div>
                                <!-- Agrega más <div class="carousel-item"> según la cantidad de imágenes -->
                            </div>
                            <!-- Controles del carrusel -->
                            <a class="carousel-control-prev" href="#carouselServicio3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselServicio3" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </div>
                        <br>
                        <!-- Contenido del modal -->
                        <h5 class="text-center" style="text-align: justify; color: #f57d00;">
                            NOMINACIÓN CUENTA DE ALTO COSTO
                        </h5>
                        <p style="text-align: justify;">Con gran orgullo y alegría NEFROUROS comparte el reconocimiento
                            como prestador con mejores
                            resultados de gestión del riesgo en diálisis, otorgado por la Cuenta de Alto Costo #RankingCAC a
                            nuestras sedes:
                            <br><br>
                            NEFROUROS Garzón y NEFROUROS Lorica,
                            <br><br>
                            NEFROUROS Alta Calidad Científica de la mano de la más alta Calidez Humana. Somos el mejor lugar
                            donde un paciente con enfermedad renal puede estar.
                        </p>
                        <!-- Párrafo oculto -->
                        <h6 id="parrafoServicio3Modal" style="display: none;">Contenido adicional del tercer servicio.
                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <style>
        .icon-box {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            width: 80%;

            /* Ajusta el ancho según sea necesario */
            margin: 7%;
            /* Ajusta los valores de margen según sea necesario */
            border: 5px solid transparent;
            /* Añadido un borde transparente al principio */
        }

        .icon-box:hover {

            border-color: #f57d00;
            /* Cambia el color al que desees */
            height: 88%;
        }


        .icon img {
            margin-bottom: 10px;
            border-radius: 10px;
            /* Puedes ajustar el valor según tus necesidades */
        }
    </style>

    <script>
        // Funciones para mostrar los párrafos al abrir los modales
        $('#servicio1Modal').on('shown.bs.modal', function() {
            $('#parrafoServicio1Modal').show();
        });

        $('#servicio2Modal').on('shown.bs.modal', function() {
            $('#parrafoServicio2Modal').show();
        });

        $('#servicio3Modal').on('shown.bs.modal', function() {
            $('#parrafoServicio3Modal').show();
        });
    </script>




    <!-- ======= About Section ======= -->
    {{-- <section id="about" class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
                    <a href="https://player.vimeo.com/video/350985596" class="venobox play-btn mb-4" data-vbtype="video"
                        data-autoplay="true"></a>
                </div>

                <div
                    class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <div class="container">
                        <div class="section-title">
                            <h2><span style="color: #f57d00"> NEFROUROS</span> <span style="color: #737373;">UNIDAD
                                    RENAL</span> </span>
                            </h2>
                        </div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h5 class="title"><a href=""><span style="color: #737373;">Gracias por visitar</span>
                                <span style="color: #f57d00;">NEFROUROS</span></a></h5>
                        <h6 class="description" style="text-align: justify">Si eres paciente renal y buscas consuelo y
                            esperanza para afrontar tu enfermedad, acá encontraras un lugar diseñado pensando en ti.
                            Somos
                            una empresa especializada en servicios de Nefroprevencion, Hemodiálisis y Diálisis
                            Peritoneal
                            con sedes en Neiva, Ibagué, Pitalito, Tunja, Duitama, Montería, Yopal, Barrancabermeja,
                            Medellín, Armenia, Popayán, Bello, Cúcuta, Bogotá, Pereira, Rionegro, Envigado, Garzón,
                            Barranquilla,
                            Apartadó, Lorica, Puerto Asis y Valledupar.</h6>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-happy"></i></div>
                        <h5 class="title"><a href="">Servimos con el alma </a></h5>
                        <h6 class="description" style="text-align: justify">Con nuestra misión de prestar atención
                            integral
                            al paciente renal con alta calidad científica de la mano de las más alta calidez humana,
                            hemos
                            consolidado una cultura de servicio reconocida a nivel nacional. Queremos que conozcas
                            un poco de nosotros a través de esta página, tenemos diferentes temas de salud, preguntas
                            frecuentes que alguna vez puedes tener, recomendaciones para tu vida.</h6>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-home"></i></div>
                        <h5 class="title"><a href="{{ route('home.actividadesPacientes') }}">Actividades</a></h5>
                        <h6 class="description" style="text-align: justify">Aqui encontraráslas actividades y eventos
                            que
                            hacemos con nuestros pacientes. Puedes utilizar nuestro servicio de citas en línea con
                            Nefrología, Psicología, Nutrición o Trabajo Social, todos profesionales con amplios
                            conocimientos
                            en el manejo del paciente renal, su patología y los trámites que se deben hacer ante las
                            distintas EPS y EPSs. Esperamos que seas muy activo en esta, tu página y nos dejes tus
                            sugerencias y comentarios todas las veces que quieras.</h6>
                    </div>

                </div>
            </div>
        </div> --}}


    </div>
    </section>
    {{-- ---------------------EL TAMAÑO DE LAS IMAGENES DE LA FACHADA ES DE SON DE 420 X 287-------------------- --}}
    {{-- <section>
        <div class="container">
            <div class="section-title">
                <h2><span style="color: #737373;">NUESTRAS </span> <span style="color: #f57d00;">SEDES</span> </span>
                </h2>
                <h6>NEFROUROS Unidad renal cuenta con sedes a nivel nacional permitiéndonos prestar servicios de la mejor
                    calidez humana en cualquier parte del país.</h6>
            </div>
        </div>
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
                                            src="assets/img/sedes/UR-armenia/FACHADA-1.webp" alt=""
                                            width="420" height="424" /></a>
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
                                            src="assets/img/sedes/UR-barrancabermeja/FACHADAA.webp" alt=""
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
                                            src="assets/img/sedes/UR-barranquilla/FACHADAA.webp" alt=""
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
                                            src="assets/img/sedes/UR-bello/FACHADAA.webp" alt=""
                                            width="420" height="424" /></a>
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
                                            src="assets/img/sedes/UR-bogota/FACHADA.webp" alt=""
                                            width="420" height="424" /></a>
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
                                            src="assets/img/sedes/UR-cucuta/FACHADAA.webp" alt=""
                                            width="420" height="424" /></a>
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
                                            src="assets/img/sedes/UR-envigado/FACHADAA.webp" alt="" width="420"
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
                                            src="assets/img/sedes/UR-ibague/FACHADAA.webp" alt="" width="420"
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
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '25', 'sede' => 'Medellin']) }}"><img
                                            src="assets/img/sedes/UR-Medellin/FACHADA.webp" alt=""
                                            width="420" height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '25', 'sede' => 'Medellin']) }}">Sede
                                                Medellín</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '3', 'sede' => 'NefroprevencionMedellin']) }}"><img
                                            src="assets/img/sedes/Nefroprevencion/NEFRO.webp" alt=""
                                            width="420" height="424" /></a>
                                    <div class="team-classic-caption">
                                        <h5 class="team-classic-name"><a
                                                href="{{ route('sedes.home', ['id' => '3', 'sede' => 'NefroprevencionMedellin']) }}">Sede Nefroprevención
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
                                            src="assets/img/sedes/UR-monteria/FACHADAA.webp" alt="" width="420"
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
                                            src="assets/img/sedes/UR-pasto/FACHADA.webp" alt=""
                                            width="420" height="424" /></a>
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
                                            src="assets/img/sedes/UR-pereira/FACHADAA.webp" alt=""
                                            width="420" height="424" /></a>
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
                                            src="assets/img/sedes/UR-pitalito/FACHADAA.webp" alt="" width="420"
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
                                            src="assets/img/sedes/UR-popayan/FACHADA.webp" alt=""
                                            width="420" height="424" /></a>
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
                                            src="assets/img/sedes/UR-puertoasis/FACHADAA.webp" alt=""
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
                                                href="{{ route('sedes.home', ['id' => '12 ', 'sede' => 'Tunja']) }}">Sede
                                                Tunja</a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                            <div class="feature-1 border person text-center">
                                <article class="team-classic team-classic-lg"><a class="team-classic-figure"
                                        href="{{ route('sedes.home', ['id' => '17', 'sede' => 'Valledupar']) }}"><img
                                            src="assets/img/sedes/UR-valledupar/FACHADAA.webp" alt=""
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
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- jdskadjksahdjksahdjklhsajkldhsajkldhsjklfhjklsdhfjkldhfkjldhfkljdhfjklsdfhkljdfhsjkdahfjkldsfhsjkdlfhsjkdfhkdsljfhksjldfhkdjsfhsjkdhfkjdshfjdsfhljkdhfjkdhfjkldf --}}

    <div class="pre-loader">
        <div class="">
            <div class="">
                <div class="">
                    <div class="pre-loader-img"></div>
                    <div class="" style="width:40%; margin-left:30%; ">
                        <img src="assets/img/POST.webp" alt="Iniciando Nefrouros.net">
                    </div>
                </div>
            </div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Cargando Nefrouros.net
            </div>
        </div>
    </div>


    <div id="preloader"></div>
    {{-- jdskadjksahdjksahdjklhsajkldhsajkldhsjklfhjklsdhfjkldhfkjldhfkljdhfjklsdfhkljdfhsjkdahfjkldsfhsjkdlfhsjkdfhkdsljfhksjldfhkdjsfhsjkdhfkjdshfjdsfhljkdhfjkdhfjkldf --}}

    </div>




    </div>

    {{-- <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
          <!-- Team Classic-->
          <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="assets/img/sedes/UR-valledupar/VALLEDUPAR-1.jpg" alt="" width="420" height="424" /></a>
            <div class="team-classic-caption">
              <h5 class="team-classic-name"><a href="#">Sede Tunja</a></h5>
            </div>
          </article>
        </div> --}}



    </div>
    </div>
    </section>


    <!-- End Contact Section -->
    <!-- <section id="test-form" class="test-form">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="popup_box">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </section> End Contact Section   permite mostrar un texto dentro de la misma pagina -->
    <!-- offers_area_end -->
    <!--2016 estandard de tamaño para las imagenes===============================================END SECTION OF BLOG NOTICE=================================-->
    </section>
@endsection
