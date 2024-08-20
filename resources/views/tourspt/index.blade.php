@extends('layouts.admin')
@section('titulo', 'Tours en potugués')
@section('contenido')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <div class="row">
        <div class="col-12 mt-2">
            <div class="row">
                <div class="col-7 float-left">
                    <h2>Lista de tours en portugués:</h2>
                </div>
                <div class="col-5">

                    <a href="{{ route('tourspt.create') }}" class="btn btn-primary float-right mr-2">Nuevo Tour</a>

                </div>
                <div class="col-lg-12">
                    @if (session('status'))
                        <div class="text-success">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                            </div>
                        </div>
                    @endif
                </div>
                
            </div>

            <table id="tabladatos" class="table mt-4 table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Días</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Slug</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $tour)
                        <tr>
                            <td>{{ $tour->id }}</td>
                            <td>{{ $tour->nombre }}</td>
                            <td>{{ $tour->descripcion }}</td>
                            <td><img src="{{asset($tour->img)}}" width="120px"></td>
                            <td>{{ $tour->precio }}</td>
                            <td>{{ $tour->dias }}</td>
                            <td>{{ $tour->ubicacion }}</td>
                            <td>{{ $tour->slug }}</td>
                            <td style="width: 140px">
                                <form action="{{ route('tourspt.destroy', $tour->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/tourspt/{{ $tour->id }}/edit" class="btn btn-info btn-sm" title="Editar">
                                        <i class="fa fa-edit"></i> </a>
                                    {{-- <a href="{{ route('tourspt.show', ['tourspt' => $tour->slug]) }}"
                                        class="btn btn-success btn-sm" title="Ver tour" target="_blank">
                                        <i class="fa fa-eye"></i> --}}
                                    <a href="{{ route('tourspt.show', ['slug' => $tour->slug]) }}"
                                        class="btn btn-success btn-sm" title="Ver tour" target="_blank">
                                        <i class="fa fa-eye"></i> </a>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"
                                        onclick="alerta();"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script>
            function alerta() {
                alert('Desea aliminar?');
            }
        </script>
    </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        var j = jQuery.noConflict();
        j(document).ready(function() {
            j('#tabladatos').DataTable();
        });
    </script>
@endsection
