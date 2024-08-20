@extends('../layauts.plantilla')
@section('content')
    <section id="contact" class="contact">


        <div style="text-align: center; margin-top: 20px;">
            <img src="{{ asset('assets/img/banners/citas-en-linea.jpg') }}" alt="Descripción de la imagen"
                style="max-width: 100%; height: 1%;">
        </div>
        <br>
        <div class=" text-center">
            <h2><span style="color: #F57D00;"><b>CITAS EN </b> </span> <span style="color: #737373;"><b>LÍNEA</b> </span></h2>
        </div>

        <div class="container">
            <div class="mt-5 row justify-content-center">
                <div class="col-lg-8">
                    <div class="border p-4">
                        <form method="post" action="{{ route('enviar.citas') }}"
                            class="php-email-form alerta needs-validation" novalidate>
                            @csrf
                            <div class="form-row">
                                <h6 style="text-align: center;">Por favor gestione el siguiente formulario para solicitar su
                                    cita</h6>
                                <br><br>
                                <div class="form-group col-md-12">
                                    <label for="nombre">NOMBRE COMPLETO:</label>
                                    <input type="text" class="form-control" placeholder="Ejemplo: Andres Felipe Medina"
                                        required name='nombre' id="nombre">
                                    <div class="invalid-feedback">
                                        *Por favor digite su nombre.
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cedula">NÚMERO DE CÉDULA:</label>
                                    <input type="number" class="form-control" placeholder="Ejemplo: 10037251436" required
                                        name='cedula' id="cedula">
                                    <div class="invalid-feedback">
                                        *Por favor digite su nombre.
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telefono">TELÉFONO:</label>
                                    <input type="number" class="form-control" placeholder="Ejemplo: 317 123 1243" required
                                        name="telefono" id="telefono">
                                    <div class="invalid-feedback">
                                        *Por favor Verfique su n&uacutemero de tel&eacutefono.
                                    </div>
                                </div>


                                <!-- Otros campos del formulario -->
                                <div class="form-group col-md-6">
                                    <label for="direccion">DIRECCIÓN:</label>
                                    <input type="text" class="form-control"
                                        placeholder="Ejemplo: Carrera 15 - calle 9 esquina " name='direccion' id="direccion"
                                        required>
                                    <div class="invalid-feedback">
                                        *Por favor Digite una direcci&oacuten de residencia.
                                    </div>
                                </div>


                                <!-- Otros campos del formulario -->
                                <div class="form-group col-md-6">
                                    <label for="email">EMAIL:</label>
                                    <input type="email" class="form-control" placeholder="Ejemplo: Andres12@gmail.com"
                                        required name="email" id="email">
                                    <div class="invalid-feedback">
                                        *Por favor Verfique su direcci&oacuten de Correo electr&oacutenico.
                                    </div>
                                </div>
                                <!-- Otros campos del formulario -->
                                <div class="form-group col-md-6">
                                    <label for="sedes">SEDES:</label>
                                    <select class="form-control" name='sedes' id="sedes" required>
                                        <option selected disable value="">-- Seleccionar --</option>
                                        <option value=" gerenciaapartado@nefrouros.net">Apartadó</option>
                                        <option value="gerenciaarmenia@nefrouros.net">Armenia</option>
                                        <option value="gerencianefroservicios@nefrouros.net">Barrancabermeja</option>
                                        <option value="gerenciabarranquilla@nefrouros.net">Barranquilla</option>
                                        <option value="gerenciabello@nefrouros.net">Bello</option>
                                        <option value="gerenciabogota@nefrouros.net">Bogot&aacute;</option>
                                        <option value="gerenciacucuta@nefrouros.net">C&uacute;cuta</option>
                                        <option value="gerenciatunja@nefrouros.net">Duitama</option>
                                        <option value="gerenciaenvigado@nefrouros.net">Envigado</option>
                                        <option value="gerenciagarzon@nefrouros.net">Garz&oacute;n</option>
                                        <option value="gerenciaibague@nefrouros.net">Ibagué</option>
                                        <option value="gerencia.nefrolorica@nefrouros.net">Lorica</option>
                                        <option value="gerencianefroprev.medellin@nefrouros.net">Nefropre. Medellín
                                        </option>
                                        <option value="gerenciamonteria@nefrouros.net">Monter&iacute;a</option>
                                        <option value="webmaster@itmsas.net">Neiva</option>
                                        <option value="webmaster@nefrouros.net">Pasto</option>
                                        <option value="gerenciapereira@nefrouros.net">Pereira</option>
                                        <option value="gerenciapitalito@nefrouros.net">Pitalito</option>
                                        <option value="gerenciapopayan@nefrouros.net">Popay&aacute;n</option>
                                        <option value="gerenciapuertoasis@nefrouros.net">Puerto Asís</option>
                                        <option value="coordinacionnefroprevencionzonanorte@nefrouros.net">Rionegro
                                        </option>
                                        <option value="gerenciatunja@nefrouros.net">Tunja</option>
                                        <option value="gerenciavalledupar@nefrouros.net">Valledupar</option>
                                        <option value="gerenciasessalud@nefrouros.net">Yopal</option>
                                        <!-- Opciones para seleccionar la sede -->
                                    </select>
                                    <div class="invalid-feedback">
                                        *Seleccione la sede para su cita.
                                    </div>
                                </div>
                                <!-- Otros campos del formulario -->
                                <div class="form-group col-md-6">
                                    <label for="fena">FECHA DE NACIMIENTO:</label>
                                    <input type="date" class="form-control" id="fena" name='fena'
                                        placeholder="fena" required>
                                    <div class="invalid-feedback">
                                        *Por favor seleccione la su fecha de nacimiento.
                                    </div>
                                </div>
                                <!-- Otros campos del formulario -->
                                <div class="form-group col-md-12">
                                    <label for="entidad">ASEGURADORA DE SERVICIOS DE SALUD (EPS):</label>
                                    <input type="text" class="form-control" placeholder="Ejemplo: EPS " name='entidad'
                                        required id="entidad">
                                    <div class="invalid-feedback">
                                        *Por favor Digite la entidad prestadora de salud a la que pertenece.
                                    </div>
                                </div>
                                <!-- Otros campos del formulario -->
                                {{-- <div class="form-group col-md-6">
                                    <label for="verificacion">Digite este código:1030</label>
                                    <input type="text" class="form-control" placeholder="verficacion"
                                        name="verificacion" required id="verificacion" required>
                                    <div class="invalid-feedback">
                                        *Por favor Digite el código 1030.
                                    </div>
                                </div> --}}



                                <!-- Otros campos del formulario -->
                                {{-- <div class="form-group col-md-6">
                                    <label for="genero">Género:</label>
                                    <select class="form-control" name='genero' id="genero" required>
                                        <option selected disable value="">Seleccionar</option>
                                        <option>Maculino</option>
                                        <option>Femenino</option>
                                        <option>Prefiero no decirlo</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        *Seleccione una opción.
                                    </div>
                                </div> --}}
                                <!-- Otros campos del formulario -->
                                <div class="form-group col-md-12">
                                    <label for="mensaje">MENSAJE:</label>
                                    <textarea class="form-control" id="mensaje" name="mensaje" required placeholder="Describa su mensaje"></textarea>
                                    <div class="invalid-feedback">
                                        *Por favor d&eacute;janos un mensaje.
                                    </div>
                                </div>
                                <!-- Otros campos del formulario -->
                                <div class="form-group col-md-12 text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required>
                                        <label class="form-check-label" for="invalidCheck" style="margin-top: 15px">
                                            Acepto T&eacuterminos, Condiciones y Pol&iacuteticas de Privacidad.
                                        </label>
                                        <div class="invalid-feedback">
                                            *Acepte las pol&iacuteticas de Privacidad para continuar.
                                        </div>
                                    </div>
                                </div>
                                <!-- Botón de enviar -->
                                <div class="form-group col-md-10 text-center">
                                    <button type="submit" class="btn btn-success" name='btn_send'>Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- End Contact Section -->
@endsection
@section('validate')
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @if ($mensaje = Session::get('success'))
        @if ($mensaje == 'ok')
            <script>
                Swal.fire(
                    'Enviado!',
                    'Se enviaron los datos de cita Correctamente,Pronto recibira una notificacion a su correo eletronico!',
                    'success'
                );
            </script>
        @else
            <script>
                Swal.fire(
                    'Se produjo un error!',
                    'ups! Vaya al parecer hay un problema al enviar su solicitud',
                    'error'
                );
            </script>
        @endif
    @endif
    <script>
        $('.alerta').submit(function(e) {
            e.preventDefault();
            swal.fire({
                title: "Enviar sus datos?",
                text: "por favor verifique y confirme!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Si,Acepto!",
                cancelButtonText: "No, cancelar!",
                reverseButtons: !0
            }).then((result) => {
                if (result.value) {
                    this.submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelado',
                        'Se cancelo el envio vuelve a intentarlo!',
                        'error'
                    );
                }
            });
        });
    </script>
@endsection
