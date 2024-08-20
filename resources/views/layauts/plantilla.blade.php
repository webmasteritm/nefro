<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="google-site-verification" content="auSIBCMK55MFKPazCBaROnCLce5g4ZA5gyYzGLnLlTc" />
    <title>NEFROUROS - Servimos con el alma</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/style.css">
    @yield('css')

</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
            </div>

            {{-- <div class="social-links">
                <a href="https://www.facebook.com/pages/Nefrouros-Unidad-Renal/198206136885995" target="_blank"
                    class="facebook"><i class="icofont-facebook icofont-2x"></i></a>
                <a href="https://www.instagram.com/nefrouros/" target="_blank" class="instagram"><i
                        class="icofont-instagram icofont-2x"></i></a>
                <a href="https://www.youtube.com/@nefrourosunidadrenal5178" target="_blank" class="youtube"><i
                        class="icofont-youtube-play icofont-2x"></i></a>
                <a href="https://www.tiktok.com/@nefrouros?_t=8ZIU9BZKwdy&_r=1" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="25" fill="currentColor"
                        viewBox="0 0 32 32" style="margin-bottom: 15px;">
                        <path
                            d="M16.708 0.027c1.745-0.027 3.48-0.011 5.213-0.027 0.105 2.041 0.839 4.12 2.333 5.563 1.491 1.479 3.6 2.156 5.652 2.385v5.369c-1.923-0.063-3.855-0.463-5.6-1.291-0.76-0.344-1.468-0.787-2.161-1.24-0.009 3.896 0.016 7.787-0.025 11.667-0.104 1.864-0.719 3.719-1.803 5.255-1.744 2.557-4.771 4.224-7.88 4.276-1.907 0.109-3.812-0.411-5.437-1.369-2.693-1.588-4.588-4.495-4.864-7.615-0.032-0.667-0.043-1.333-0.016-1.984 0.24-2.537 1.495-4.964 3.443-6.615 2.208-1.923 5.301-2.839 8.197-2.297 0.027 1.975-0.052 3.948-0.052 5.923-1.323-0.428-2.869-0.308-4.025 0.495-0.844 0.547-1.485 1.385-1.819 2.333-0.276 0.676-0.197 1.427-0.181 2.145 0.317 2.188 2.421 4.027 4.667 3.828 1.489-0.016 2.916-0.88 3.692-2.145 0.251-0.443 0.532-0.896 0.547-1.417 0.131-2.385 0.079-4.76 0.095-7.145 0.011-5.375-0.016-10.735 0.025-16.093z" />
                    </svg>
                </a>
                <a href="https://wa.me/3177745801" target="_blank" class="icofont-brand-whatsapp icofont-2x"></a>
                </a>

                <!-- <img alt="Icono de vector SVG de Tiktok" src="/show/452114/tiktok.svg" width="250" height="250" decoding="async" data-nimg="1" style="color:transparent;width:250px;height:250px"> -->

            </div> --}}
        </div>
    </div>
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/favicon.png" alt="Iniciando Nefrouros.net">

                </div>
            </div>
        </div>
    </div> --}}
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <div class="pre-loader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="pre-loader-img">
                        <img src="assets/img/favicon.png" alt="Iniciando Nefrouros.net">
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
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">



        <div class="container d-flex align-items-center">

            <img src="assets/img/05.png" alt="" class="logo mr-auto">
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="{{ route('home.inicio') }}">INICIO</a></li>

                    {{-- <li><a href="{{ route('sedes.home', ['id' => '26', 'sede' => 'rd']) }}">Santo Domingo (RD)</a></li> --}}
                    <li class="drop-down"><a href="#">ORGANIZACIÓN</a>
                        <ul>
                            <li><a href="{{ route('home.acercadenosotros') }}">Acerca de Nosotros</a></li>
                            <li><a href="{{ route('home.servicios') }}">Portafolio de Servicios</a></li>
                            <li><a href="{{ route('home.plataformaEstrategica') }}">Plataforma Estratégica</a></li>
                            <li><a href="{{ route('home.codigosdeEtica') }}">Código De Ética</a></li>
                            <li><a href="{{ route('home.estadosFinancieros') }}">Estados Financieros</a></li>


                            {{-- <li class="drop-down"><a class="relative">Estados Financieros </a>
                                <ul>
                                    <li><a href="{{ route('EstadosFinancieros.Año2019') }}">Año Gravable 2019</a></li>
                                    <li><a href="{{ route('EstadosFinancieros.Año2020') }}">Año Gravable 2020</a></li>
                                    <li><a href="{{ route('EstadosFinancieros.Año2021') }}">Año Gravable 2021</a></li>
                                    <li><a href="{{ route('EstadosFinancieros.Año2022') }}">Año Gravable 2022</a></li>
                                    <li><a href="{{ route('EstadosFinancieros.Año2023') }}">Año Gravable 2023</a></li>
                                </ul>
                            </li> --}}

                    </li>


                    <li><a href="{{ route('home.Sarlaft') }}">SARLAFT</a></li>
                    {{-- <li class="drop-down"><a href="#">COPASST</a>
                        <ul>
                            <li><a href="{{ route('copasst.nefrourosFundacion') }}">Fundación Nefrouros</a>
                            </li>
                            <li><a href="{{ route('copasst.nefroServicios') }}">Nefroservicios Sas</a></li>
                            <li><a href="{{ route('copasst.sesSalud') }}">Ses Salud – Yopal</a></li>
                            <li><a href="{{ route('copasst.Garzon') }}">Nefrouros MOM – Garzon</a></li>
                            <li><a href="{{ route('copasst.Pitalito') }}">Nefrouros MOM – Pitalito</a></li>
                            <li><a href="{{ route('copasst.Rionegro') }}">Nefrouros MOM – Rionegro</a></li>
                            <li><a href="{{ route('copasst.Envigado') }}">Nefrouros MOM - Envigado</a></li>
                        </ul>
                    </li> --}}
                </ul>
                </li>
                <li class="drop-down"><a href="#">SIAU</a>
                    <ul>
                        <li><a href="{{ route('home.DerechosyDeberes') }}">Derechos Y Deberes</a></li>
                        <li><a href="{{ route('sugerir.home') }}">PQRSF</a></li>
                        <li><a href="{{ route('citas.home') }}">Citas en línea</a></li>
                        <li><a href="{{ route('home.AsociacionUsuarios') }}">Asociación de Usuarios</a></li>
                        <li><a href="{{ route('home.Calendario') }}">Calendario Actividades</a></li>
                        <li><a href="{{ route('home.ValoreAgregados') }}">Valores Agregados</a></li>
                        <li><a href="{{ route('prefuntasFrecuentes.home') }}">Preguntas Frecuentes</a></li>
                        <li><a href="{{ route('home.actividadesPacientes') }}">Actividades Pacientes</a></li>
                    </ul>

                </li>
                <li class="drop-down"><a href="#">APRENDIZAJE</a>
                    <ul>
                        <li><a href="https://e-learning.nefrouros.net/" target="blank">E-Learning Nefrouros</a></li>
                        {{-- <li><a href="https://e-learning.nefrouros.net/" target="blank">Educación a Usuarios</a></li> --}}
                    </ul>


                </li>
                <li class="drop-down"><a href="#">SEDES</a>
                    <ul style="overflow-y:auto; max-height:80vh">
                        <li><a href="{{ route('sedes.home', ['id' => '27', 'sede' => 'Colombia']) }}">Colombia
                            </a></li>
                        <li><a href="https://republicadominicana.nefrouros.net/">Rep. Dominicana
                            </a>
                        </li>
                        {{-- <li><a href="{{ route('sedes.home', ['id' => '14', 'sede' => 'Apartado']) }}">Sede
                                    Apartadó </a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '19', 'sede' => 'armenia']) }}">Sede
                                    Armenia</a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '10', 'sede' => 'Barrancabermeja']) }}">Sede
                                    Barrancabermeja</a></li>
                            <li><a href="{{ route('sedes.home', ['id' => '2', 'sede' => 'Barranquilla']) }}">Sede
                                    Barranquilla</a></li>
                            <li><a href="{{ route('sedes.home', ['id' => '18', 'sede' => 'bello']) }}">Sede Bello</a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '22', 'sede' => 'bogota']) }}">Sede
                                    Bogotá</a></li>
                            <li><a href="{{ route('sedes.home', ['id' => '21', 'sede' => 'cucuta']) }}">Sede
                                    Cucúta</a></li>
                            <li><a href="{{ route('sedes.home', ['id' => '13', 'sede' => 'Duitama']) }}">Sede Duitama
                                </a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '6', 'sede' => 'Envigado']) }}">Sede
                                    Envigado</a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '5', 'sede' => 'Garzon']) }}">Sede Garzón</a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '11', 'sede' => 'Ibague']) }}">Sede
                                    Ibagué</a></li>
                            <li><a href="{{ route('sedes.home', ['id' => '15', 'sede' => 'Lorica']) }}">Sede Lorica
                                </a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '25', 'sede' => 'Medellin']) }}">Sede
                                    Medellín </a>
                            </li>
                            <li><a
                                    href="{{ route('sedes.home', ['id' => '3', 'sede' => 'NefroprevencionMedellin']) }}">Sede
                                    Nefroprevención Medellín</a></li>
                            <li><a href="{{ route('sedes.home', ['id' => '8', 'sede' => 'Monteria']) }}">Sede
                                    Montería</a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '1', 'sede' => 'Neiva']) }}">Sede Neiva</a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '24', 'sede' => 'Pasto']) }}">Sede Pasto </a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '23', 'sede' => 'pereira']) }}">Sede
                                    Pereira</a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '7', 'sede' => 'Pitalito']) }}">Sede
                                    Pitalito</a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '20', 'sede' => 'popayan']) }}">Sede
                                    Popayán</a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '16', 'sede' => 'Puertoasis']) }}">Sede
                                    Puerto Asís
                                </a></li>
                            <li><a href="{{ route('sedes.home', ['id' => '4', 'sede' => 'Rionegro']) }}">Sede
                                    Rionegro</a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '12', 'sede' => 'Tunja ']) }}">Sede Tunja
                                </a></li>
                            <li><a href="{{ route('sedes.home', ['id' => '17', 'sede' => 'Valledupar']) }}">Sede
                                    Valledupar
                                </a></li>
                            <li><a href="{{ route('sedes.home', ['id' => '9', 'sede' => 'Yopal']) }}">Sede Yopal</a>
                            </li>
                            <li><a href="{{ route('sedes.home', ['id' => '26', 'sede' => 'rd']) }}">Sede Santo Domingo
                                    (RD)</a></li> --}}

                    </ul>
                </li>
                {{-- <li><a href="{{ route('blog.home') }}">Noticias</a></li>
                <li><a href="{{ route('prefuntasFrecuentes.home') }}">Preguntas Frecuentes</a></li> --}}


                <div class="d-flex justify-content-end" style="padding-right: 50px;">
                    <a href="http://nefro.test/Sede-27-colombia">
                        <img src="assets/img/colombia.png"></a>
                    <a href="https://republicadominicana.nefrouros.net/#/">
                        <img src="assets/img/dominicana.png"></a>

                </div>
                </ul>



        </div>


    </header>

    <br><br><br><br><br>





    @yield('content')


    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="carousel slide carousel-fade">
                    <div class="container d-md-flex py-4">

                        <div class="mr-md-auto text-center text-md-left">
                            <div class="copyright">
                                &copy; Copyright <strong><span>IT Management Zomac S.A.S</span></strong>. All Rights
                                Reserved
                            </div>
                            <div class="credits">
                                Desarrollado por <a href="https://itmsas.net/">IT Management</a>
                            </div>
                        </div>
                        <div class="social-links text-center text-md-right pt-3 pt-md-0">
                            <a href="https://www.facebook.com/pages/Nefrouros-Unidad-Renal/198206136885995"
                                target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>

                            <a href="https://www.instagram.com/nefrouros/" target="_blank" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>

                            <a href="https://www.youtube.com/@nefrourosunidadrenal5178" target="_blank"
                                class="youtube"><i class="bx bxl-youtube"></i></a>

                            <a href="https://www.tiktok.com/@nefrouros?_t=8ZIU9BZKwdy&_r=1" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 32 32" ">
                    <path d=" M16.708 0.027c1.745-0.027 3.48-0.011 5.213-0.027 0.105 2.041 0.839 4.12 2.333 5.563 1.491
                                    1.479 3.6 2.156 5.652
                                    2.385v5.369c-1.923-0.063-3.855-0.463-5.6-1.291-0.76-0.344-1.468-0.787-2.161-1.24-0.009
                                    3.896 0.016 7.787-0.025 11.667-0.104 1.864-0.719 3.719-1.803 5.255-1.744 2.557-4.771
                                    4.224-7.88 4.276-1.907
                                    0.109-3.812-0.411-5.437-1.369-2.693-1.588-4.588-4.495-4.864-7.615-0.032-0.667-0.043-1.333-0.016-1.984
                                    0.24-2.537 1.495-4.964 3.443-6.615 2.208-1.923 5.301-2.839 8.197-2.297 0.027
                                    1.975-0.052 3.948-0.052 5.923-1.323-0.428-2.869-0.308-4.025 0.495-0.844 0.547-1.485
                                    1.385-1.819 2.333-0.276 0.676-0.197 1.427-0.181 2.145 0.317 2.188 2.421 4.027 4.667
                                    3.828 1.489-0.016 2.916-0.88 3.692-2.145 0.251-0.443 0.532-0.896 0.547-1.417
                                    0.131-2.385 0.079-4.76 0.095-7.145 0.011-5.375-0.016-10.735 0.025-16.093z" />
                                </svg>
                            </a>


                            <i class="fa-brands fa-tiktok"></i>
                            {{-- <a href="https://wa.me/3177745801" target="_blank"  class="icofont-brand-whatsapp icofont-2x"></a> --}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    @yield('copasst-script')
    @yield('js')
    @yield('validate')
</body>

</html>
