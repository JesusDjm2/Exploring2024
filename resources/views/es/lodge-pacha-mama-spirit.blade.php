@extends('layouts.app')
@php $titulo="Pacha Mama Spirit Lodge" @endphp
@php $descripcion="Perú tiene muchos lugares tur´siticos para conocer en su territorio, descubreos en esta sección." @endphp
@php $keywords="Lodge de lujo, Machu Picchu lodge, sky lodge, Pacha Mama Lodge" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/Pacha-mama-spirit-lodge.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="destinos">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">
                        Paquetes en Perú
                    </h1>
                    <p style="color: #fff" class="text-center">Encuentra los mejores tours alrededor de Perú</p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Tours alrededor de Perú:</h2>
                    <p class="text-succes">
                        Nuestra agencia de viajes le brinda distintos tipos de tours alrededor de este hermoso país.
                    </p>
                </div>
                <!-----Fin orueba--->
                @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'luxury'))
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 18rem;">
                                <a href="{{ route('tours.show', $tour->slug) }}">
                                    <img class="card-img-top" src="{{ $tour->img }}"
                                        alt="Camino Inca 4 dias" loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $tour->nombre }}</h5>
                                    {{-- <p class="text-card">{{ $tour->descripcion }}</p> --}}
                                    <div class="enlacesCategoria">
                                        @if (Str::contains($tour->categoria, 'hikes'))
                                            <p style="display:none">
                                                {{ $hike = 'Diarios' }}
                                            </p>
                                            <a class="enlaceHike" href="{{ route('diarios') }}">
                                                {{ $hike }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'machupicchu'))
                                            <p style="display:none">
                                                {{ $mapi = 'Cusco' }}
                                            </p>
                                            <a class="enlaceMapi" href="{{ route('cusco') }}">{{ $mapi }}
                                            </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'around'))
                                            <p style="display: none">
                                                {{ $peru = 'Caminatas' }}
                                            </p>
                                            <a class="enlaceAround" href="{{ route('trek') }}">
                                                {{ $peru }}
                                            </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'luxury'))
                                            <p style="display:none">
                                                {{ $luxury = 'Perú' }}
                                            </p>
                                            <a class="enlaceLuxury" href="{{ route('paquetes') }}"> {{ $luxury }}</a>
                                        @endif
    
                                    </div>

                                    <div class="row iconos-tours">
                                        <div class="col-6">
                                            <span class="icon-clock-o" style="float: right">
                                                @if ($tour->dias == 1)
                                                    {{ $tour->dias }} día
                                                @else
                                                    {{ $tour->dias }} días
                                                @endif
                                            </span>
                                        </div>    
                                        <div class="col-6">
                                            <span class="icon-usd" style="float:left"><strong>
                                                    {{ $tour->precio }}.00</strong></span>
                                        </div>
                                        {{-- <div class="col-12 pt-2">
                                            <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                        </div> --}}
                                    </div>
                                    <a href="{{ route('tours.show', $tour->slug) }}"
                                        class="boton-card">Más Info</a>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
