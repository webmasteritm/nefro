@extends('adminlte::page')
@section('title', 'Nefrouros|Actividades')
@section('plugins.Datatables', true)
@section('content')
    <link href="assets/img/favicon.png" rel="icon">
    <!--================Blog Area =================-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
  
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    
    <section class="container-fluid" style="background-color: white">
        <header>
            <div class="container-fluid" style="background-color: white">
                <img src="https://nefrouros.net/assets/img/05.png">

            </div>
        </header>
        <br>
        <section>

            <div class="dirty-dash">
                <div class="table-resposive">
                    <table id="datatabla" class="table table-striped dt-responsive nowrap" style="text-align: center; width:100%">
                        <thead class="thead-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Nombre Actividad</th>
                            <th scope="col">Sede</th>
                            <th scope="col">Mes</th>
                            <th scope="col">Año</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Imagen Principal</th>
                            <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nombre_actividad }}</td>
                                    <td>{{ $item->sede }}</td>
                                    <td>{{ $item->mes }}</td>
                                    <td>{{ $item->year }}</td>
                                    <td>{{ $item->descripcion_actividad }}</td>
                                    <td><span><img src="{{ $item->imagen_principal }}" title="Amatista"
                                                style="width:100px;"></span></td>

                                    <td>
                                        <form
                                            action="{{ route('delete.actividad', ['id' => $item->id, 'sede' => $item->sede]) }}"
                                            method="POST">
                                            <a href="{{ route('editar.actividad', ['id' => $item->id, 'sede' => $item->sede]) }}"
                                                type="button" class="btn btn-primary"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></button>

                                        </form>
                                    </td>

                                </tr>

                            @endforeach
                        </tbody>
                    </table>


                </div>

            </div>
        </section>
    </section>
@section('js')


    <script>
        $(document).ready(function() {
            $('#datatabla').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 15, "Todos"]
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"

                }


            });
        });



        //   $(document).ready(function){
        //     $('#datatabla').Datatable({
        //         "language":{
        //             "url": "https//cdn.datatables.net/plug-ins/1.10.20/i18n/spanish.json"
        //         }
        //     });"lengthMenu":[[5,10,50,-1],[5,10,15,"ALL"]]
    </script>
    
@endsection
@endsection
