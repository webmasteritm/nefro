@extends('adminlte::page')
@section('title', 'Nefrouros|Noticias')
@section('plugins.Datatables', true)

@section('content')
    <link href="assets/img/favicon.png" rel="icon">
    <!--================Blog Area =================-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <section class="container-fluid" style="background-color: white" >
        <header>
            <div class="container-fluid" style="background-color: white">
                <img src="https://nefrouros.net/assets/img/05.png">

            </div>
        </header>
        <br>
        <section>
    <section>
        <div class="dirty-dash">
            <div class="table-resposive">
                <table id="datatabla" class="table table-striped dt-responsive" style="text-align: center; width:100%">
                    <thead class="thead-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Nombre noticia</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Imagen Principal</th>
                        <th scope="col">Accciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($noticias as $item)


                            <tr>
                                <td>{{ $item->id_noticia }}</td>
                                <td style="width:100px; heigth:50px">{{ $item->nombre_noticia }}</td>
                                <td style="heigth:10px">{!! $item->detalles_noticia !!}</td>
                                <td>{{ $item->id_categoria }}</td>
                                <td>{{ $item->fecha_noticia }}</td>
                                <td><span><img src="{{ $item->imagen_principal }}" title="Amatista"
                                    style="width:100px;"></span></td>
                                <td>
                                    <form action="{{ route('delete.news', ['id' => $item->id_noticia]) }}" method="POST">
                                        <a href="{{ route('editar-noticia', ['id' => $item->id_noticia]) }}" type="button"
                                            class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    
    </section>


@section('js')
    <script>
        $(document).ready(function() {
            $('#datatabla').DataTable({
                "lengthMenu":[[5,10,50,-1],[5,10,15,"Todos"]],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
        
                }
                         
                    
            });
         });
    </script>
@endsection
@endsection
