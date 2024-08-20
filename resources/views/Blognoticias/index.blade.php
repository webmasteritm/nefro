@extends('layauts.plantilla')
@section('content')
    <br>
    <section>
        <div class="site-section pb-0">
            <div class="container">
                                <div class="row mb-5 justify-content-center text-center">
                            <div class="col-lg-4 mb-5 text-center">
                            </div>
                            <div class="container">
                                <div class="section-title">
                                    <h2><span style="color: #737373;">15° Aniversario</span> <span
                                            style="color: #f57d00;">NEFROUROS</span> </span>
                                    </h2>
                                    <p>Con gran orgullo, alegría y agradecimiento a Dios celebramos nuestro Aniversario 15.
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5 justify-content-center text-center">
                            {{-- <div class=".col-6 .col-md-4 .col-6.col-md-4  .col-6.col-md-4"> --}}
                                <article class="post-classic">
                                    
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/98Hb8lcyKjc"
                                      class="post-classic"
                                      class="post-classic-figure" 
                                      title="YouTube video player" frameborder="0"
                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                      allowfullscreen></iframe>
                                </article>
                                <article class="post-classic">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/G30L5OL-__A"      //esta es
                                      class="post-classic"
                                      class="post-classic-figure" title="YouTube video player" frameborder="0"
                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                      allowfullscreen>
                                    </iframe>
                                </article>
                                <article class="post-classic">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JC6QGrBmGIg"
                                      class="post-classic"
                                      class="post-classic-figure"  
                                      title="YouTube video player" frameborder="0" 
                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                      allowfullscreen>
                                 </iframe>
                                </article>
                            </div>
                        </
                    {{-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
                    <div class="container">
                        <div class="row mb-5 justify-content-center text-center">
                            <div class="col-lg-4 mb-5 text-center">
                            </div>
                            <div class="container">
                                <div class="section-title">
                                    <h2><span style="color: #737373;">BLOG DE NOTICIAS NOVEDADES </span> <span
                                            style="color: #f57d00;">NEFROUROS</span> </span>
                                    </h2>
                                    <p>Nuestras noticias mas recientes <br> NEFROUROS le actualiza lo que sucede en nuestras
                                        Unidades Renales </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 justify-content-center text-center">
                            @foreach ($novedades_blog as $item)
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <article class="post-classic">
                                        <figure class="post-classic-figure"><a
                                                href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $item->categoria]) }}"><img
                                                    src="{{ $item->imagen_principal }}" alt="" width="346" height="130" /></a>
                                        </figure>
                                        <div class="post-classic-content">
                                            <time class="post-classic-time" datetime="2019-09-19">{{ $item->fecha_noticia }}</time>
                                            <h6 class="post-classic-title"><a
                                                    href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $item->categoria]) }}">{{ $item->nombre_noticia }}</a>
                                            </h6><a class="post-classic-link" href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $item->categoria]) }}">VER MAS +</a>
                                        </div>
            
            
                                    </article>
                                </div>
                            @endforeach

                        </div>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <ul class="pagination">
                                    <li class="page-item">
                                        {{ $covid_blog->links() }}
                                    </li>

                                </ul>
                            </ul>
                        </nav>
                    </div>
                    <!--=================================================BLOG DE NOTICIAS pacientes =====================================================-->

                    <div class="container">
                        <div class="row mb-5 justify-content-center text-center">
                            <div class="col-lg-4 mb-5 text-center">
                            </div>
                            <div class="container">
                                <div class="section-title">
                                    <h2><span style="color: #737373;">BLOG DE NOTICIAS COMPAÑERO Y PACIENTE DEL MES </span>
                                        <span style="color: #f57d00;">NEFROUROS</span> </span>
                                    </h2>
                                    <p>Nuestras noticias mas recientes <br> NEFROUROS le actualiza lo que sucede en nuestras
                                        Unidades Renales </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 justify-content-center text-center">
                            @foreach ($pacientes_blog as $item)
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <article class="post-classic">
                                        <figure class="post-classic-figure"><a
                                                href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $item->categoria]) }}"><img
                                                    src="{{ $item->imagen_principal }}" alt="" width="346" height="130" /></a>
                                        </figure>
                                        <div class="post-classic-content">
                                            <time class="post-classic-time" datetime="2019-09-19">{{ $item->fecha_noticia }}</time>
                                            <h6 class="post-classic-title"><a
                                                    href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $item->categoria]) }}">{{ $item->nombre_noticia }}</a>
                                            </h6><a class="post-classic-link" href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $item->categoria]) }}">VER MAS +</a>
                                        </div>
            
            
                                    </article>
                                </div>
                            @endforeach

                        </div>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <ul class="pagination">
                                    <li class="page-item">
                                        {{ $pacientes_blog->links() }}
                                    </li>

                                </ul>
                            </ul>
                        </nav>
                    </div>

                    <!--=================================================BLOG DE NOTICIAS SALUDABLES=====================================================-->
                    <div class="container">
                        <div class="row mb-5 justify-content-center text-center">
                            <div class="col-lg-4 mb-5 text-center">
                            </div>
                            <div class="container">
                                <div class="section-title">
                                    <h2><span style="color: #737373;">BLOG DE NOTICIAS SALUDABLES </span> <span
                                            style="color: #f57d00;">NEFROUROS</span> </span>
                                    </h2>
                                    <p>Nuestras noticias mas recientes <br> NEFROUROS le actualiza lo que sucede en nuestras
                                        Unidades Renales </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 justify-content-center text-center">
                            @foreach ($saludables_blog as $item)
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <article class="post-classic">
                                        <figure class="post-classic-figure"><a
                                                href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $item->categoria]) }}"><img
                                                    src="{{ $item->imagen_principal }}" alt="" width="346" height="130" /></a>
                                        </figure>
                                        <div class="post-classic-content">
                                            <time class="post-classic-time" datetime="2019-09-19">{{ $item->fecha_noticia }}</time>
                                            <h6 class="post-classic-title"><a
                                                    href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $item->categoria]) }}">{{ $item->nombre_noticia }}</a>
                                            </h6><a class="post-classic-link" href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $item->categoria]) }}">VER MAS +</a>
                                        </div>
            
            
                                    </article>
                                </div>
                            @endforeach

                        </div>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <ul class="pagination">
                                    <li class="page-item">
                                        {{ $saludables_blog->links() }}
                                    </li>

                                </ul>
                            </ul>
                        </nav>
                    </div>
                    <!--=================================================BLOG DE NOTICIAS covid=====================================================-->

                    <div class="container">
                        <div class="row mb-5 justify-content-center text-center">
                            <div class="col-lg-4 mb-5 text-center">
                            </div>
                            <div class="container">
                                <div class="section-title">
                                    <h2><span style="color: #737373;">BLOG DE NOTICIAS COVID-19 </span> <span
                                            style="color: #f57d00;">NEFROUROS</span> </span>
                                    </h2>
                                    <p>Nuestras noticias mas recientes <br> NEFROUROS le actualiza lo que sucede en nuestras
                                        Unidades Renales </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 justify-content-center text-center">
                            @foreach ($covid_blog as $item)
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                                    <article class="post-classic">
                                        <figure class="post-classic-figure"><a
                                                href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $item->categoria]) }}"><img class="post-img-news"
                                                    src="{{ $item->imagen_principal }}" alt="" width="346" height="130" /></a>
                                        </figure>
                                        <div class="post-classic-content">
                                            <time class="post-classic-time" datetime="2019-09-19">{{ $item->fecha_noticia }}</time>
                                            <h6 class="post-classic-title"><a
                                                    href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $item->categoria]) }}">{{ $item->nombre_noticia }}</a>
                                            </h6><a class="post-classic-link" href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $item->categoria]) }}">VER MAS +</a>
                                        </div>
            
            
                                    </article>
                                </div>
                            @endforeach

                        </div>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <ul class="pagination">
                                    <li class="page-item">
                                        {{ $covid_blog->links() }}
                                    </li>

                                </ul>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


   

    </div>
    </div>
    </div>
    </section>
    </section>
@endsection
