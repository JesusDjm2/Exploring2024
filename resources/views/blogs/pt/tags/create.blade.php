@extends('layouts.admin')
@section('titulo', 'crear Tag en portugués')
@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title font-weight-bold">Crear nuevo Tag en portugués</span>
                        <span style="float: right">
                            <a href="{{route('ptags.index')}}" class="btn btn-primary btn-sm">Volver</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ptags.store') }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @include('blogs.pt.tags.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
