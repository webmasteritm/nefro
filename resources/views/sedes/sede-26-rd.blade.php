@extends('layauts.plantilla')
@section('content')
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

     
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(../assets/img/sedes/UR-rd/1.webp)">
                <div class="container">
                    <h2><span style="color: #F57D00;">NEFROUROS</span> <span style="color: #737373;">SANTO DOMINGO (RD)
                    </span></h2>
                            <a href="{{ route('citas.home') }}" class="btn-get-started scrollto">Citas en linea</a>

                </div>
            </div>
            <!-- Slide 2 -->
             <div class="carousel-item" style="background-image: url(../assets/img/sedes/UR-rd/2.webp)">
            </div> 
            <!-- Slide 3 -->
             <div class="carousel-item" style="background-image: url(../assets/img/sedes/UR-rd/3.webp)">
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section>
    
    <!-- End Hero -->

    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <section id="contact" class="contact">

        <div class="container">
            <div class="section-title">
                <h2><span style="color: #F57D00;">NEFROUROS</span> <span style="color: #737373;">SEDE SANTO DOMINGO (RD) </span></h2>
                <p>Puede contactar nuestra unidad renal en la ciudad de Santo Domingo (RD), diligencie el formulario y verifique que
                    sus datos esten correctos. </p>
            </div>
        </div>
        <div>
            <iframe style="border:0; width: 100%; height: 350px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.983364781814!2d-69.91883688255616!3d18.48441270000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89b7d5f6a219%3A0xe72e2374e6c556ab!2sAv.%20San%20Mart%C3%ADn%20202%2C%20Santo%20Domingo%2C%20Rep%C3%BAblica%20Dominicana!5e0!3m2!1ses!2sco!4v1670018927133!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        


        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Ubicación:</h4>
                            <p>Avenida San Martín 202
                               Ensanche la Fe
                            <p> Santo Domingo-República Dominicana</p>
                            </p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>gerenciasantodomingo@nefrouros.net</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-telephone"></i>
                            <h4>Teléfono:</h4>
                            <p>8093845911 
                            <p></p>
                            </p>
                        </div>

                        <div class="phone">
                            <i class="icofont-smart-phone"></i>
                            <h4>Celular:</h4>
                            <p>849-473-3458
                            <p></p>
                            </p>
                        </div>

                    </div>

                </div>

                <x-formulario-contacto></x-formulario-contacto>

            </div>

        </div>
    </section>

@endsection
@section('js')

    {{-- Componente del script envio --}}
    <x-formulario-script></x-formulario-script>

@endsection
