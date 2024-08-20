@extends('layauts.plantilla')

@section('content')
    <section>
        <div style="text-align: center; margin-top: 20px;">
            <img src="{{ asset('assets/img/banners/portafolio-de-servicios.jpg') }}" alt="Descripción de la imagen"
                style="max-width: 100%; height: 1%;">
        </div>
        <br>
        <h1 class="br-0 text-center">
            <span style="color: #737373;"><b>NUESTROS</b></span>
            <span style="color: #f57d00;"><b>SERVICIOS</b></span>
        </h1>
        <br>
        <div class="row mb-5 justify-content-center text-center">
            <!-- Imagen 1 -->
            <article class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
                <div class="icon-box">
                    <br>
                    <a href="#" data-toggle="modal" data-target="#servicio1Modal">
                        <div class="icon">
                            <!-- Reemplaza "ruta/a/tu/imagen.webp" con la ruta correcta de tu imagen local -->
                            <img src="{{ asset('assets/img/servicios/SERVICIOS1.webp') }}" class="img-fluid" alt="Imagen 1">
                        </div>
                    </a>

                </div>
            </article>


            <!-- Modal 1 -->
            <div class="modal fade" id="servicio1Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="servicio1ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Ajusté el tamaño del modal a modal-lg -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="servicio1ModalLabel"></h5>
                            <!-- Añadí la clase text-center -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenido del modal -->
                            <div class="row justify-content-center">
                                <!-- Ajusta el tamaño de la imagen -->
                                <img src="{{ asset('assets/img/servicios/SERVICIOS1.webp') }}"
                                    class="img-fluid mx-auto d-block" alt="Imagen 1"
                                    style="max-height: 80vh; max-width: 40vw;">

                                <div class="col-md-11 text-center h-100"> <!-- Añadí la clase h-100 -->
                                    <br>
                                    <h4 style="color: #f57d00">Consulta de Nefrología Pediátrica y Nefrología Adultos</h4>
                                    <!-- Añadí el color al título -->
                                    <p style="text-align: justify;">Contamos con médicos especialistas expertos en
                                        nefrología y
                                        nefrología pediátrica que realizan un abordaje integral de la enfermedad renal:
                                        prevención
                                        renal, intervención de factores de riesgo, tamizaje para enfermedades del riñón,
                                        diagnósticos oportunos de enfermedad renal, abordaje integral de la enfermedad renal
                                        y sus
                                        complicaciones, preparación para terapias renales sustitutivas. Estos servicios de
                                        consulta
                                        se ofrecen en la modalidad presencial (garantizando las mejores prácticas de
                                        bioseguridad),
                                        virtual o asistencia de las atenciones hospitalarias (modalidad conocida como
                                        interconsulta
                                        o consulta extramural).
                                    </p>
                                    <!-- Párrafo oculto -->
                                    <p id="parrafoServicio1Modal" style="display: none;">Contenido adicional del párrafo.
                                    </p>
                                </div>
                            </div>
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
                    <a href="https://heyzine.com/flip-book/391aa7373c.html#page/20" data-toggle="modal"
                        data-target="#servicio2Modal">
                        <div class="icon">
                            <img src="{{ asset('assets/img/servicios/SERVICIOS2.webp') }}" class="img-fluid" alt="Imagen 2">
                        </div>
                    </a>

                </div>
            </article>


            <!-- Modal 2 -->
            <div class="modal fade" id="servicio2Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="servicio2ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Ajusté el tamaño del modal a modal-lg -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="servicio2ModalLabel"></h5>
                            <!-- Añadí la clase text-center -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenido del modal -->
                            <div class="row justify-content-center">
                                <!-- Ajusta el tamaño de la imagen -->
                                <img src="{{ asset('assets/img/servicios/SERVICIOS2.webp') }}"
                                    class="img-fluid mx-auto d-block" alt="Imagen 2"
                                    style="max-height: 80vh; max-width: 40vw;">

                                <div class="col-md-11 text-center h-100"> <!-- Añadí la clase h-100 -->
                                    <br>
                                    <h4 style="color: #f57d00">Programa de Nefroprevención "VIDA NEFROUROS"</h4>
                                    <!-- Añadí el color al título -->
                                    <p style="text-align: justify;">Nuestro programa de protección renal “VIDA NEFROUROS”
                                        tiene como
                                        propósito principal retardar la progresión de la enfermedad renal evitando de esta
                                        manera el
                                        ingreso temprano a diálisis y la aparición de complicaciones e incluso en etapas
                                        tempranas
                                        de la enfermedad renal, revertirla. Nuestro programa “VIDA NEFROUROS” cuenta con
                                        profesionales expertos en nefrología y programas de apoyo como actores fundamentales
                                        de la
                                        intervención del paciente que conciencia sobre el mantenimiento de la salud y el
                                        bienestar y
                                        el fortalecimiento de elementos de autocuidado.
                                    </p>
                                    <!-- Párrafo oculto -->
                                    <p id="parrafoServicio2Modal" style="display: none;">Contenido adicional del párrafo.
                                    </p>
                                </div>
                            </div>
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
                            <img src="{{ asset('assets/img/servicios/SERVICIOS3.webp') }}" class="img-fluid" alt="Imagen 3">
                        </div>
                    </a>

                </div>
            </article>

            <!-- Modal 3 -->
            <div class="modal fade" id="servicio3Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="servicio3ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Ajusté el tamaño del modal a modal-lg -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="servicio3ModalLabel"></h5>
                            <!-- Añadí la clase text-center -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenido del modal -->
                            <div class="row justify-content-center">
                                <!-- Ajusta el tamaño de la imagen -->
                                <img src="{{ asset('assets/img/servicios/SERVICIOS3.webp') }}"
                                    class="img-fluid mx-auto d-block" alt="Imagen 2"
                                    style="max-height: 80vh; max-width: 40vw;">

                                <div class="col-md-11 text-center h-100"> <!-- Añadí la clase h-100 -->
                                    <br>
                                    <h4 style="color: #f57d00">Hemodiálisis de alta eficiencia ambulatoria y extramural
                                    </h4> <!-- Añadí el color al título -->
                                    <p style="text-align: justify;">La diálisis como procedimiento busca eliminar toxinas y
                                        líquido
                                        que se acumula cuando los riñones ya no pueden hacer su trabajo. Durante el
                                        tratamiento, la
                                        sangre pasa a través de un sistema de líneas hasta un “riñón artificial” o filtro
                                        que se
                                        encarga de la depuración. Este procedimiento se realiza dentro de nuestras
                                        instalaciones que
                                        cuentan además con sistemas multimedia y ergonómicos pensados en brindar la mejor
                                        experiencia y todo el confort a nuestros usuarios.
                                    </p>
                                    <!-- Párrafo oculto -->
                                    <p id="parrafoServicio3Modal" style="display: none;">Contenido adicional del párrafo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Imagen 4 -->
            <article class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
                <div class="icon-box">
                    <br>
                    <a href="#" data-toggle="modal" data-target="#servicio4Modal">
                        <div class="icon">
                            <!-- Reemplaza "ruta/a/tu/imagen.webp" con la ruta correcta de tu imagen local -->
                            <img src="{{ asset('assets/img/servicios/SERVICIOS4.webp') }}" class="img-fluid"
                                alt="Imagen 4">
                        </div>
                    </a>

                </div>
            </article>


            <!-- Modal 4 -->
            <div class="modal fade" id="servicio4Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="servicio4ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Ajusté el tamaño del modal a modal-lg -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="servicio4ModalLabel"></h5>
                            <!-- Añadí la clase text-center -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenido del modal -->
                            <div class="row justify-content-center">
                                <!-- Ajusta el tamaño de la imagen -->
                                <img src="{{ asset('assets/img/servicios/SERVICIOS4.webp') }}"
                                    class="img-fluid mx-auto d-block" alt="Imagen 2"
                                    style="max-height: 80vh; max-width: 40vw;">

                                <div class="col-md-11 text-center h-100"> <!-- Añadí la clase h-100 -->
                                    <br>
                                    <h4 style="color: #f57d00">Diálisis peritoneal ambulatoria continua y automatizada</h4>
                                    <!-- Añadí el color al título -->
                                    <p style="text-align: justify;">La diálisis como procedimiento busca eliminar toxinas y
                                        líquido
                                        que se acumula cuando los riñones ya no pueden hacer su trabajo. Para la diálisis
                                        peritoneal, utilizamos la cavidad abdominal del paciente como fuente del intercambio
                                        de
                                        sustancias y toxinas. Como procedimiento, facilita el acceso al tratamiento a
                                        nuestros
                                        pacientes con dificultades para acudir de manera regular a la unidad renal, pues
                                        suministramos todos los elementos necesarios para que el tratamiento se realice
                                        desde su
                                        casa y solo acude a nuestra institución a las consultas de control.
                                    </p>
                                    <!-- Párrafo oculto -->
                                    <p id="parrafoServicio1Modal" style="display: none;">Contenido adicional del párrafo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Imagen 5 -->
            <article class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
                <div class="icon-box">
                    <br>
                    <a href="#" data-toggle="modal" data-target="#servicio5Modal">
                        <div class="icon">
                            <img src="{{ asset('assets/img/servicios/SERVICIOS5.webp') }}" class="img-fluid"
                                alt="Imagen 5">
                        </div>
                    </a>

                </div>
            </article>


            <!-- Modal 5 -->
            <div class="modal fade" id="servicio5Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="servicio5ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Ajusté el tamaño del modal a modal-lg -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="servicio5ModalLabel"></h5>
                            <!-- Añadí la clase text-center -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenido del modal -->
                            <div class="row justify-content-center">
                                <!-- Ajusta el tamaño de la imagen -->
                                <img src="{{ asset('assets/img/servicios/SERVICIOS5.webp') }}"
                                    class="img-fluid mx-auto d-block" alt="Imagen 2"
                                    style="max-height: 80vh; max-width: 40vw;">

                                <div class="col-md-11 text-center h-100"> <!-- Añadí la clase h-100 -->
                                    <br>
                                    <h4 style="color: #f57d00">Terapias de reemplazo renal continuas</h4>
                                    <!-- Añadí el color al título -->
                                    <p style="text-align: justify;">Las terapias de reemplazo renal continuas buscan la
                                        eliminación
                                        de toxinas y líquido que se acumula cuando los riñones no están en la capacidad de
                                        lograrlo
                                        de manera adecuada. A diferencia de la diálisis convencional, este tratamiento se
                                        realiza
                                        durante las 24 horas del día de manera continua de acuerdo con las necesidades del
                                        paciente.
                                        Esto lo condiciona como una mejor alternativa para pacientes críticamente enfermos.
                                    </p>
                                    <!-- Párrafo oculto -->
                                    <p id="parrafoServicio1Modal" style="display: none;">Contenido adicional del párrafo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Imagen 6 -->
            <article class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
                <div class="icon-box">
                    <br>
                    <a href="#" data-toggle="modal" data-target="#servicio6Modal">
                        <div class="icon">
                            <img src="{{ asset('assets/img/servicios/SERVICIOS6.webp') }}" class="img-fluid"
                                alt="Imagen 6">
                        </div>
                    </a>

                </div>
            </article>

            <!-- Modal 6 -->
            <div class="modal fade" id="servicio6Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="servicio6ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Ajusté el tamaño del modal a modal-lg -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="servicio6ModalLabel"></h5>
                            <!-- Añadí la clase text-center -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenido del modal -->
                            <div class="row justify-content-center">
                                <!-- Ajusta el tamaño de la imagen -->
                                <img src="{{ asset('assets/img/servicios/SERVICIOS6.webp') }}"
                                    class="img-fluid mx-auto d-block" alt="Imagen 2"
                                    style="max-height: 80vh; max-width: 40vw;">

                                <div class="col-md-11 text-center h-100"> <!-- Añadí la clase h-100 -->
                                    <br>
                                    <h4 style="color: #f57d00">Gestión integral de accesos para diálisis</h4>
                                    <!-- Añadí el color al título -->
                                    <p style="text-align: justify;">Para cualquier modalidad de diálisis se requiere del
                                        acceso
                                        bien sea al torrente sanguíneo del paciente o a la cavidad abdominal. Es por esto
                                        que en
                                        NEFROUROS contamos con los mejores especialistas en la creación, cierre y reparación
                                        de
                                        accesos para diálisis y de esta forma consolidarnos como una institución que aborda
                                        la
                                        integralidad del paciente con enfermedad renal avanzada.
                                    </p>
                                    <!-- Párrafo oculto -->
                                    <p id="parrafoServicio1Modal" style="display: none;">Contenido adicional del párrafo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Imagen 7 -->
            <article class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
                <div class="icon-box">
                    <br>
                    <a href="#" data-toggle="modal" data-target="#servicio7Modal">
                        <div class="icon">
                            <!-- Reemplaza "ruta/a/tu/imagen.webp" con la ruta correcta de tu imagen local -->
                            <img src="{{ asset('assets/img/servicios/SERVICIOS7.webp') }}" class="img-fluid"
                                alt="Imagen 7">
                        </div>
                    </a>

                </div>
            </article>


            <!-- Modal 7 -->
            <div class="modal fade" id="servicio7Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="servicio7ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Ajusté el tamaño del modal a modal-lg -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="servicio7ModalLabel"></h5>
                            <!-- Añadí la clase text-center -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenido del modal -->
                            <div class="row justify-content-center">
                                <!-- Ajusta el tamaño de la imagen -->
                                <img src="{{ asset('assets/img/servicios/SERVICIOS7.webp') }}"
                                    class="img-fluid mx-auto d-block" alt="Imagen 2"
                                    style="max-height: 80vh; max-width: 40vw;">

                                <div class="col-md-11 text-center h-100"> <!-- Añadí la clase h-100 -->
                                    <br>
                                    <h4 style="color: #f57d00">Hemoperfusión</h4> <!-- Añadí el color al título -->
                                    <p style="text-align: justify;">La hemoperfusión como tratamiento pretende eliminar
                                        sustancias
                                        que se encuentran en la sangre y que se comportan como un agente tóxico para el
                                        organismo.
                                        Utiliza de un circuito extracorpóreo conectado a un equipo que se encarga de extraer
                                        parte
                                        de la sangre del paciente y a través de un filtro o cartucho cargado con una
                                        sustancia
                                        absorbente que se encarga de la extracción del agente contaminante. Es utilizado
                                        para el
                                        manejo de intoxicaciones o sobredosificación de sustancias.
                                    </p>
                                    <!-- Párrafo oculto -->
                                    <p id="parrafoServicio1Modal" style="display: none;">Contenido adicional del párrafo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Imagen 8 -->

            <article class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
                <div class="icon-box">
                    <br>
                    <a href="#" data-toggle="modal" data-target="#servicio8Modal">
                        <div class="icon">
                            <img src="{{ asset('assets/img/servicios/SERVICIOS8.webp') }}" class="img-fluid"
                                alt="Imagen 8">
                        </div>
                    </a>

                </div>
            </article>


            <!-- Modal 8 -->
            <div class="modal fade" id="servicio8Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="servicio8ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="servicio8ModalLabel"></h5>
                            <!-- Añadí la clase text-center -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenido del modal -->
                            <div class="row justify-content-center">
                                <!-- Ajusta el tamaño de la imagen -->
                                <img src="{{ asset('assets/img/servicios/SERVICIOS8.webp') }}"
                                    class="img-fluid mx-auto d-block" alt="Imagen 2"
                                    style="max-height: 80vh; max-width: 40vw;">

                                <div class="col-md-11 text-center h-100"> <!-- Añadí la clase h-100 -->
                                    <br>
                                    <h4 style="color: #f57d00">Plasmaféresis</h4> <!-- Añadí el color al título -->
                                    <p style="text-align: justify;">A través de este procedimiento se busca la extracción
                                        del
                                        plasma y los diferentes componentes del sistema inmunológico que allí se encuentran
                                        y que se
                                        encargan de la recaída en los síntomas de las enfermedades con un componente de
                                        afectación
                                        inmunológica. Este plasma extraído a través de un sistema de filtros que se
                                        encuentran
                                        conectados al paciente y sustituido de manera inmediata por plasma de pacientes
                                        sanos o de
                                        sustancias que cumplen la misma función.
                                    </p>
                                    <!-- Párrafo oculto -->
                                    <p id="parrafoServicio1Modal" style="display: none;">Contenido adicional del párrafo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Imagen 9 -->

            <article class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
                <div class="icon-box">
                    <br>
                    <a href="#" data-toggle="modal" data-target="#servicio9Modal">
                        <div class="icon">
                            <img src="{{ asset('assets/img/servicios/SERVICIOS9.webp') }}" class="img-fluid"
                                alt="Imagen 9">
                        </div>
                    </a>
                </div>
            </article>

            <!-- Modal 9 -->
            <div class="modal fade" id="servicio9Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="servicio9ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="servicio9ModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenido del modal -->
                            <div class="row justify-content-center">
                                <img src="{{ asset('assets/img/servicios/SERVICIOS9.webp') }}"
                                    class="img-fluid mx-auto d-block" alt="Imagen 2"
                                    style="max-height: 80vh; max-width: 40vw;">

                                <div class="col-md-11 text-center">
                                    <br>
                                    <h4 style="color: #f57d00">Biopsia Renal</h4>
                                    <p style="text-align: justify;">La biopsia renal es un procedimiento indispensable en
                                        el estudio de muchas enfermedades renales. Una biopsia renal consiste en extraer una
                                        pequeña muestra de tejido renal que pueda examinarse con un microscopio en busca de
                                        signos de lesión o enfermedad. Las dos formas más comunes para hacer esta biopsia
                                        son percutánea y abierta.</p>
                                    <!-- Párrafo oculto -->
                                    <p id="parrafoServicio1Modal" style="display: none;">Contenido adicional del párrafo.
                                    </p>
                                </div>
                            </div>
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
                border-radius: 20px;
                width: 80%;
                /* Ajusta el ancho según sea necesario */
                margin: -20px auto 50;
                /* Ajusta los valores de margen según sea necesario */
                border: 5px solid transparent;
                /* Añadido un borde transparente al principio */
            }

            .icon-box:hover {

                border-color: #f57d00;
                /* Cambia el color al que desees */
            }


            .icon img {
                margin-bottom: 5px;
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
            $('#servicio4Modal').on('shown.bs.modal', function() {
                $('#parrafoServicio1Modal').show();
            });

            $('#servicio5Modal').on('shown.bs.modal', function() {
                $('#parrafoServicio2Modal').show();
            });

            $('#servicio6Modal').on('shown.bs.modal', function() {
                $('#parrafoServicio3Modal').show();
            });
            $('#servicio7Modal').on('shown.bs.modal', function() {
                $('#parrafoServicio1Modal').show();
            });

            $('#servicio8Modal').on('shown.bs.modal', function() {
                $('#parrafoServicio2Modal').show();
            });

            $('#servicio9Modal').on('shown.bs.modal', function() {
                $('#parrafoServicio3Modal').show();
            });
        </script>

    </section>
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
                        <h6><a href="#" data-toggle="modal" data-target="#servicio1">Consulta de nefrología pediátrica y
                                nefrología adultos</a></h6>
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
                                <h5 class="modal-title" id="servicio1">Consulta de nefrología pediátrica y nefrología
                                    adultos
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: justify;">Contamos con médicos especialistas expertos en nefrología y
                                    nefrología pediátrica que realizan un abordaje integral de la enfermedad renal:
                                    prevención renal, intervención de factores de riesgo, tamizaje para enfermedades
                                    del riñón, diagnósticos oportunos de enfermedad renal, abordaje integral de la
                                    enfermedad renal y sus complicaciones, preparación para terapias renales sustitutivas.
                                    Estos servicios de consulta se ofrecen en la modalidad
                                    presencial (garantizando las mejores prácticas de bioseguridad), virtual o asistencia de
                                    las atenciones hospitalarias (modalidad conocida como interconsulta o consulta
                                    extramural). </p>
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
                        <h6><a href="#" data-toggle="modal" data-target="#servicio2">Programa de protección renal “VIDA
                                NEFROUROS”</a></h6>
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
                                <h4 class="modal-title" id="servicio2">Programa de protección renal “VIDA NEFROUROS”
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: justify;">Nuestro programa de protección renal “VIDA NEFROUROS” tiene
                                    como propósito principal retardar la progresión de la enfermedad renal evitando de esta
                                    manera el ingreso temprano a diálisis y la aparición de complicaciones
                                    e incluso en etapas tempranas de la enfermedad renal, revertirla. Nuestro programa “VIDA
                                    NEFROUROS” cuenta con profesionales expertos en nefrología y programas de apoyo como
                                    actores fundamentales de la intervención
                                    del paciente que conciencia sobre el mantenimiento de la salud y el bienestar y el
                                    fortalecimiento de elementos de autocuidado.</p>
                            </div>
                            <div class="modal-footer">
                                <center><button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h6><a href="#" data-toggle="modal" data-target="#servicio3">Hemodiálisis de alta eficiencia
                                ambulatoria y
                                extramural</a></h6>
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
                                <h4 class="modal-title" id="servicio3">Hemodiálisis de alta eficiencia ambulatoria y
                                    extramural
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: justify;">La diálisis como procedimiento busca eliminar toxinas y
                                    líquido que se acumula cuando los riñones ya no pueden hacer su trabajo. Durante el
                                    tratamiento, la sangre pasa a través de un sistema de líneas hasta un “riñón artificial”
                                    o filtro que se encarga de la depuración. Este procedimiento se realiza dentro de
                                    nuestras instalaciones que cuentan además con sistemas multimedia y ergonómicos pensados
                                    en brindar la mejor experiencia y todo el confort
                                    a nuestros usuarios.</p>
                            </div>
                            <div class="modal-footer">
                                <center><button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h6><a href="#" data-toggle="modal" data-target="#servicio4">Diálisis peritoneal ambulatoria
                                continua y
                                automatizada</a></h6>
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
                                <h4 class="modal-title" id="servicio4">Diálisis peritoneal ambulatoria continua y
                                    automatizada
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: justify;">La diálisis como procedimiento busca eliminar toxinas y
                                    líquido que se acumula cuando los riñones ya no pueden hacer su trabajo. Para la
                                    diálisis peritoneal, utilizamos la cavidad abdominal del paciente como fuente del
                                    intercambio de sustancias y toxinas. Como procedimiento, facilita el acceso al
                                    tratamiento a nuestros pacientes con dificultades para acudir de manera regular a la
                                    unidad renal, pues suministramos todos los elementos
                                    necesarios para que el tratamiento se realice desde su casa y solo acude a nuestra
                                    institución a las consultas de control.</p>
                            </div>
                            <div class="modal-footer">
                                <center><button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h6><a href="#" data-toggle="modal" data-target="#servicio5">Terapias de reemplazo renal
                                continuas</a></h6>
                        <p></p>
                    </div>
                </div>
                <!-- Modal 5-->
                <div class="modal fade" id="servicio5" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="servicio5" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="servicio5">Terapias de reemplazo renal continuas
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: justify;">Las terapias de reemplazo renal continuas buscan la
                                    eliminación de toxinas y líquido que se acumula cuando los riñones no están en la
                                    capacidad de lograrlo de manera adecuada. A diferencia de la diálisis convencional, este
                                    tratamiento se realiza durante las 24 horas del día de manera continua de acuerdo con
                                    las necesidades del paciente. Esto lo condiciona como una mejor alternativa para
                                    pacientes críticamente enfermos.
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
                        <h6><a href="#" data-toggle="modal" data-target="#servicio6">Gestión integral de accesos para
                                diálisis</a>
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
                                <h4 class="modal-title" id="servicio6">Gestión integral de accesos para diálisis
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
                        <h6><a href="#" data-toggle="modal" data-target="#servicio7">Hemoperfusión</a></h6>
                        <p></p>
                    </div>
                </div>
                <!-- Modal 6-->
                <div class="modal fade" id="servicio7" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="servicio7" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="servicio7"> Hemoperfusión
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
                        <h6><a href="#" data-toggle="modal" data-target="#servicio8"> Plasmaféresis </a></h6>
                        <p></p>
                    </div>
                </div>
                <!-- Modal 7-->
                <div class="modal fade" id="servicio8" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="servicio5" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="servicio8">Plasmaféresis
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
                </div>


    </section>
    <br />
    <br />
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
            document.getElementsByClassName("fondo_ocho")[0].style.display = "none"
        })
    </script> --}}
@endsection
