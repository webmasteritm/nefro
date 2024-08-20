@extends('layauts.plantilla')
@section('content')
    <br> <br>
    <br> <br>
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($detalles_blog as $item)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ $item->imagen_principal }}" width="500px"
                                        height="400px" alt="">
                                    <a href="#" class="blog_item_date">
                                        <P>{{ $item->fecha_noticia }}</P>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="">
                                        <h2>{{ $item->nombre_noticia }}</h2>
                                    </a>
                                    <p class="text-justify"> {!! $item->detalles_noticia !!}</p>
                                    <section id="gallery" class="gallery">
                                        <div class="container">
                                            <div class="container-fluid">
                                                <div class="row no-gutters">
                                                    @foreach ($imagenes_blog as $item)
                                                        <div class="col-lg-3 col-md-4">
                                                            <div class="gallery-item">
                                                                <a href="{{ $item->url }}" class="venobox"
                                                                    data-gall="gallery-item">
                                                                    <img src="{{ $item->url }}" alt="" class="img-fluid">
                                                                    <div class="experts_name text-center">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>

                                            </div>
                                        </div>
                                    </section>
                            </article>
                        @endforeach

                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <br><br><br><br><br><br><br>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Noticias recientes</h4>
                            <ul class="list cat-list">
                                @foreach ($reciente_blog as $item)
                                    <li>
                                        <a href="{{ route('blogdetalles.home', ['id' => $item->id_noticia, 'categoria' => $categoria]) }}"
                                            class="d-flex">
                                            <p>{{ $item->nombre_noticia }}</p>

                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </aside>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
