@extends('layouts.app')
@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 style="padding-top: 18%;color:#fff">No se encontraron resultados para: {{$name}}</h3>
                    <p class="text-center" style="color:#fff">Realizar nueva busqueda</p>
                </div>
                <div class="col-lg-12 mx-auto">
                    <form action="{{ route('search') }}" method="GET">
                        @csrf
                        <div class="col-12 mr-auto">
                            <div class="form-row">
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Realizar nueva busqueda...">
                            </div>
                        </div>
                        <div class="col-3 mx-auto mt-4 text-center">
                            <input type="submit" class="boton-blog-search" value="Buscar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
