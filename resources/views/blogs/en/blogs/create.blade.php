@extends('layouts.admin')
@section('titulo', 'Blogs inglés')
@section('contenido')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Crear blog en inglés</span>
                    <a style="float: right" class="btn btn-primary" href="{{route('enblogs.index')}}">Volver</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('enblogs.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf
                        @include('blogs.en.blogs.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
