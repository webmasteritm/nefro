@extends('layauts.plantilla')
@section('content')
    <section id="faq" class="faq section-bg">
        <div style="text-align: center; margin-top: 20px;">
            <img src="{{ asset('assets/img/banners/preguntas-frecuentes.jpg') }}" alt="Descripción de la imagen"
                style="max-width: 100%; height: 50%;">
        </div>
        <br>
        <div class="bg-orange text-white text-center py-1" style="background-color: #f57d00; width: 100%; height: 30px;">
        </div>

        <div class="container">
            <br>
            <div class="text-center">
                <h2><b><span style="color: #737373;">PREGUNTAS </span> <span style="color: #f57d00;">FRECUENTES</span></b>
                    </span>
                </h2>
            </div>
        </div>
        <div class="faq-list">
            <ul>

                <li data-aos="fade-up">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">¿Qué
                        significa un balance hídrico neutro? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                        <p>
                            Es el equilibrio que debe existir entre la cantidad de líquidos ingeridos y la cantidad de
                            líquidos eliminados del cuerpo humano, lo normal del balance hídrico es que sea neutro.
                        </p>
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" href="#faq-list-10"
                        class="collapsed">¿Cuál es la importancia de mantener un balance hídrico neutro?<i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-10" class="collapse" data-parent=".faq-list">
                        <p>
                            La importancia radica en mantener un peso constante, lo normal es que el balance sea neutro.
                        </p>
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" href="#faq-list-9"
                        class="collapsed">¿Cuánto líquido debe ingerir un paciente con patología renal anúrico?<i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-9" class="collapse" data-parent=".faq-list">
                        <p>
                            Para mantener el balance hídrico neutro los valores deberían ser: bebidas orales 400 cc, agua de
                            alimentos 400 cc, metabolismo endógeno (el cual es constante) 200 cc; es decir, lo recomendado
                            para ingesta de líquidos (bebidas y alimentos) para mantener un balance hídrico nutro son 800cc
                            24 hrs, solo reponer lo perdido por piel, pulmones y heces. Con esta medida de control de
                            líquidos ingeridos y eliminados se obtiene un manejo constante de peso seco, lo que lleva a una
                            menor morbilidad y mortalidad en los pacientes renales.
                        </p>

                </li>


                <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" href="#faq-list-12" class="collapsed">¿Qué
                        es el peso seco? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-12" class="collapse" data-parent=".faq-list">
                        <p>Es el peso en Kgrs, sin edemas, que una persona maneja y que se mantiene gracias al balance
                            hídrico.</p>

                </li>

                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">¿Por
                        qué vías se gana líquidos ?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                        <p>
                            Bebidas orales (líquidos, jugos) 1500ml, agua de alimentos (sopas, caldos) 800 ml, al
                            metabolizar los alimentos 300 ml, total promedio de 2500 ml.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" href="#faq-list-3"
                        class="collapsed">¿Cuánto se ingiere en promedio de líquidos orales? <i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                        <p>
                            En personas normales se puede ingerir entre 1500 a 3500 ml, promedio de 2000 cc en 24 horas;
                            ahora en pacientes con patología renal los líquidos ingeridos en bebidas y alimentos debería ser
                            de 800 ml en 24 horas.
                        </p>

                </li>
                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" href="#faq-list-6" class="collapsed">¿Por
                        cuáles vías se pierde los líquidos corporales?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                        <p>
                            Perdemos líquidos corporales por diferentes vías como son: piel, pulmones, heces o materia fecal
                            y riñón.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" href="#faq-list-4"
                        class="collapsed">¿Cuánto volumen contribuye cada vía en la pérdida de líquidos?<i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                        <p>
                            El valor promedio normal es de: Piel: promedio desde 400 ml. Pulmones: desde 400 ml. Heces:
                            desde 200 ml. Riñón: desde 600 a 2000 ml. Las personas en situación estable presentan una
                            eliminación constante de líquidos a través de la piel, pulmones y tubo digestivo de 1000 ml, es
                            decir, las pérdidas por estas vías son fijas quedando solo el riñón como única vía para mantener
                            el balance hídrico neutro, ya que presenta una variabilidad amplia en el volumen de orina
                            eliminada en 24 horas que puede oscilar desde 600 cc hasta 2000 cc.
                        </p>
                    </div>
                </li>



                <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" href="#faq-list-7"
                        class="collapsed">¿Cuánto líquido se pierde normalmente en 24 horas?<i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-7" class="collapse" data-parent=".faq-list">
                        <p>
                            Se puede perder desde 1500 hasta 3500 ml. En personas con diuresis normal se pierde en promedio
                            2000 ml, en personas anúricas solo se pierde 1000 ml en 24 horas.
                        </p>

                </li>




            </ul>
        </div>

        </div>
        <br><br>
    </section>
@endsection
