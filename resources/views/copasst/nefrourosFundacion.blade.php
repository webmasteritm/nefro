@extends('../layauts.plantilla')
@section('content')
    <section>
        <div class="container">
            <div class="section-title">
                <br>
                <h2><span style="color: #737373;">ESTADOS </span> <span style="color: #f57d00;">FINANCIEROS</span> </span>
                </h2>
                <div class="site-section pb-0">
                    <div class="container">
                        <div class="row mb-5 justify-content-center text-center">
                            <div class="col-lg-4 mb-5 text-center">
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 20 al 26 de Junio</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="cero" name="cero"
                                                onclick="mostrar_info('0','lcero','mcero')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 27 de Junio al 03 de Julio</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " name="uno" id="uno"
                                                onclick="mostrar_info('1','luno','muno')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 04 al 10 de Julio</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="tres" name="tres"
                                                onclick="mostrar_info('3','ltres','mtres')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 11 al 17 de Julio</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="cuatro" name="cuatro"
                                                onclick="mostrar_info('4','lcuatro','mcuatro')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 18 al 24 de Julio</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="cinco" name="cinco"
                                                onclick="mostrar_info('5','lcinco','mcinco')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 25 al 31 de Julio</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="seis" name="seis"
                                                onclick="mostrar_info('6','lseis','mseis')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 01 al 07 de Agosto</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="siete" name="siete"
                                                onclick="mostrar_info('7','lsiete','msiete')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 08 al 14 de Agosto</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="ocho" name="ocho"
                                                onclick="mostrar_info('8','locho','mocho')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 15 al 21 de Agosto</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="nueve" name="nueve"
                                                onclick="mostrar_info('9','lnueve','mnueve')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 22 al 28 de Agosto</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="diez"
                                                name="diez" onclick="mostrar_info('10','ldiez','mdiez')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 29 de Agosto al 04 de septiembre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="once"
                                                name="once" onclick="mostrar_info('11','lonce','monce')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 05 al 11 de septiembre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="doce"
                                                name="doce" onclick="mostrar_info('12','ldoce','mdoce')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 12 al 18 de septiembre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="trece"
                                                name="trece" onclick="mostrar_info('13','ltrece','mtrece')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 19 al 25 de septiembre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="catorce"
                                                name="catorce" onclick="mostrar_info('14','lcatorce','mcatorce')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 26 de septiembre al 01 de Octubre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="quince"
                                                name="quince" onclick="mostrar_info('15','lquince','mquince')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 02 a 8 de Octubre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="diezseis"
                                                name="diezseis" onclick="mostrar_info('16','ldiezseis','mdiezseis')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 09 a 16 de Octubre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="diezsiete"
                                                name="diezsiete" onclick="mostrar_info('17','ldiezsiete','mdiezsiete')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>

                                <!-- Nueva actuaizacion 2021 -->
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 16 a 23 de Octubre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="diezocho"
                                                name="diezocho" onclick="mostrar_info('18','ldiezocho','mdiezocho')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 23 a 30 de Octubre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="diezynueve"
                                                name="diezynueve" onclick="mostrar_info('19','ldiezynueve','mdiezynueve')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <!--Noviembre del 2020  ===============================/////////////////////-->
                                <div class="col-lg-12 col-md-12 mb-5 mb-lg-12">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h4><span style="color: #737373;">Informes de </span> <span
                                                    style="color: #f57d00;">Noviembre</span> </span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5> Informe Noviembre </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veinte"
                                                name="veinte" onclick="mostrar_info('20','lveinte','mveinte')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>


                                <!--diciembre -->

                                <div class="col-lg-12 col-md-12 mb-5 mb-lg-12">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h4><span style="color: #737373;">Informes de </span> <span
                                                    style="color: #f57d00;">Diciembre</span> </span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Diciembre </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veintiuno"
                                                name="veintiuno" onclick="mostrar_info('21','lveitiuno','mveintiuno')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <!--Enero 2021 -->
                                <div class="col-lg-12 col-md-12 mb-5 mb-lg-12">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h4><span style="color: #737373;">Informes de </span> <span
                                                    style="color: #f57d00;">Enero</span> </span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Enero</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veintidos"
                                                name="veintidos" onclick="mostrar_info('22','lveintidos','mveintidos')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <!--febrero 2021 -->
                                <div class="col-lg-12 col-md-12 mb-5 mb-lg-12">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h4><span style="color: #737373;">Informes de </span> <span
                                                    style="color: #f57d00;">Febrero</span> </span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Febrero</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veintitres"
                                                name="veintitres" onclick="mostrar_info('23','lveintitres','mveintitres')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <!--Marzo 2021 -->
                                <div class="col-lg-12 col-md-12 mb-5 mb-lg-12">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h4><span style="color: #737373;">Informes de </span> <span
                                                    style="color: #f57d00;">Marzo</span> </span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Marzo</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veinticuatro"
                                                name="veinticuatro"
                                                onclick="mostrar_info('24','lveinticuatro','mveinticuatro')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal fade" id="modal_uno" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" style="text-align: center;" id="staticBackdropLabel">
                                            Informe
                                            semanal COPASST</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="carga_uno" name="carga_uno" id="carga_uno">

                                        </div>
                                        <div class="cargacontent_uno" name="cargacontent_uno" id="cargacontent_uno">


                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@section('copasst-script')
    <script type="text/javascript ">
        var formularios = [
            [
                "https://docs.google.com/viewer?srcid=1bbsj5iQlLaKQHHv7V8SkxlaqTMCRj7hL&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1aRPGW0Qk40UPnga3wd1ow6yQ00L5MXPZ&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            ["vacio"],
            [
                "https://docs.google.com/viewer?srcid=1R47u2IPN3HF_RjQPDGSqdyXYtaUpZ9zG&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1S7mQBe9qEFOhjfX-CuY9sZ3PGKfYu8DC&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=17Qrc_YLjIQ-ROoWY-7ex9T0Zo_W8YkgY&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=12OwoltS2gf23MVpA8c9RRs2zBSg3eo0F&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=15r9jgky8fjocwQPRh_7nbjMx31N_rsbk&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1yEQf0WoTnG0TEKqP0kqx3LP13yx8rg8J&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1HnbI-hJ9O4XAzYeMcolX75HjOPHPe_e4&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1OHKqgtSLBnC59mPX8n3BukTINZBYNYNZ&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1TMzkZcvz2Qkahchani3pLbWnb9vkVDNd&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1UrnfUdUq8aGL4U1HO56P4lgz5lQlalrB&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1GHa-dl2s-WxoDi_6Hm8kZfuqjO2RPLFA&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1FS2DAs9yfcHR7Cz4QSQ5d-WFkXcgXzEG&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1K2XsUnu5lUA-PAfem-r5dsR6lyPiFsux&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1oelN-NqQdnRtcx9UYQGEWFAL7zkqrIrK&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1h5TWtZyvWUETxnEC2-SeKB3VUUpr58ns&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],

            [
                "https://docs.google.com/viewer?srcid=1xlDyJ-R0JFDHMOVXZbUh_bybqlyDB_DF&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1G6ZQ-aUVhxUKe27YzXkeRLEDGZmVUwno&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            // noviembre 
            [
                "https://docs.google.com/viewer?srcid=1s-sFAayhafwqe2p8yc42pG6E8tKiRpxU&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            // diciembre 
            [
                "https://docs.google.com/viewer?srcid=1MdDGMIS5GJzCkjmeSLgXKKHniYSbEC31&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],


            //    ENERO
            [
                "https://docs.google.com/viewer?srcid=1_x859C85g3pVVxozSR8-4Xl0m5CX8MIn&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            //FEBRERO
            [
                "https://docs.google.com/viewer?srcid=1jFhyEz4N0_JAr4m-CvnFQh7lVp8BsXqD&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            //MARZO
            [
                "https://docs.google.com/viewer?srcid=14IE5WMqMafrk6Eqz0PfYpePtIEZXxJRE&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            ["       "],
            ["       "],
            ["       "],
            ["       "],
            ["       "],
            ["       "],
        ]

        function mostrar_info(codigo, dato, clase) {
            var dato_clase = dato
            var aparece = clase


            let div =
                `<div class="${aparece}" name="${aparece}"  id="${aparece}" style="display:none;"><iframe style="border:0; width: 100%; height: 550px;" src="${formularios[codigo]}" width="775" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>`
            let div_header = `<div class="${dato_clase}" name="${dato_clase}"  id="${dato_clase}"> Por favor espera un momento se esta cargando todo para usted.
                    <center><img src="img/load_button.gif" width="150px" height="150px" alt=""></center></div>`
            let abrir_header = $("#carga_uno")
            let abrir_informe = $("#cargacontent_uno")
            abrir_header.html(div_header)
            abrir_informe.html(div)
            console.log(div)
            console.log(div_header)
        }
        $("#cero").click(function() { //Al hacer click al boton, Se Oculta el Div            
            setTimeout(function() {
                $("#lcero").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mcero").fadeIn(5000);
            }, 5000);
        });
        $("#uno").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#luno").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#muno").fadeIn(5000);
            }, 5000);
        });
        $("#dos").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ldos").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mdos").fadeIn(5000);
            }, 5000);
        });
        $("#tres").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ltres").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mtres").fadeIn(5000);
            }, 5000);
        });
        $("#cuatro").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lcuatro").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mcuatro").fadeIn(5000);
            }, 5000);
        });
        $("#cinco").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lcinco").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mcinco").fadeIn(5000);
            }, 5000);
        });
        $("#seis").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lseis").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#msiete").fadeIn(5000);
            }, 5000);
        });
        $("#ocho").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#locho").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mocho").fadeIn(5000);
            }, 5000);
        });
        $("#nueve").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lnueve").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mnueve").fadeIn(5000);
            }, 5000);
        });
        $("#diez").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ldiez").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mdiez").fadeIn(5000);
            }, 5000);
        });
        $("#once").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lonce").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#monce").fadeIn(5000);
            }, 5000);
        });
        $("#doce").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ldoce").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mdoce").fadeIn(5000);
            }, 5000);
        });
        $("#trece").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ltrece").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mtrece").fadeIn(5000);
            }, 5000);
        });
        $("#catorce").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lcatorce").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mcatorce").fadeIn(5000);
            }, 5000);
        });
        $("#quince").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lquince").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mquince").fadeIn(5000);
            }, 5000);
        });
        $("#diezseis").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ldiezseis").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mdiezseis").fadeIn(5000);
            }, 5000);
        });
        $("#diezsiete").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ldiezsiete").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mdiezsiete").fadeIn(5000);
            }, 5000);
        });

        // actualizacion del 2021 
        $("#diezocho").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ldiezocho").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mdiezocho").fadeIn(5000);
            }, 5000);
        });


        $("#diezynueve").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ldiezynueve").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mdiezynueve").fadeIn(5000);
            }, 5000);
        });
        $("#veinte").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lveinte").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mveinte").fadeIn(5000);
            }, 5000);
        });
        $("#veintiuno").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lveintiuno").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mveintiuno").fadeIn(5000);
            }, 5000);
        });

        $("#veintidos").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lveintidos").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mveintidos").fadeIn(5000);
            }, 5000);
        });
        $("#veintitres").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lveintitres").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mveintitres").fadeIn(5000);
            }, 5000);
        });
        $("#veinticuatro").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lveinticuatro").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mveinticuatro").fadeIn(5000);
            }, 5000);
        });
        $("#veinticinco").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lveinticinco").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mveinticinco").fadeIn(5000);
            }, 5000);
        });
        $("#veintiseis").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lveintiseis").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mveintiseis").fadeIn(5000);
            }, 5000);
        });
        $("#veintisiete").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lveintisiete").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mveintisiete").fadeIn(5000);
            }, 5000);
        });
        $("#veintiocho").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lveintiocho").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mveintiocho").fadeIn(5000);
            }, 5000);
        });
        $("#veintinueve").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#lveintinueve").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mveintinueve").fadeIn(5000);
            }, 5000);
        });
        $("#treinta").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ltreinta").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mtreinta").fadeIn(5000);
            }, 5000);
        });
        $("#treintayuno").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ltreintayuno").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mtreintayuno").fadeIn(5000);
            }, 5000);
        });
        $("#treintaydos").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ltreintaydos").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mtreintaydos").fadeIn(5000);
            }, 5000);
        });
    </script>
@endsection

@endsection
