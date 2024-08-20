@extends('layouts.admin')
@section('titulo', 'Editar Tag español')
@section('contenido')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Tag: {{ $tag->nombre }}</span>
                        <span style="float: right">
                            <a href="{{route('entags.index')}}" class="btn btn-primary">Volver</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('entags.update', $tag->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('blogs.es.tags.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
