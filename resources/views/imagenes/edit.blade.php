@extends('layouts.admin')
@section('titulo', 'Tours en español')

@section('contenido')
    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif
    <form action="{{ route('imagenes.update', ['imagene' => $imagen->id]) }}" method="post" enctype="multipart/form-data"
        class="bg-light" style="padding: 1em">

        {{-- <form action="/imagenes/{{ $imagen->id }}" method="post" enctype="multipart/form-data" class="bg-light" style="padding: 1em"> --}}
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-12">
                <label for="img" class="form-label">Editar imagen:</label>
                <a href="{{ route('imagenes.index') }}" class="float-right btn btn-primary btn-sm">Volver</a>
                <input type="file" id="img" name="img" class="form-control mt-2" accept="image/*"
                    value="{{ $imagen->img }}">
                <img class="mt-3" src='{{ asset("img/galeria/$imagen->img") }}' width="220px">
            </div>
            <div class="col-lg-12">
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </div>
        </div>
    </form>
@endsection
