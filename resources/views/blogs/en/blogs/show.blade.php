@extends('layouts.appen')
@section('titulo', $blog->nombre)
@section('metas')
    <meta name="description" content="{{ $blog->descripcion }}" />
    <meta name="keywords" content="{{ $blog->keywords }}" />
    <link rel="canonical" href="{{ request()->fullUrl() }}" />
    <meta property="og:title" content="{{ $blog->nombre }}">
    <meta property="og:description" content="{{ $blog->escripcion }}">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta name="twitter:card" content="summary">
    <meta name="robots" content="index,follow">
    <meta name="og:image" content="{{ $blog->img }}" />
    <meta name="og:secureImage" content="{{ $blog->img }}" />
    <meta property="og:image" content="{{ $blog->img }}">
@endsection
@section('content')
    <div class="temasBlogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="h1web">{{ $blog->nombre }}</h1>
                    <p class="text-center" style="color: #fff">
                        {{ $blog->descripcion }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('index') }}">Index</a> / <a href="{{ route('enlistado') }}">Blog</a>
                                / <a>{{ $blog->nombre }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h3 class="text-center">{{ $blog->nombre }}</h3>
                    <div class="linea-blogs"></div>
                    <p class="text-center"><i class="icon-calendar"></i> {{ $blog->created_at->format('d/m/Y') }}</p>
                    </p>
                    {!! $blog->cuerpo !!}
                    <div class="compartir">
                        <h4 class="mb-3">Share:</h4>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}" target="_blank"
                            rel="noopener nofollow">
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}" target="_blank"
                            rel="noopener nofollow">
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="https://pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}&description={{ $blog->descripcion }}"
                            target="_blank" rel="noopener nofollow">
                            <i class="icon-pinterest"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ request()->fullUrl() }}&title={{ $blog->nombre }}&summary={{ $blog->descripcion }}&source=PachaMamaSpirit"
                            target="_blank" rel="noopener nofollow">
                            <i class="icon-linkedin"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?text={{ request()->fullUrl() }}" target="_blank"
                            rel="noopener nofollow">
                            <i class="icon-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sticky">
                        <h3>Find a blog:</h3>
                        <div class="linea2-blogs"></div>
                        <form action="{{ route('search.blog.en') }}" method="GET" class="mb-4">
                            @csrf
                            <div class="form-row">
                                <div class="form-outline">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Write blog..." required>
                                </div>
                                <input type="submit" class="boton-blog-search" value="Search">
                            </div>
                        </form>
                        <h3>Tags:</h3>
                        <div class="linea2-blogs"></div>
                        <div class="tags">
                            @foreach ($blog->entags as $tag)
                                <a href="{{ route('entag', $tag->slug) }}">#{{ $tag->nombre }} </a>
                            @endforeach
                        </div>

                        <h3>Suggested blogs:</h3>
                        <div class="linea2-blogs"></div>
                        @foreach ($blogses as $blogse)
                            <a href="{{ route('enblog', $blogse->slug) }}">
                                <div class="row blogSpace">
                                    <div class="col-4">
                                        <img src="{{ asset($blogse->img) }}" alt="{{ $blogse->nombre }}"
                                            class="imgCuadrada">
                                    </div>
                                    <div class="col-8">
                                        <p>{{ $blogse->nombre }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="space"></div>
            </div>
            <div class="row">
                @foreach ($toursRelated as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('toursen.show', $tour->slug) }}">
                                <img class="card-img-top" src="../{{ $tour->img }}" alt="Camino Inca 4 dias"
                                    loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $tour->nombre }}</h5>
                                <p class="text-card">{{ $tour->descripcion }}</p>
                                <div class="enlacesCategoria">
                                    @if (Str::contains($tour->categoria, 'machuPicchu'))
                                        <p style="display:none">
                                            {{ $mapi = 'Machu Picchu' }}
                                        </p>
                                        <a class="enlaceMapi" href="{{ route('mapien') }}">{{ $mapi }} </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'hikes'))
                                        <p style="display:none">
                                            {{ $hike = 'Hiking' }}
                                        </p>
                                        <a class="enlaceHike" href="{{ route('hikes') }}"> {{ $hike }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'around'))
                                        <p style="display: none">
                                            {{ $peru = 'Perú' }}
                                        </p>
                                        <a class="enlaceAround" href="{{ route('around') }}"> {{ $peru }} </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'luxury'))
                                        <p style="display:none">
                                            {{ $luxury = 'Private' }}
                                        </p>
                                        <a class="enlaceLuxury" href="{{ route('private') }}"> {{ $luxury }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'fullday'))
                                        <p style="display:none">
                                            {{ $fullday = 'Full Day' }}
                                        </p>
                                        <a class="enlaceFullday" href="{{ route('fulldayen') }}">
                                            {{ $fullday }}</a>
                                    @endif
                                </div>
                                <div class="row iconos-tours">
                                    <div class="col-6">
                                        <span class="icon-clock-o" style="float: right">
                                            @if ($tour->dias == 1)
                                                {{ $tour->dias }} day
                                            @else
                                                {{ $tour->dias }} days
                                            @endif
                                        </span>
                                    </div>
                                    <div class="col-6">
                                        <span class="icon-usd"
                                            style="float:left"><strong>{{ $tour->precio }}</strong></span>
                                    </div>
                                    <div class="col-12">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                </div>
                                <a href="{{ route('toursen.show', $tour->slug) }}" class="boton-card">Más detalles</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
