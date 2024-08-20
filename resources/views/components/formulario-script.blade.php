<div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @if ($mensaje = Session::get('success'))

        @if ($mensaje == 'ok')
            <script>
                Swal.fire(
                    'Enviado!',
                    'Sus datos se enviaron correctamente su solicitud sera respondida pronto!',
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
</div>
