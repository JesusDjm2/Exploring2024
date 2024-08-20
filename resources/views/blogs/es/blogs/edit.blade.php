@extends('layouts.admin')
@section('titulo', 'Editar Blog')
@section('contenido')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            @includeif('partials.errors')
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Editar Blog: {{$blog->nombre}}</span>
                    <a style="float: right" class="btn btn-primary" href="{{route('blogs.index')}}">Volver</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('blogs.update', $blog->id) }}"  role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf
                        @include('blogs.es.blogs.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
