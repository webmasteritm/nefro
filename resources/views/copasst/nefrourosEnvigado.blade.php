@extends('../layauts.plantilla')
@section('content')
    <section>
        <div class="container">
            <div class="section-title">
                <h2><span style="color: #737373;">NUESTROS </span> <span style="color: #f57d00;">INFORMES</span> </span>
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
                                            <button type="button" class="btn btn-secondary " id="diez" name="diez"
                                                onclick="mostrar_info('10','ldiez','mdiez')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 29 de Agosto al 04 de septiembre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="once" name="once"
                                                onclick="mostrar_info('11','lonce','monce')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 05 al 11 de septiembre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="doce" name="doce"
                                                onclick="mostrar_info('12','ldoce','mdoce')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 12 al 18 de septiembre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="trece" name="trece"
                                                onclick="mostrar_info('13','ltrece','mtrece')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 19 al 25 de septiembre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="catorce" name="catorce"
                                                onclick="mostrar_info('14','lcatorce','mcatorce')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 26 de septiembre al 01 de Octubre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="quince" name="quince"
                                                onclick="mostrar_info('15','lquince','mquince')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 02 a 8 de Octubre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="diezseis" name="diezseis"
                                                onclick="mostrar_info('16','ldiezseis','mdiezseis')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 09 a 16 de Octubre</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="diezsiete" name="diezsiete"
                                                onclick="mostrar_info('17','ldiezsiete','mdiezsiete')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>

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
                                            <button type="button" class="btn btn-secondary " id="diezocho" name="diezocho"
                                                onclick="mostrar_info('18','ldiezocho','mdiezocho')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>
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
                                            <h5>Informe Semana del 30 de Octubre al 6 de noviembre </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veinte" name="veinte"
                                                onclick="mostrar_info('20','lveinte','mveinte')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 6 al 13 </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veintiuno" name="veintiuno"
                                                onclick="mostrar_info('21','lveintiuno','mveintiuno')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 13 al 20 </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veintidos" name="veintidos"
                                                onclick="mostrar_info('22','lveintidos','mveintidos')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 20 al 27 </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veintitres"
                                                name="veintitres" onclick="mostrar_info('23','lveintitres','mveintitres')"
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
                                            <h5>Informe Semana del 30 de noviembre al 4 de diciembre </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veinticuatro"
                                                name="veinticuatro"
                                                onclick="mostrar_info('24','lveinticuatro','mveinticuatro')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 4 al 11 </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veinticinco"
                                                name="veinticinco"
                                                onclick="mostrar_info('25','lveinticinco','mveinticinco')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 11 al 18 </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veintiseis"
                                                name="veintiseis" onclick="mostrar_info('26','lveintiseis','mveintiseis')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">
                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 18 al 25 </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veintitres"
                                                name="veintitres" onclick="mostrar_info('27','lveintitres','mveintitres')"
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
                                                    style="color: #f57d00;">Enero 2021</span> </span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 25 de diciembre al 4 de enero</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veintiocho"
                                                name="veintiocho" onclick="mostrar_info('28','lveintiocho','mveintiocho')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">
                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 4 al 8 </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="veintinueve"
                                                name="veintinueve"
                                                onclick="mostrar_info('29','lveintinueve','mveintinueve')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 8 al 15 </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="treinta" name="treinta"
                                                onclick="mostrar_info('30','ltreinta','mtreinta')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 25 al 30 </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="treintayuno" name="treintayuno"
                                                onclick="mostrar_info('31','ltreintayuno','mtreintayuno')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <!--febrero2021 -->

                                <div class="col-lg-12 col-md-12 mb-5 mb-lg-12">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h4><span style="color: #737373;">Informes de </span> <span
                                                    style="color: #f57d00;">Febrero 2021</span> </span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 1 al 6 de Febrero </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="treintaytres"
                                                name="treintaytres" onclick="mostrar_info('33','ltreintaytres','mtreintaytres')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
    
                                {{-- <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 8 al 13 Febrero </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="treintaycuatro" name="treintaycuatro"
                                                onclick="mostrar_info('34','ltreintaycuatro','mtreintaycutro')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 8 al 13 Febrero </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="treintaycuatro" name="treintaycuatro"
                                                onclick="mostrar_info('34','ltreintaycuatro','mtreintaycuatro')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 15 al 20 Febrero </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="treintayseis" name="treintayseis"
                                                onclick="mostrar_info('36','ltreintayseis','mtreintayseis')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe Semana del 21 al 28 Febrero </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="treintaycinco" name="treintaycinco"
                                                onclick="mostrar_info('35','ltreintaycinco','mtreintaycinco')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
                                <!--marzo 2021 -->

                                <div class="col-lg-12 col-md-12 mb-5 mb-lg-12">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h4><span style="color: #737373;">Informes de </span> <span
                                                    style="color: #f57d00;">Marzo 2021</span> </span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe 4 de Marzo </h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="treintaysiete"
                                                name="treintaysiete" onclick="mostrar_info('37','ltreintaysiete','mtreintaysiete')"
                                                data-toggle="modal" data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <div class="feature-1 border person text-center">

                                        <div class="feature-1-content">
                                            <h5>Informe 26 de Marzo</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary " id="treintayocho" name="treintayocho"
                                                onclick="mostrar_info('38','ltreintayocho','mtreintayocho')" data-toggle="modal"
                                                data-target="#modal_uno">Ver Informe </button>
                                            <!-- Modal -->
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="modal fade" id="modal_uno" data-backdrop="static" data-keyboard="false" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" style="text-align: center;" id="staticBackdropLabel">Informe
                                            semanal COPASST</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="carga_uno" name="carga_uno" id="carga_uno">

                                        </div>
                                        <div class="cargacontent_uno" name="cargacontent_uno" id="cargacontent_uno">


                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
                "https://docs.google.com/viewer?srcid=1WGIwa4QaXQyZluM0dM_XmHp548c6hlUY&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1_llShwrAZ_esbXvHbOZ5No-UocAorcGtpid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            ["vacio"],
            [
                "https://docs.google.com/viewer?srcid=10MFxvgs0bPDpqU__AkvBNR0qLm9QM06v&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=14R32-D-xHCvxryODvKaZTsaKxddAkIEA&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1a9lmLZQEMTI6X1yn6lQafPo44iyP-R14&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=14GFlKRAHSLz_QWgoqZby3y0flhiXXAhW&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=15r9jgky8fjocwQPRh_7nbjMx31N_rsbk&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=10DXURO1DVuNemSg0TA4kPzHlxGeEECMo&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1nT17G0ZOs6sj_C_xyRxTM_AZ_3zClTZ4&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1IfqjDHQri52HZ2wuvK-0cE6TLBmG_U8w&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1OcfDRvst0Sjl7UoJuIEAQyKsd_9Q-aiK&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            ["https://docs.google.com/viewer?srcid=vacio&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1GaBRbulw8xGxjp2VdHRUs-sHlW3rlYwX&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1yUNRs82-Xcd7f23H_LdTNLC59U3Q4ua2&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1YjJzhS4htlvZvwBKIOwoc-2nGfZlqAEf&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1BZtaqskwecQSbOHDD39N-0NcMr8nRgBt&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],
            [
                "https://docs.google.com/viewer?srcid=1yUNRs82-Xcd7f23H_LdTNLC59U3Q4ua2&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
            ],

            [
                "https://docs.google.com/viewer?srcid=12-JuqAHrMZMhZ18uCeb1DhW6_YTQa-xQ&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1iLfIth5dPe3SxL6qOLGUbDKHGMHDMpXU&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],

            //Noviembre 
            [
                "https://docs.google.com/viewer?srcid=1aZMhk-1yiYg3aJNxIXqVAWewcxr1Inpi&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1XeN3ar-oVyFoMZce_dKGILnonUIBQyoI&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1CWp-tUyzbIqxtHbWZwiXo6M2bhpf7Dsb&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1BrbykuUpGh5PPPdN_SYBWYqzYW81V7V3&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],

            //Diciembre 
            [
                "https://docs.google.com/viewer?srcid=1EvXQzfHgDu_nePHfaAILtxEQa6b47AOY&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1GC5a3mB24GDG-IjUJO0fBJiiTnlUJLZ1&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1Svkf2r6q_aicbkhBFwJ4RGH5t7xaFkOL&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1lqWTllIVV5T60npdzJ8BUcH2WMBGhlTp&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],

            // enero
            [
                "https://docs.google.com/viewer?srcid=156eNZ7JQdkgj96_f4_jNLh9ajEXiTCg-&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1iTAgsjMHy2FsGwDzTEcXl4C_GtN2OuLh&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1LNz825GtQm0OUW4AjxkTMi4xYKHM3ZBX&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1nXqSB2AwB1_UpAd0Lv7BAX2uhcU9mVCQ&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1N3PmD_w8q57mLJGaGM1tjLnMAOdRnUSG&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],

             // febrero
             [
                "https://docs.google.com/viewer?srcid=1OiE-_5KpPWaIt0RKnmbP3o_TRxfXYUCY&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=14XPabALFo2xAvg8M3XEx79HTkq1MdwqJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
                [
                "https://docs.google.com/viewer?srcid=19N7OhRVKO8WGN6n9yr6pSveU7egeKhVC&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=1XXbs6Tyz2sIYGGGYUAB5kioL6z_T3qY5&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            
             // Marzo
             [
                "https://docs.google.com/viewer?srcid=1GYBv4SgjEhvX0CgAE9oAxHEDGEOv_0hV&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
            [
                "https://docs.google.com/viewer?srcid=15v70Wn5vaor_eFw2vdXqhKnS8FGtiOo7&pid=explorer&efh=false&a=v&chrome=false&embedded=true"],
        ]

        function mostrar_info(codigo, dato, clase) {
            var dato_clase = dato
            var aparece = clase

            let div =
                `<div class="${aparece}" name="${aparece}"  id="${aparece}" style="display:none;"><iframe style="border:0; width: 100%; height: 550px;" src="${formularios[codigo]}" width="775" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>`
            let div_header =
                `<div class="${dato_clase}" name="${dato_clase}"  id="${dato_clase}"> Por favor espera un momento se esta cargando todo para usted.
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
        $("#treintaytres").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ltreintaytres").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mtreintaytres").fadeIn(5000);
            }, 5000);
        });
        $("#treintaycuatro").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ltreintaycuatro").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mtreintaycuatro").fadeIn(5000);
            }, 5000);
        });
        $("#treintaycinco").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ltreintaycinco").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mtreintaycinco").fadeIn(5000);
            }, 5000);
        });
        $("#treintayseis").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ltreintayseis").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mtreintayseis").fadeIn(5000);
            }, 5000);
        });
        $("#treintaysiete").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ltreintaysiete").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mtreintaysiete").fadeIn(5000);
            }, 5000);
        });
        $("#treintayocho").click(function() { //Al hacer click al boton, Se Oculta el Div
            setTimeout(function() {
                $("#ltreintayocho").fadeOut(7000);
            }, 1000);
            setTimeout(function() {
                $("#mtreintayocho").fadeIn(5000);
            }, 5000);
        });

    </script>

@endsection
@endsection
