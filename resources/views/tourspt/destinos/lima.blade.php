@extends('layouts.appt')
@php $titulo="Lima, cidade de reis" @endphp
@php $descripcion="Lima es la caital de la republica del Perú. Esta ubicada en la costa central del país." @endphp
@php $keywords="Lima, ciudad de los reyes, Lima capital de Perú" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/ciudad-de-reyes-lima.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="lima">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Lima, cidade de reis</h1>
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
                            <p><a href="{{ route('inicio') }}">Começar</a> / <a
                                    href="{{ route('destinosnoPeru') }}">Destinos</a> / <a>Lima</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        @foreach ($toursLima as $tour)
                            <div class="col-lg-3 col-md-6">
                                <div class="card card-new" style="width: 18rem;">
                                    <a href="{{ route('tourspt.show', ['slug' => $tour->slug]) }}">

                                        <img class="card-img-top" src="../{{ $tour->img }}" alt="Camino Inca 4 dias"
                                            loading="lazy">
                                    </a>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $tour->nombre }}</h5>
                                        <p class="text-card">{{ $tour->descripcion }}</p>
                                        <div class="enlacesCategoria">
                                            @if (Str::contains($tour->categoria, 'caminata'))
                                                <p style="display:none">
                                                    {{ $hike = 'Daily' }}d
                                                </p>
                                                <a class="enlaceHike" href="{{ route('hikes') }}">
                                                    {{ $hike }}</a>
                                            @endif
                                            @if (Str::contains($tour->categoria, 'machuPicchu'))
                                                <p style="display:none">
                                                    {{ $mapi = 'Cusco' }}
                                                </p>
                                                <a class="enlaceMapi" href="{{ route('mapien') }}">{{ $mapi }}
                                                </a>
                                            @endif

                                            @if (Str::contains($tour->categoria, 'around'))
                                                <p style="display: none">
                                                    {{ $peru = 'Adventure' }}
                                                </p>
                                                <a class="enlaceAround" href="{{ route('trek') }}">
                                                    {{ $peru }}
                                                </a>
                                            @endif
                                            @if (Str::contains($tour->categoria, 'luxury'))
                                                <p style="display:none">
                                                    {{ $luxury = 'Perú' }}
                                                </p>
                                                <a class="enlaceLuxury" href="{{ route('paquetes') }}">
                                                    {{ $luxury }}</a>
                                            @endif
                                        </div>
                                        <div class="row iconos-tours">
                                            <div class="col-6">
                                                <span class="icon-clock-o" style="float: right"> {{ $tour->dias }}
                                                    {{ $tour->dias == 1 ? 'dia' : 'dias' }}</span>
                                            </div>

                                            <div class="col-6">
                                                <span class="icon-usd" style="float:left"><strong>
                                                        {{ $tour->precio }}.00</strong></span>
                                            </div>
                                            <div class="col-12 pt-2 mt-1">
                                                <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                            </div>
                                        </div>
                                        <a href="{{ route('tourspt.show', ['slug' => $tour->slug]) }}"
                                            class="boton-card">Ver passeio</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
@endsection
