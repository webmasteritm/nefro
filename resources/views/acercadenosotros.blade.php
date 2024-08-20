@extends('layauts.plantilla')

@section('content')
    <section>
        <div style="text-align: center; margin-top: 20px;">
            <img src="{{ asset('assets/img/banners/acerca-de-nosotros2.jpg') }}" alt="Descripción de la imagen"
                style="max-width: 100%; height: 1%;">
        </div>
        <br>
        <div class="bg-orange text-white text-center py-1" style="background-color: #f57d00">
            <h4 class="font-weight" style="font-size: 1.5em">
                EN NEFROUROS DEJAMOS UNA HUELLA IMBORRABLE DE SERVICIO CON EL ALMA
            </h4>
        </div>
        <br>
        <div class="section-title text-center text-left-4 mb-8">
            <h2 class="br-0">
                <span style="color: #737373;">RESEÑA HISTÓRICA</span>
                <span style="color: #f57d00;">NEFROUROS</span>
            </h2>
            <p class="text-left lead" style="margin: 1.5%;">
                <!-- Ajusta el margen izquierdo a 0 para pegarlo a la izquierda -->
                <span style="color: #f57d00; font-weight: bold;">NEFROUROS</span> nace de la inspiración y del
                sueño de nuestro fundador el Dr. Mauricio Osorio Manrique, médico internista y nefrólogo, que por su
                vocación de servicio tiene claro que es de vital importancia ofrecerle al paciente renal un tratamiento con
                calidez humana, para vivir en su unidad renal una experiencia de atención con excelencia y se convierta de
                esta forma en su segundo hogar.
                <br><br>
                Es así como el <span style="color: #f57d00; font-weight: bold;">01 de octubre de 2007 NEFROUROS</span> abre
                sus puertas en la ciudad de
                Neiva – Huila – Colombia con nuestra imbatible filosofía de “Servir con el Alma”, con
                la que hemos llegado a 24 ciudades de Colombia y, a la ciudad de Santo Domingo en
                República Dominicana.
                <br><br>
                En <span style="color: #f57d00; font-weight: bold;">NEFROUROS</span> cumplimos con los más altos estándares
                de calidad e idoneidad,
                para brindar un servicio integral. Nuestro equipo multidisciplinario cuenta con
                profesionales en nefrología, medicina, psicología, nutrición, trabajo social y enfermería, con amplios
                conocimientos en el manejo del paciente renal y su patología.
            </p>
        </div>

        <!-- La imagen ahora está dentro del mismo div que contiene el resto del contenido -->
        <div style="text-align: center;">
            <img src="{{ asset('assets/img/Mpa.png') }}" alt=""
                style="max-width: 100%; margin-left: auto; margin-right: auto;">
        </div>
    </section>
@endsection
