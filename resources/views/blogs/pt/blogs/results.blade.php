@extends('layouts.app')
@section('content')
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 18%;color:#fff">Resultados da busca por: {{ $nombre }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 pt-5">
                    <div class="card" style="width: 18rem; margin:auto">
                        <a href="{{ route('blogspt.show', $blog->slug) }}">
                            <img class="card-img-top" src="{{ $blog->img }}" alt="{{ $blog->nombre }}" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->nombre }}</h5>
                            <p class="card-text">{{ $blog->descripcion }}</p>
                            <div class="tags text-center">
                                @foreach ($blog->tags as $tag)
                                    <a href="{{ route('ptag', $tag->slug) }}">#{{ $tag->nombre }} </a>
                                @endforeach
                            </div>
                            <div class="text-center">
                                <a href="{{ route('blogspt.show', $blog->slug) }}"
                                    class="boton-card">Más info</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
