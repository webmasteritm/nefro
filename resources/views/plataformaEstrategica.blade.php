@extends('layauts.plantilla')
@section('content')
    <!-- business_expert_area_start  -->
    <section>
        <div style="text-align: center; margin-top: 20px;">
            <img src="{{ asset('assets/img/banners/plataforma-estrategica.jpg') }}" alt="Descripción de la imagen"
                style="max-width: 100%; height: 1%;">
        </div>
        <br><br>
        <div class="section-title text-center text-left-4 mb-8">
            <h2 class="br-0" style="font-size: 3em;">
                <span style="color: #737373;">NUESTRA</span>
                <span style="color: #f57d00;">PLATAFORMA ESTRATÉGICA</span>
            </h2>
        </div>

        <section class="business_expert_area">
            <div class="business_tabs_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs flex-column flex-md-row justify-content-center flex-nowrap"
                                id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">
                                        <h4><span style="color: #F57D00;">MISIÓN</span> <span style="color: #737373;">Y
                                                VISIÓN</span></h4>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">
                                        <h4><span style="color: #F57D00;">POLÍTICA DE</span> <span
                                                style="color: #737373;">HUMANIZACIÓN</span></h4>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="politica-tab" data-toggle="tab" href="#politica" role="tab"
                                        aria-controls="politica" aria-selected="false">
                                        <h4><span style="color: #F57D00;">POLÍTICA DE</span> <span
                                                style="color: #737373;">SEGURIDAD DEL PACIENTE</span></h4>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                        aria-controls="contact" aria-selected="false">
                                        <h4><span style="color: #F57D00;">NUESTROS</span> <span
                                                style="color: #737373;">VALORES</span></h4>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="himno-tab" data-toggle="tab" href="#himno" role="tab"
                                        aria-controls="himno" aria-selected="false">
                                        <h4><span style="color: #F57D00;">NUESTRO</span> <span
                                                style="color: #737373;">HIMNO</span></h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        </div>





        <div class="container">
            <div class="border_bottom">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">

                                    <h3 style="color: #F57D00;"><b>MISIÓN</b></h3>
                                    <p>
                                        Brindamos atención integral a los pacientes con enfermedades precursoras de daño
                                        renal o con enfermedad renal establecida, con alta calidad científica de la mano
                                        de la más alta calidez humana.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">

                                <div class="additional_right">
                                    <h4 style="color: #F57D00;"><b>VISIÓN</b></h4>
                                    <p>
                                        En el 2027 seremos reconocidos como el mejor lugar en donde un paciente con
                                        enfermedad de los riñones puede estar, brindando una experiencia de atención con
                                        excelencia con nuestro imbatible SERVIR CON EL ALMA.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">

                                    <h3 style="color: #F57D00;">POLÍTICA DE HUMANIZACIÓN</h3>
                                    <p>
                                        NEFROUROS, se compromete a brindar servicios de salud caracterizados por una
                                        atención integral humanizada,
                                        en un ambiente cálido, eficiente, amable, velando para que los usuarios puedan
                                        vivir sus enfermedades con respeto,
                                        con alegría, de manera compasiva, amorosa, motivadas por el servicio con el
                                        alma. En NEFROUROS,
                                        brindamos una experiencia de Atención con Excelencia, somos más que hacer
                                        Diálisis.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="politica" role="tabpanel" aria-labelledby="politica-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">

                                    <h3 style="color: #F57D00;">POLÍTICA DE
                                        SEGURIDAD
                                        DEL PACIENTE</h3>
                                    <p>
                                        Es prioridad la Seguridad del Paciente como parte fundamental en el proceso de
                                        Atención, por ello promueve la Cultura de Seguridad en todos los clientes de la
                                        institución, y desarrolla acciones de Identificación, Prevención y Gestión de
                                        riesgos relacionados con el Proceso Médico-asistencial.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row align-items-start"> <!-- Alinea los contenidos hacia arriba -->

                            <div class="col-xl-6 col-md-6">
                                <h3 style="color: #F57D00; text-align: left;">VALORES</h3>
                                <div class="business_info">
                                    <p class="user-select-all"><b style="color: #F57D00;">RESPONSABILIDAD:</b> Hacemos lo
                                        que debemos según lo establecido.</p>
                                    <p class="user-select-all"><b style="color: #F57D00;">HONESTIDAD:</b> Actuamos
                                        coherentemente con nuestros valores y principios.</p>
                                    <p class="user-select-all"><b style="color: #F57D00;">RESPETO:</b> Reconocemos y
                                        toleramos las creencias, actuaciones, sentimientos y motivos de las personas.</p>
                                    <p class="user-select-all"><b style="color: #F57D00;">COMPROMISO:</b> Cuando cumple
                                        con sus obligaciones, con aquello que se ha propuesto o que le ha sido encomendado.
                                    </p>
                                    <p class="user-select-all"><b style="color: #F57D00;">EQUIPO HUMANO: </b> Personal
                                        altamente cualificado, que le asesorará sobre nuestros productos adecuándose a las
                                        distintas
                                        necesidades según el tipo de cliente.</p>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6">

                                <div class="business_info">

                                    <p class="user-select-all"><b style="color: #F57D00;">FE:</b> Es la seguridad o
                                        confianza en una persona,
                                        cosa, opinión, doctrinas o enseñanzas de una religión.</p>
                                    <p class="user-select-all"><b style="color: #F57D00;">CALIDEZ HUMANA:</b> Es el
                                        cariño, amabilidad y afecto
                                        que muestran las personas por los demás. Calidez significa calor, lo cual se traduce
                                        en un ambiente
                                        alegre y cordial en las relaciones interpersonales.</p>
                                    <p class="user-select-all"><b style="color: #F57D00;">CALIDAD CIENTÍFICA:</b> Que
                                        cuenta con los mejores
                                        recursos tecnológicos en el mercado para la prestación de sus servicios.</p>
                                    <p class="user-select-all"><b style="color: #F57D00;">AMOR:</b> Conjunto de
                                        comportamientos y actitudes que
                                        resultan desinteresados e incondicionales, y que se manifiestan entre seres que
                                        tienen la capacidad
                                        de desarrollar inteligencia emocional. </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="himno" role="tabpanel" aria-labelledby="himno-tab">
                        <section id="about" class="about">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                                        style="background-image: url(assets/img/slide/slider3.jpg)">
                                        <a href="https://www.youtube.com/watch?v=3PcXBjgVfWo"
                                            class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                                    </div>

                                    <div
                                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                                        <div class="container">
                                            <div class="section-title">
                                                <h2><span style="color: #f57d00"> HIMNO NEFROUROS</span> <span
                                                        style="color: #737373;">UNIDAD RENAL</span> </span>
                                                </h2>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
