@extends('layouts.appen')
@php $titulo="Exclusive Pacha Mama lodge in the mountains of Cusco" @endphp
@php $descripcion="It is located in the heart of the sacred valley of the Incas, wake up with one of the best views that the sacred valley can offer" @endphp
@php $keywords="sky lodge, Machu Picchu lodge, 5 stars lodge, lodge cusco, sacred valley lodge" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/Pacha-mama-spirit-lodge.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="pachamamalodge">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff" class="h1web">
                       Tours around Perú
                    </h1>
                    <p style="color: #fff" class="text-center">Find the best tours around Peru</p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row mt-4">                
                <!-----Fin orueba--->
                @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'luxury'))
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 18rem;">
                                <a href="{{ route('toursen.show', $tour->slug) }}">
                                    <img class="card-img-top" src="{{ $tour->img }}"
                                        alt="Camino Inca 4 dias" loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $tour->nombre }}</h5>
                                    <p class="text-card">{{ $tour->descripcion }}</p>
                                    <div class="enlacesCategoria">
                                        @if (Str::contains($tour->categoria, 'hikes'))
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
                                            <a class="enlaceAround" href="{{ route('around') }}">
                                                {{ $peru }}
                                            </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'luxury'))
                                            <p style="display:none">
                                                {{ $luxury = 'Perú' }}
                                            </p>
                                            <a class="enlaceLuxury" href="{{ route('lodgen') }}">
                                                {{ $luxury }}</a>
                                        @endif
                                    </div>
                                    <div class="row iconos-tours">
                                        <div class="col-6">
                                            <span class="icon-clock-o" style="float: right"> {{ $tour->dias }}
                                                days</span>
                                        </div>

                                        <div class="col-6">
                                            <span class="icon-usd" style="float:left"><strong>
                                                    {{ $tour->precio }}.00</strong></span>
                                        </div>
                                        <div class="col-12 pt-2">
                                            <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('toursen.show', ['slug' => $tour->slug]) }}" class="boton-card">More
                                        details</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
