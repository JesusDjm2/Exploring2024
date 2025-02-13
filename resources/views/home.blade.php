@extends('layouts.admin')
@section('contenido')
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 pt-3">
            <a href="{{ url('toursen') }}">
                <div class="card card-new" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/english-tours.jpg') }}" alt="Camino Inca 4 dias"
                        loading="lazy">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 pt-3">
            <a href="{{ url('tours') }}">
                <div class="card card-new" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/tours-caastellano.jpg') }}" alt="Camino Inca 4 dias"
                        loading="lazy">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 pt-3">
            <a href="{{ route('tourspt.index') }}">
                <div class="card card-new" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/Tours-pt.webp') }}" alt="Camino Inca 4 dias"
                        loading="lazy">
                </div>
            </a>
        </div>
        
        <div class="col-lg-3 col-md-6 pt-3">
            <a href="{{ url('imagenes') }}">
                <div class="card card-new" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/imagenes-Pacha-Mama-Spirit.jpg') }}" alt="Camino Inca 4 dias"
                        loading="lazy">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 pt-3">
            <a href="{{ url('users') }}">
                <div class="card card-new" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/usuarios-Pacha-Mama.jpg') }}" alt="Camino Inca 4 dias"
                        loading="lazy">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 pt-3">
            <a href="{{ route('blogs.index') }}">
                <div class="card card-new" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/bLOGS-CASTELLANO-PERU.webp') }}" alt="Camino Inca 4 dias"
                        loading="lazy">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 pt-3">
            <a href="{{ route('enblogs.index') }}">
                <div class="card card-new" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/Blogs-ingles.webp') }}" alt="Camino Inca 4 dias"
                        loading="lazy">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 pt-3">
            <a href="{{ route('blogspt.index') }}">
                <div class="card card-new" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/Blogs-portugues.webp') }}" alt="Camino Inca 4 dias"
                        loading="lazy">
                </div>
            </a>
        </div>
    </div>
@endsection
