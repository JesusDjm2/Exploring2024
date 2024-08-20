@extends('layouts.appen')
@php $titulo="Full day tours for Perú" @endphp
@php $descripcion="add this amazing tours to your package for Perú, City tour, Museums, treks" @endphp
@php $keywords="Vinicunca, Humantay, rainbow mountain, City tour" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/trekking-peru.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="ollantaytambo">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff" class="h1web">
                        1 day tours in Peru
                    </h1>
                    <p style="color: #fff" class="text-center">
                    You can put together your own itinerary with these one day tours in Peru
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>List of full day tours:</h2>
                </div>
                <!-----Fin orueba--->
                @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'fullday'))
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 18rem;">
                                <a href="{{ route('toursen.show', ['slug' => $tour->slug]) }}">
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
