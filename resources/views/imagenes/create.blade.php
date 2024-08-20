@extends('layouts.admin')
@section('titulo', 'Crud de imágenes')

@section('contenido')
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
        <div class="col-12">
            <h4 class="float-left">Subir imagen nueva:</h4>
            <a href="{{ route('imagenes.index') }}" class="btn btn-primary float-right">Volver</a>
        </div>
        <div class="col-12">
            <form method="POST" action="{{ route('imagenes.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="img">Seleccionar imágenes:</label>
                    <input type="file" name="img[]" id="img" class="form-control" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Subir imágenes</button>
            </form>
            
        </div>
    </div>

@endsection
