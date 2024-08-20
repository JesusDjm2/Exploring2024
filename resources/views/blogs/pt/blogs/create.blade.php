@extends('layouts.admin')
@section('titulo', 'Blogs español')
@section('contenido')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            @includeif('partials.errors')
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Create Djmblog</span>
                    <a style="float: right" class="btn btn-primary" href="{{route('blogs.index')}}">Volver</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('blogspt.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf
                        @include('blogs.pt.blogs.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
