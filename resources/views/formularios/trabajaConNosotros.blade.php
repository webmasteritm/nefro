@extends('../layauts.plantilla')
<br><br><br><br>
@section('content')
    <section id="contact" class="contact">

        <div class="container">

            <div class="section-title text-center">
                <h2><span style="color: #F57D00;">TRABAJE CON</span> <span style="color: #737373;">NOSOTROS</span></h2>
            </div>
        </div>
        <div class="contact-form d-flex align-items-center justify-content-center" style="padding-top: 0%;">
            <!-- Utiliza las clases d-flex, align-items-center y justify-content-center -->
            <div class="text-center" style="padding-top: 0%;">

                {{-- <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Ubicaci&oacute;n</h4>
                            <p>En la seccion sedes del menu principal encontrara informaci&oacute;n detallada de la sede de
                                su interes.</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>envianos un mensaje:</h4>
                            <p>Nefrouros ofrece a todos nuestros pacientes la posibilidad que contactar,enviar sugerencias o
                                pedir citas por medio de nefrouros.net</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Llamanos:</h4>
                            <p>En la seccion sedes del menu principal encontrara informaci&oacute;n detallada de la sede de
                                su interes.</p>
                        </div>

                    </div>

                </div> --}}
                <div class="mt-5 col-lg-8 mt-lg-0 mx-auto text-center">
                    <form method="post" action="{{ route('enviar.trabajo') }}"
                        class="php-email-form alerta needs-validation" novalidate>
                        @csrf

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="trabaja1">Nombre</label>
                                <input type="text" class="form-control" placeholder="Ejemplo: Andres Felipe Medina"
                                    required name='trabaja1' id="trabaja1">
                                <div class="invalid-feedback">
                                    *Por favor digite su nombre.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="trabaja2">Fecha</label>
                                <input type="date" class="form-control " id="trabaja2" name='trabaja2'
                                    placeholder="Fecha" required>
                                <div class="invalid-feedback">
                                    *Por favor seleccione la su fecha de en en que está diligenciando el formulario.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="trabaja3">Email</label>
                                <input type="email" class="form-control" placeholder="Ejemplo: Andres12@gmail.com"
                                    required name="trabaja3" id="trabaja3">
                                <div class="invalid-feedback">
                                    *Por favor Verfique su direcci&oacuten de Correo electr&oacutenico.
                                </div>
                            </div>

                            <div class=" form-group col-md-6">
                                <label for="sedes">Sede donde desea aplicar:</label>
                                <select class="form-control" name='sedes' id="sedes" required>
                                    <option selected disable value="">Seleccionar</option>
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
                                    <option value="gerencianefroprev.medellin@nefrouros.net">Nefropre. Medellín</option>
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
                                </select>
                                <div class="invalid-feedback">
                                    *Por favor seleccione la sede que quiere evaluar.
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="trabaja4">Tel&eacute;fono</label>
                                <input type="number" class="form-control" placeholder="Ejemplo: 317  667 6549" required
                                    name="trabaja4" id="evaluar6">
                                <div class="invalid-feedback">
                                    *Por favor Verfique su n&uacutemero de tel&eacutefono.
                                </div>
                            </div>
                            <div class=" form-group col-md-6">
                                <label for="trabaja5">Digite este código:1030</label>
                                <input type="text" class="form-control" placeholder="verficacion" name="trabaja5"
                                    id="trabaja5" required>
                                <div class="invalid-feedback">
                                    *Por favor Digite el código 1030.
                                </div>

                            </div>
                            <div class="form-group col-md-6">
                                <section id='soltar'>
                                    <strong>Ingrese su hoja de vida:</strong>

                                </section>
                                <div class="form-group col-md-9">
                                    <br>
                                    <input type="file" name="documento[]" id="documento[]">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="trabaja6">Comentario</label>
                                <textarea class="form-control" id="trabaja6" name="trabaja6" placeholder="Describa el motivo de su comentario"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    *Por favor d&eacutejanos un comentario.
                                </div>
                            </div>
                            <div class="form-group">
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
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-success" name='btn_send'>Enviar </button>
                            </div>
                    </form>

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
