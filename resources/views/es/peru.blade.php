@extends('layouts.app')
@php $titulo="Tours que dirigen a Machu Picchu" @endphp
@php $descripcion="Hay muchas maneras de llegar a la maravilla del mundo Machu Picchu y te mostramos una lista de los mejores tours." @endphp
@php $keywords="Camino inca 2024, camino inca 2023, llegar a Machu Picchu, tour machu Picchu" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/Tours-a-Machu-Picchu-Tierras-Vivas.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="blog-temas">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">
                        Tours alrededor de Perú
                    </h1>
                    <p style="color: #fff" class="text-center">Esta es una lista de tours que visitan 2 o más ciudades dentro
                        del territorial peruano</p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Tours de aventura y caminatas:</h2>
                </div>
                <!-----Fin orueba---> 
                @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'around'))
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 18rem;">
                                <a href="{{ route('tours.show', $tour->slug) }}">
                                    <img class="card-img-top" src="{{ $tour->img }}"
                                        alt="Camino Inca 4 dias" loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $tour->nombre }}</h5>
                                    
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
