@extends('../layauts.plantilla')

@section('content')
    <section id="contact" class="contact">
        <div style="text-align: center; margin-top: 20px;">
            <img src="{{ asset('assets/img/banners/pqr.webp') }}" alt="Descripción de la imagen"
                style="max-width: 100%; height: 50%;">
        </div>


        <br>
        <div class="text-center" style="margin-top: 5px;">
            <h2><span style="color: #F57D00;"><b>FORMULARIO</b> </span> <span style="color: #737373;"><b>PQRSF</b> </span>
            </h2>
        </div>

        <div class="container">
            <div class="mt-5 row justify-content-center">
                <div class="col-lg-8">
                    <div class="border p-4">



                        <form method="post" action="{{ route('enviar.sugerencias') }}"
                            class="php-email-form alerta needs-validation" novalidate>
                            @csrf

                            <div class="form-row">
                                <h6 style="text-align: center;">Con el ánimo de responder a su comentario, digilencie los
                                    siguientes datos:</h6>
                                <br><br>
                                <div class="form-group col-md-12">
                                    <label for="evaluar3">NOMBRE COMPLETO:</label>
                                    <input type="text" class="form-control" placeholder="Ejemplo: Andres Felipe Medina"
                                        required name='evaluar3' id="evaluar3">
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
                                    <label for="evaluar5">TELÉFONO:</label>
                                    <input type="number" class="form-control" placeholder="Ejemplo: 317 123 1243" required
                                        name="evaluar5" id="evaluar6">
                                    <div class="invalid-feedback">
                                        *Por favor Verfique su n&uacutemero de tel&eacutefono.
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="direccion">DIRECCIÓN:</label>
                                    <input type="text" class="form-control"
                                        placeholder="Ejemplo:Carrera 15 - calle 9 esquina " name='direccion' id="direccion"
                                        required>
                                    <div class="invalid-feedback">
                                        *Por favor Digite una direcci&oacuten de residencia.
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="evaluar4">E-MAIL:</label>
                                    <input type="email" class="form-control" placeholder="Ejemplo: Andres12@gmail.com"
                                        required name="evaluar4" id="evaluar4">
                                    <div class="invalid-feedback">
                                        *Por favor Verfique su direcci&oacuten de Correo electr&oacutenico.
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="evaluar7">ASUNTO:</label>
                                    <select id="evaluar7" class="form-control" name='evaluar7' id="evaluar7" required>
                                        <option selected disable value>-- Seleccionar --</option>
                                        <option>Petición</option>
                                        <option>Queja</option>
                                        <option>Reclamo</option>
                                        <option>Sugerencia</option>
                                        <option>Felicictación</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        *Por favor seleccione una opción.
                                    </div>
                                </div>
                                {{-- <div class=" form-group col-md-6">
                                <label for="verificacion">Digite este código:1030</label>
                                <input type="text" class="form-control" placeholder="verficacion" name="verificacion"
                                    id="verificacion" required>
                                <div class="invalid-feedback">
                                    *Por favor Digite el código 1030.
                                </div>

                            </div> --}}

                                <div class=" form-group col-md-6">
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
                                        <option value=" webmaster@nefrouros.net">Pasto</option>
                                        <option value="gerenciapereira@nefrouros.net">Pereira</option>
                                        <option value=" gerenciapitalito@nefrouros.net">Pitalito</option>
                                        <option value="gerenciapopayan@nefrouros.net">Popay&aacute;n</option>
                                        <option value="gerenciapuertoasis@nefrouros.net">Puerto Asís</option>
                                        <option value="coordinacionnefroprevencionzonanorte@nefrouros.net">Rionegro
                                        </option>
                                        <option value="gerenciatunja@nefrouros.net">Tunja</option>
                                        <option value="gerenciavalledupar@nefrouros.net">Valledupar</option>
                                        <option value="gerenciasessalud@nefrouros.net">Yopal</option>
                                        {{-- <option value="gerenciavalledupar@nefrouros.net">Medelli&oacute;</option> --}}

                                    </select>
                                    <div class="invalid-feedback">
                                        *Por favor seleccione la sede que quiere evaluar.
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="evaluar">SERVICIO RECIBIDO:</label>
                                    <input type="text" class="form-control" placeholder="Ejemplo: Diálisis peritoneal"
                                        required name="evaluar4" id="evaluar4">
                                    <div class="invalid-feedback">
                                        *Por favor Verfique su direcci&oacuten de Correo electr&oacutenico.
                                    </div>
                                </div>



                                <div class="form-group col-md-6">
                                    <label for="evaluar1">FECHA DE ATENCIÓN:</label>
                                    <input type="date" class="form-control " id="evaluar1" name='evaluar1'
                                        placeholder="Fecha" required>
                                    <div class="invalid-feedback">
                                        *Por favor seleccione la su fecha de en en que está diligenciando el formulario.
                                    </div>
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="evaluar6">ASEGURADORA DE SERVICIOS DE SALUD (EPS):</label>
                                    <input type="text" class="form-control" placeholder="Nueva EPS" name='evaluar6'
                                        id="evaluar6" required>
                                    <div class="invalid-feedback">
                                        *Por favor Digite la entidad prestadora de salud a la que pertenece.
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="evaluar7">RÉGIMEN:</label>
                                    <select id="evaluar7" class="form-control" name='evaluar7' id="evaluar7" required>
                                        <option selected disable value>-- Seleccionar --</option>
                                        <option>Subsidiado</option>
                                        <option>Contributivo</option>
                                        <option>Especial</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        *Por favor seleccione una opción.
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="evaluar12">MENSAJE:</label>
                                    <textarea class="form-control" id="evaluar12" name="evaluar12" placeholder="Describa su mensaje" required></textarea>
                                    <div class="invalid-feedback">
                                        *Por favor d&eacutejanos un comentario.
                                    </div>
                                </div>
                                <div class="form-group col-md-12 text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required>
                                        <label class="form-check-label" for="invalidCheck" style="margin-top: 15px">
                                            Acepto Terminos, Condiciones y Pol&iacuteticas de Privacidad.
                                        </label>
                                        <div class="invalid-feedback">
                                            *Acepte las pol&iacuteticas de Privacidad para continuar.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-10 text-center">
                                    <button type="submit" class="btn btn-success" name='btn_send'>Enviar </button>
                                </div>
                        </form>


                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->
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
                )
            </script>
        @else
            <script>
                Swal.fire(
                    'Se produjo un error!',
                    'ups! Vaya al parecer hay un problema al enviar su solicitud',
                    'error'
                )
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
                    )
                }
            })
        });
    </script>
@endsection
{{--  --}}
