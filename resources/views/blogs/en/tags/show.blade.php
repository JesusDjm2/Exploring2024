@extends('layouts.appen')
@section('titulo', $tag->nombre)
@section('metas')
<meta name="description" content="{{$tag->nombre}}">
<meta name="keywords" content="{{ $tag->nombre}}"/>
<link rel="canonical" href="{{ request()->fullUrl() }}">
<link rel="image_src" content="https://pachamamaspirit.com/img/panoramico/los-mejores-destinos-para-peru.webp">

<meta name="og:image" content="https://pachamamaspirit.com/img/panoramico/los-mejores-destinos-para-peru.webp"/>
<meta name="og:secureImage" content="https://pachamamaspirit.com/img/panoramico/los-mejores-destinos-para-peru.webp"/>

<meta property="og:title" content="{{ $tag->nombre }}"/>
<meta property="og:description" content="{{ $tag->nombre}}"/>
<meta property="og:url" content="{{ request()->fullUrl() }}"/>
<meta name="twitter:card" content="summary"/>
<meta name="robots" content="index,follow" />
@endsection
@section('content')
<div class="destinos">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-center">
                <h1 style="padding-top: 250px;color:#fff" class="h1web">
                    #{{ $tag->nombre }}
                </h1>
                <p style="color: #fff" class="text-center">Matches: {{ $coincidencias }}</p>
            </div>
        </div>
    </div>
</div>
<section class="container mt-5">
    <div class="row">
        <div class="col-lg-12 mb-5">
            <h2>Tags related to: #{{ $tag->nombre }} </h2>
        </div>
        @foreach ($tag->enblogs as $blog)
            <div class="col-lg-3 col-md-6">
                <div class="card card-new" style="width: 18rem;">
                    <a href="{{ route('enblog', $blog->slug) }}">
                        <img class="card-img-top" src="{{ $blog->img }}" alt="{{ $blog->nombre }}" loading="lazy">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $blog->nombre }}</h5>
                        <p class="text-card">{{ $blog->descripcion }}</p>
                        <div class="tags">
                            @foreach ($blog->entags as $tag)
                                <a href="{{ route('entag', $tag->slug) }}">#{{ $tag->nombre }} </a>
                            @endforeach
                        </div>
                        <a href="{{ route('enblog', $blog->slug) }}" class="boton-card">Más detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
