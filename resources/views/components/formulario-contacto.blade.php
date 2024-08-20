<div class="mt-5 col-lg-8 mt-lg-0  text-center">
    <form method="post" action="{{ route('enviar.contactenos') }}" class="php-email-form alerta needs-validation"
        novalidate>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombres</label>
                <input type="text" class="form-control" placeholder="Ejemplo: Andres Felipe Medina" name='nombre'
                    required id="nombre">
                <div class="invalid-feedback">
                    *Por favor digite su nombre.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Ejemplo: Andres12@gmail.com" name="email"
                    required id="email">
                <div class="invalid-feedback">
                    *Por favor Verfique su direcci&oacuten de Correo electr&oacutenico.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="telefono">Tel&eacute;fono</label>
                <input type="number" class="form-control" placeholder="Ejemplo: 317  123 1243" name="telefono" required
                    id="telefono" />
                <div class="invalid-feedback">
                    *Por favor Verfique su n&uacutemero de tel&eacutefono.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="direccion">Direcci&oacuten</label>
                <input type="text" class="form-control" placeholder="Ejemplo:Carrera 15 - calle 9 esquina " required
                    name="direccion" id="direccion">
                <div class="invalid-feedback">
                    *Por favor Digite una direcci&oacuten de residencia.
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="verificacion">Digite este c&oacutedigo:1030</label>
                <input type="text" class="form-control" placeholder="verficacion" name="verificacion"
                    id="verificacion" required>

                <div class="invalid-feedback">
                    *Por favor Verfique el c&oacutedigo 1030.
                </div>
            </div>


            <div class="  form-group col-md-6">
                <label for="sedes">Sede que desea contactar(obligatorio):</label>
                <select id="sedes" class="form-control" name='sedes' id="sedes" required>
                    <option selected disabled value="">Seleccionar</option>
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
                    <option value="coordinacionnefroprevencionzonanorte@nefrouros.net">Rionegro</option>
                    <option value="gerenciatunja@nefrouros.net">Tunja</option>
                    <option value="gerenciavalledupar@nefrouros.net">Valledupar</option>
                    <option value="gerenciasessalud@nefrouros.net">Yopal</option>
                </select>
                <div class="invalid-feedback">
                    *Seleccione la sede donde se quiere contactar.
                </div>

            </div>
            <div class="form-group col-md-6">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" required placeholder="Describa en motivo"></textarea>

                <div class="invalid-feedback">
                    *Por favor d&eacutejanos un mensaje.
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck" style="margin-top: 15px">
                        Acepto Terminos, Condiciones y Pol&iacuteticas de Privacidad.
                    </label>
                    <div class="invalid-feedback">
                        *Acepte las pol&iacuteticas de Privacidad para continuar.
                    </div>
                </div>
            </div>

            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success" name='btn_send'>Contactar </button>
            </div>
    </form>

</div>
</div>
{{--  --}}
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
