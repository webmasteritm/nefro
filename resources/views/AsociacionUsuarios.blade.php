@extends('layauts.plantilla')
@section('content')
    <section>
        <div style="text-align: center; margin-top: 20px;">
            <img src="{{ asset('assets/img/banners/asociacion-de-usuarios.jpg') }}" alt="Descripción de la imagen"
                style="max-width: 100%; height: 1%;">
        </div>
        <br>
        <div class="bg-orange text-white text-center py-1" style="background-color: #f57d00; width: 100%; height: 30px;">

            <!-- Contenido de la franja naranja -->
        </div>
        <br>


        <div class=" text-center">
            <h2><span style="color: #737373;"><b>ASOCIACIÓN DE</b> </span> <span style="color: #f57d00;"><b>USUARIOS</b>
                </span></h2>
            <p></p>
        </div>
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-center mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_details">
                                    <span class="section_text text-justify"><b style="color: #f57d00;">¿QUÉ ES LA ASOCIACIÓN
                                            DE
                                            USUARIOS?</b></span>

                                    <ul class="rounded-bullets">
                                        <li>La asociación de usuarios es una agrupación de afiliados del régimen
                                            contributivo y
                                            subsidiado del Sistema General de Seguridad Social en Salud, que velarán por la
                                            calidad
                                            del servicio y el cumplimiento de los deberes y derechos de los usuarios.</li>
                                        <br><br>
                                        <li><b style="color: #f57d00;">¿QUIÉNES CONFORMAN LA ASOCIACIÓN DE USUARIOS?</b><br>
                                            Pueden hacer parte de la Asociación de Usuarios todas las personas afiliadas al
                                            régimen
                                            contributivo y subsidiado atendido en esta entidad.</li>
                                        <br><br>
                                        <li><b style="color: #f57d00;">FUNCIONES DE LA ASOCIACIÓN DE USUARIOS</b><br><br>
                                            <ul>
                                                <li>Establecer la proyección y ejecución de las capacitaciones y reuniones
                                                    según lo
                                                    definido en el formato PA-GH-FO-043 CRONOGRAMA ASOCIACIÓN DE USUARIOS.
                                                </li>
                                                <br>
                                                <li>Difundir y divulgar los derechos y las obligaciones en salud de los
                                                    usuarios.</li>
                                                <br>
                                                <li>Vigilar el cumplimiento de estos derechos.</li>
                                                <br>
                                                <li>Proponer a la institución las medidas necesarias para mantener y mejorar
                                                    la calidad
                                                    de
                                                    los servicios, así como la atención al usuario.</li>
                                                <br>
                                                <li>Estar informado e informar acerca de los servicios a que tienen derecho
                                                    los
                                                    usuarios
                                                    de
                                                    acuerdo con el Plan de Beneficios en Salud (PBS) y no (PBS).</li>
                                                <br>
                                                <li>Proponer medidas que mejoren la oportunidad, la calidad técnica y humana
                                                    de los
                                                    servicios de salud.</li>
                                                <br>
                                                <li>Asesorar a los afiliados en la libre elección de la Entidad Promotora de
                                                    Salud,
                                                    las
                                                    instituciones prestadoras de servicios y/o los profesionales adscritos o
                                                    con
                                                    vinculación
                                                    laboral a la entidad promotora de salud, dentro de las opciones por ella
                                                    ofrecidas.</li>
                                                <br>
                                                <li>Asesorar a los afiliados en la identificación y acceso al paquete de
                                                    servicios.</li>
                                                <br>
                                                <li>Mantener canales de comunicación con los afiliados que permitan conocer
                                                    sus
                                                    inquietudes
                                                    y demandas, para hacer propuestas ante la Institución Prestataria de
                                                    Servicios
                                                    de
                                                    Salud
                                                    y la Empresa Promotora de Salud.</li>
                                                <br>
                                                <li>Informar a las instancias que corresponda, a las instituciones
                                                    prestatarias y
                                                    empresas
                                                    promotoras, si la calidad del servicio prestado no satisface la
                                                    necesidad de sus
                                                    afiliados.</li>
                                                <br>
                                                <li>Proponer las medidas que mejoren la oportunidad, la calidad técnica y
                                                    humana de
                                                    los
                                                    servicios de salud y preserven su menor costo; así como vigilar su
                                                    cumplimiento.</li>
                                                <br>
                                                <li>Ejercer veedurías en las instituciones del sector salud.</li>
                                                <br>
                                                <li>Brindar información a los afiliados acerca del Sistema general de
                                                    Seguridad
                                                    Social
                                                    en
                                                    Salud.</li>
                                            </ul>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>
    <style>
        /* Estilo para viñetas redondas */
        .rounded-bullets ul {
            list-style: none;
            /* Eliminar los bullets por defecto */
            padding-left: 1.5em;
            /* Ajustar el padding izquierdo según sea necesario */
        }

        .rounded-bullets ul li {
            position: relative;
            padding-left: 1.5em;
            /* Espacio para el bullet */
            margin-bottom: 0.5em;
            /* Espacio entre ítems de la lista */
            line-height: 1.6;
            /* Ajustar el espaciado entre líneas */
        }

        .rounded-bullets ul li::before {
            content: '\2022';
            /* Código Unicode para el bullet redondo */
            position: absolute;
            left: 0;
            top: -0.45em;
            /* Ajustar la posición vertical del bullet */
            font-size: 2.5em;
            /* Tamaño más grande del bullet */
            color: #f57d00;
            /* Color del bullet */
            line-height: inherit;
            /* Mantener la misma altura de línea que el texto */
        }
    </style>
@endsection
