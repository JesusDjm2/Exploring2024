@extends('layouts.admin')
@section('titulo', 'Blogs español')
@section('contenido')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de Blogs') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear nuevo Blog') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabladatos" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Img</th>
                                        <th>Keywords</th>
                                        <th>Slug</th>
                                        <th>Tags</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ $blog->id }}</td>
                                            <td>{{ $blog->nombre }}</td>
                                            <td>{{ $blog->descripcion }}</td>
                                            <td><img src="{{ $blog->img }}" alt="" width="120px"></td>
                                            <td>{{ $blog->keywords }}</td>
                                            <td>{{ $blog->slug }}</td>
                                            <td>
                                                @foreach ($blog->tags as $tag)
                                                    <li> {{ $tag->nombre }}</li>
                                                @endforeach
                                            </td>

                                            <td>
                                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                                    @csrf
                                                    <a class="btn btn-sm btn-primary"
                                                        href="{{ route('blog.show', $blog->slug) }}" target="_blank"><i
                                                            class="fa fa-fw fa-eye"></i> </a>

                                                    {{-- <a class="btn btn-sm btn-primary "
                                                    href="{{ route('blogs.show', $blog->slug) }}"><i
                                                        class="fa fa-fw fa-eye"></i> </a> --}}
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('blogs.edit', $blog->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> </a>
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
