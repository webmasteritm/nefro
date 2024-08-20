@extends('layauts.plantilla')
@section('content')
    <div style="text-align: center; margin-top: 20px;">
        <img src="{{ asset('assets/img/banners/derechos-y-deberes.jpg') }}" alt="Descripción de la imagen"
            style="max-width: 100%; height: 1%;">
    </div>
    <br>
    <div class="bg-orange text-white text-center py-1" style="background-color: #f57d00; width: 100%; height: 30px;">

        <!-- Contenido de la franja naranja -->
    </div>
    <br>
    <div class="container">




        <div class="section-title text-center">
            <h2><span style="color: #737373;">DERECHOS Y DEBERES </span> <span style="color: #f57d00;">DE LOS PACIENTES
                </span></h2>
            <p></p>
        </div>
        <div class="business_expert_area">
            <div class="business_tabs_area">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">
                                        <h3><span style="color: #F57D00;">CARTA DE </span> <span
                                                style="color: #737373;">DERECHOS</span></h3>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">
                                        <h3><span style="color: #F57D00;">CARTA DE </span> <span
                                                style="color: #737373;">DEBERES</span></h3>
                                    </a>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="border_bottom">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row align-items-center">
                                <div class="col-xl-12 col-md-12">
                                    <div class="business_info">
                                        <center>
                                            <h2><b style="color: #F57D00;">DERECHOS DE LOS PACIENTES</b
                                                    style="color: #F57D00;"></h2>
                                        </center>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">1.</b style="color: #F57D00;"> Acceder a los
                                            servicios y tecnologías de salud, que le garanticen una atención integral,
                                            oportuna y de alta calidad. Sin que se le impongan trámites administrativos
                                            adicionales de los de ley.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">2.</b style="color: #F57D00;"> Recibir cuidado
                                            oportuno y de alta calidad por un grupo especializado conformado por nefrología,
                                            nutrición, psicología, trabajo social y enfermería, que cumpla con los
                                            estándares de atención en diálisis y garantizar el cumplimiento de la mayor
                                            parte de los indicadores clínicos. Así mismo tiene derecho a recibir de su
                                            nefrólogo explicación clara de las opciones de tratamiento sus ventajas y
                                            desventajas, así como conocer los indicadores clínicos, indicadores de calidad
                                            de agua que recibe y tipo de filtros o soluciones de hemodiálisis o diálisis
                                            peritoneal que están utilizando en su tratamiento.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">3.</b style="color: #F57D00;"> Recibir por escrito
                                            las razones por las que se niega el servicio de salud.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">4.</b style="color: #F57D00;"> Recibir atención de
                                            emergencia sin retardo innecesario cuando su condición amerite sin que sea
                                            exigible documento o cancelación de pago previo alguno. Además, tiene derecho a
                                            conocer los planes de emergencia, evacuación en caso de desastre que tiene la
                                            unidad renal donde realiza la terapia.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">5.</b style="color: #F57D00;"> Brindar Atención
                                            prioritaria a usuarios menores de 18 años, gestantes, adultos mayores y
                                            población en situación de discapacidad.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">6.</b style="color: #F57D00;"> Elegir libremente
                                            el asegurador, la IPS y el profesional de la salud que quiere que lo trate,
                                            dentro de la red disponible.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">7.</b style="color: #F57D00;"> Ser orientado
                                            respecto a los servicios prestados en la Unidad.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">8.</b style="color: #F57D00;"> Que como cotizante
                                            su Entidad Administradora de Planes de Beneficios (EAPB) le pague las licencias
                                            y las incapacidades médicas.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">9.</b style="color: #F57D00;"> Tener protección
                                            especial cuando se padecen enfermedades catastróficas y de alto costo como
                                            ENFERMEDAD RENAL CRÓNICA, sin el cobro de cuotas moderadoras o copagos.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">10.</b style="color: #F57D00;"> Recibir
                                            información sobre los canales formales para presentar reclamaciones, quejas,
                                            sugerencias y en general, para comunicarse con la administración de la Unidad
                                            como ante entidades autorizadas (Secretarías de Salud, Superintendencia Nacional
                                            de Salud, Personería y Defensoría del Pueblo) y recibir una respuesta por
                                            escrito.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">11.</b style="color: #F57D00;"> Recibir un trato
                                            digno, respetando sus creencias y costumbres, así como las opiniones personales
                                            que tengan sobre los procedimientos; no ser obligados a soportar sufrimiento
                                            evitable, ni obligados a padecer enfermedades que pueden recibir tratamiento.
                                        </p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">12.</b style="color: #F57D00;"> Recibir los
                                            servicios de salud en condiciones de higiene, seguridad y respeto a su
                                            intimidad.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">13.</b style="color: #F57D00;"> A que se le preste
                                            durante todo el proceso de la enfermedad, asistencia de calidad por trabajadores
                                            de la salud debidamente capacitados y autorizados para ejercer, donde se agote
                                            todas las posibilidades de tratamiento dentro de la capacidad de la Unidad
                                            Renal, para la superación de su enfermedad.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">14.</b style="color: #F57D00;"> Recibir servicios
                                            continuos, sin interrupción y de manera integral incluyendo servicio de trabajo
                                            social, consejo nutricional y abordaje por psicología.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">15.</b style="color: #F57D00;"> Obtener
                                            información clara y oportuna de su estado de salud, de los servicios que vaya a
                                            recibir y de los riesgos del tratamiento.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">16.</b style="color: #F57D00;"> Recibir una
                                            segunda opinión médica si lo desea y a que su asegurador valore el concepto
                                            emitido por un profesional de la salud externo.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">17.</b style="color: #F57D00;"> Recibir o rechazar
                                            apoyo espiritual o moral.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">18.</b style="color: #F57D00;"> Se garantiza la
                                            confidencialidad y privacidad durante la atención médica y la adecuada custodia
                                            de toda la información consignada en la historia clínica, sin perjuicio de la
                                            posibilidad de acceso a la misma por los familiares en los eventos autorizados
                                            por la ley o las autoridades en las condiciones que esta determine.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">19.</b style="color: #F57D00;"> Obtener
                                            información clara, apropiada y suficiente por parte del profesional de la salud
                                            tratante que le permita tomar decisiones libres, conscientes e informadas
                                            respecto de los procedimientos que le vayan a practicar y riesgos de los mismos.
                                            Ninguna persona podrá ser obligada, contra su voluntad, a recibir un tratamiento
                                            de salud. En caso que desistir, rechazar o abandonar el tratamiento o terapia
                                            renal ofrecida el paciente deberá indicar esto por escrito y deberá asumir toda
                                            la responsabilidad acarreada por tal decisión.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">20.</b style="color: #F57D00;"> Ser incluido en
                                            estudios de investigaciones científicas y/o experimentales, sólo si lo autoriza.
                                        </p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">21.</b style="color: #F57D00;"> A que se le
                                            respete la voluntad de aceptación o negación de la donación de sus órganos de
                                            conformidad con la ley.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row align-items-center">
                                <div class="col-xl-12 col-md-12">
                                    <div class="business_info">
                                        <center>
                                            <h2 style="color: #F57D00;"><b>DEBERES DE LOS PACIENTES</b></h2>
                                        </center>

                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">1.</b style="color: #F57D00;"> El paciente en
                                            terapia renal tiene la responsabilidad de aprender sobre su enfermedad renal y
                                            otras aquellas relacionadas con la misma, además con los tratamientos que recibe
                                            para cada una de ellas.
                                            Tiene el deber de hablar con su nefrólogo o su equipo médico sobre las dudas que
                                            tenga sobre su enfermedad.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">2.</b style="color: #F57D00;"> Seguir las
                                            indicaciones realizadas por el equipo médico, proveer la información necesaria
                                            para su óptimo tratamiento y cumplir a cabalidad el manejo ordenado por su
                                            nefrólogo.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">3.</b style="color: #F57D00;"> Llegar a tiempo
                                            a sus terapias de diálisis y consulta médica, entendiendo con esto su grado de
                                            compromiso para una buena adherencia al tratamiento. El paciente en terapia
                                            renal tiene el deber de llamar con antelación a la Unidad Renal e informar si no
                                            puede asistir a la
                                            sesión para ser reasignado. Así mismo debe entender que la llegada tarde implica
                                            menos tiempo de diálisis, un daño a su salud, un sobrecosto al sistema y negarle
                                            la posibilidad de tratamiento a otro
                                            paciente.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">4.</b style="color: #F57D00;"> Cuidar su salud,
                                            la
                                            de su familia y su comunidad. </p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">5.</b style="color: #F57D00;"> Actuar de manera
                                            solidaria ante las situaciones que pongan en peligro la vida o la salud de las
                                            personas.
                                        </p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">6.</b style="color: #F57D00;"> Respetar al
                                            personal de la Unidad Renal y a los demás pacientes. </p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">7.</b style="color: #F57D00;"> Cumplir las
                                            normas y actuar de buena fe frente al Sistema de Salud. </p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">8.</b style="color: #F57D00;"> Brindar la
                                            información requerida para la atención médica y contribuir con los gastos de
                                            acuerdo con su capacidad económica.</p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">9.</b style="color: #F57D00;"> Usar adecuada y
                                            racionalmente los servicios ofertados por la Unidad, así como los recursos del
                                            sistema.
                                        </p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">10.</b style="color: #F57D00;"> Acatar las
                                            políticas de la unidad renal y cuidar las instalaciones donde le presten dichos
                                            servicios. </p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">11.</b style="color: #F57D00;"> Informar la no
                                            adherencia al tratamiento y asumir las consecuencias de esto cuando sea con
                                            ocasión de sus decisiones. </p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">12.</b style="color: #F57D00;"> Mantener su
                                            afiliación al Sistema General de Seguridad Social en Salud, así como realizar el
                                            pago oportuno de sus cotizaciones para asegurar la continuidad del tratamiento.
                                        </p>
                                        <p class="user-select-all" style="text-align: justify;"><b
                                                style="color: #F57D00;">13.</b style="color: #F57D00;"> Decidir su
                                            participación activa en la asociación de usuarios y diferentes medios de
                                            participación ciudadana. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div><b style="color: #F57D00;">Fuente:</b style="color: #F57D00;"> Carta de Derechos y Deberes.
                        Superintendencia Nacional de Salud. Ley 1751 de 2015.
                        Artículo
                        10°. “Ley Estatuaria de Salud”. Ministerio de Salud y Protección Social. Manual de Derechos y
                        Deberes en Pacientes con Terapia
                        de Reemplazo Renal (TRR). Defensoría del Pueblo / Cuenta de Alto Costo / Observatorio Renal
                        Interinstitucional
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
