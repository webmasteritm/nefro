@extends('layauts.plantilla')
@section('content')
    <section id="faq" class="faq section-bg">
        <div style="text-align: center; margin-top: 20px;">
            <img src="{{ asset('assets/img/banners/financieros-y-sarlaft.jpg') }}" alt="Descripción de la imagen"
                style="max-width: 100%; height: 1%;">
        </div>
        <br>
        <div class="bg-orange text-white text-center py-3" style="background-color: #f57d00">

        </div>
        <br></br>
        <div class="container" style="text-align: center;">
            <div class="section-title">
                <h2><span style="color: #737373;">ESTADOS </span> <span style="color: #f57d00;">FINANCIEROS</span>
                    </span>
                </h2>
            </div>
        </div>
        <div class="faq-list">
            <ul>
                <li data-aos="fade-up">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" class="collapse"
                        href="#faq-list-1">FUNDACIÓN NEFROUROS S.A.S <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse" data-parent=".faq-list">
                        <p>
                            <iframe src="https://www.example.com/nothing.pdf" width="100%" height="480px"></iframe>
                        </p>
                    </div>
                </li>
                <li data-aos="fade-up">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" class="collapse"
                        href="#faq-list-2">CLÍNICA NEFROUROS S.A.S<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                        <p>
                            <iframe src="https://www.example.com/nothing.pdf" width="100%" height="480px"></iframe>
                        </p>
                    </div>
                </li>
                <li data-aos="fade-up">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" class="collapse"
                        href="#faq-list-3">LABORATORIO CLÍNICO RENAL CARE S.A.S <i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                        <p>
                            <iframe src="https://www.example.com/nothing.pdf" width="100%" height="480px"></iframe>
                        </p>
                    </div>
                </li>
                <li data-aos="fade-up">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" class="collapse"
                        href="#faq-list-4">MEDIALCO ZONA FRANCA S.A.S <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                        <p>
                            <iframe src="https://www.example.com/nothing.pdf" width="100%" height="480px"></iframe>
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" href="#faq-list-5"
                        class="collapsed">NEFROBOYACÁ<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                        <p>
                            <iframe src="https://www.example.com/nothing.pdf" width="100%" height="480px"></iframe>
                        </p>
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" href="#faq-list-6"
                        class="collapsed">NEFROUROS MOM S.A.S <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                        <p>
                            <iframe src="https://www.example.com/nothing.pdf" width="100%" height="480px"></iframe>
                        </p>
                </li>
                <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" href="#faq-list-8" class="collapsed">SES
                        SALUD<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                        <p>
                            <iframe src="https://www.example.com/nothing.pdf" width="100%" height="480px"></iframe>


                        </p>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-run icon-help"></i> <a data-toggle="collapse" href="#faq-list-7"
                        class="collapsed">NEFROSERVICIOS<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-7" class="collapse" data-parent=".faq-list">
                        <p>
                            <iframe src="https://www.example.com/nothing.pdf" width="100%" height="480px"></iframe>
                        </p>
                </li>
                <br>
                <br>
            </ul>

        </div>

        </div>
    </section>
@endsection
