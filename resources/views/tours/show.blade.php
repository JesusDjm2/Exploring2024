@extends('layouts.app')
@section('titulo', $tour->nombre)
@include('layouts.metas')
@section('content')
    <div class="blog" id="blog">
        <!----Variable de clase------>
        <div id="sarah" style="opacity: 0">
            {{ $tour->clase }}
            <script>
                var $nombre = document.getElementById('sarah').innerText;
                var $insertar = document.getElementById("blog");
                $insertar.classList.remove("blog");
                $insertar.classList.add($nombre);
            </script>
        </div>

        <!----Fin Variable de clase------>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 175px;color:#fff; text-shadow: 3px 3px 4px rgb(30 53 52)">{{ $tour->nombre }}
                    </h1>
                    <div class="col-lg-12 text-center font-weight-bold" style="color: #fff">
                        <span style="text-shadow: 3px 3px 4px rgb(30 53 52)"><i class="icon-map-marker"></i>
                            {{ $tour->ubicacion }}</span><br>
                        <span style="text-shadow: 3px 3px 4px rgb(30 53 52)"><i class="icon-clock-o"></i>
                            {{ $tour->dias }} días</span>&nbsp;&nbsp;
                        <span style="text-shadow: 3px 3px 4px rgb(30 53 52)"><i class="icon-usd"></i>
                            {{ $tour->precio }}.00</span>&nbsp;&nbsp;
                    </div>
                </div>
                @auth
                    <div class="edicion">
                        <a href="/tours/{{ $tour->id }}/edit" target="_blank">
                            Editar Tour <i class="fa fa-edit"></i> </a>
                    </div>
                @endauth
                <div class="col-lg-12">
                    @if (session('status'))
                        <div class="text-success mt-2" style="z-index:999; position: relative;">
                            <div class="text-center alert alert-success alert-dismissible fade show" role="alert">
                                Su mensaje fué enviado con éxito, le responderemos en la mayor brevedad posible.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p>
                                <a href="{{ route('inicio') }}">Inicio</a> /
                                <a id="cat">
                                    {{ $tour->categoria }}
                                    <script>
                                        const cat = document.getElementById("cat");
                                        const categorias = "<?php echo $tour->categoria; ?>".split(",");
                                        const tourCategoria = categorias[0];
                                        switch (tourCategoria) {
                                            case "machupicchu":
                                                cat.textContent = "Tours en Cusco";
                                                cat.href = "{{ route('cusco') }}";
                                                break;
                                            case "around":
                                                cat.textContent = "Trek y Aventura";
                                                cat.href = '{{ route('trek') }}';
                                                break;
                                            case "hikes":
                                                cat.textContent = "Tours Diarios";
                                                cat.href = '{{ route('diarios') }}';
                                                break;
                                            case "luxury":
                                                cat.textContent = "Tours Perú";
                                                cat.href = '{{ route('paquetes') }}';
                                                break;
                                            default:
                                                cat.textContent = tourCategoria;
                                                break;
                                        }
                                    </script>
                                </a>
                                / {{ $tour->nombre }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    {!! $tour->contenido !!}
                    <br>
                    <div>
                        <ul class="nav nav-tabs justify-content-center nav-fill" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true"><i
                                        class="icon-pencil"></i> Resumen</button>
                            </li>
                            <li class="nav-item loadingImgs" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false"><i
                                        class="icon-list"></i> Programa
                                    detallado</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false"><i
                                        class="icon-add_box"></i> Incluye</button>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="mapa-tab" data-bs-toggle="tab" data-bs-target="#mapa"
                                    type="button" role="tab" aria-controls="mapa" aria-selected="false"><i
                                        class="icon-add_box"></i> Mapa</button>
                            </li> --}}
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="importante-tab" data-bs-toggle="tab"
                                    data-bs-target="#importante" type="button" role="tab" aria-controls="importante"
                                    aria-selected="false"><i class="icon-sim_card_alert"></i> Importante</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                {!! $tour->resumen !!}
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                {!! $tour->detallado !!}
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                {!! $tour->incluidos !!}
                            </div>
                            {{-- <div class="tab-pane fade" id="mapa" role="tabpanel" aria-labelledby="mapa-tab">
                                @if (!empty($tour->mapa))
                                    {!! $tour->mapa !!}
                                @else
                                    <p>Mapa no incluido</p>
                                @endif
                            </div> --}}
                            <div class="tab-pane fade" id="importante" role="tabpanel" aria-labelledby="importante-tab">
                                {!! $tour->importante !!}
                            </div>
                        </div>
                    </div>
                    <div class="compartir">
                        <h4 class="mb-3">Compartir:</h4>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}" target="_blank"
                            rel="noopener nofollow">
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}" target="_blank"
                            rel="noopener nofollow">
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="https://pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}&description={{ $tour->descripcion }}"
                            target="_blank" rel="noopener nofollow">
                            <i class="icon-pinterest"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ request()->fullUrl() }}&title={{ $tour->nombre }}&summary={{ $tour->descripcion }}&source=PachaMamaSpirit"
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
                    <div class="div-form-tours">
                        <p class="text-center mb-0">Desde:</p>
                        <h4 class="precio">${{ $tour->precio }}.00</h4>
                        <div class="linea-precio"></div>
                        <h3 class="text-center">Solicitar Info</h3>
                        <form class="djmFormShow" action="{{ route('mensajePacha') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control form-control-sm" id="nombre"
                                        name="nombre" placeholder="Inca Pachacutec" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control form-control-sm" id="email"
                                        name="email" placeholder="hijo-del-sol@gmail.com" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="adultos">Adultos:</label>
                                    <input type="number" class="form-control form-control-sm" name="adultos"
                                        id="adultos" placeholder="Number" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="childs" title="Children under 3 years old do not pay">Niños:
                                        ⓘ</label>
                                    <input type="number" name="childs" class="form-control form-control-sm"
                                        id="childs" placeholder="Number">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="date">Fecha de viaje Peru:</label>
                                    <input type="date" name="date" class="form-control form-control-sm"
                                        id="date">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="phone">Número: <i class="icon-whatsapp"></i></label>
                                    <input type="number" class="form-control form-control-sm" id="phone"
                                        name="phone" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="tour">Tour:</label>
                                    <input type="text" class="form-control form-control-sm" id="tour"
                                        value="{{ $tour->nombre }}" name="tour" readonly>
                                </div>
                                <!-- Campos ocultos para honeypot y tiempo -->
                                <div class="form-group col-md-12" style="display: none;">
                                    <label for="my_name">Nombre:</label>
                                    <input type="text" class="form-control form-control-sm" id="my_name"
                                        name="my_name" value="">
                                </div>
                                <input type="hidden" name="form_time" value="{{ time() }}">
                                <div class="form-group col-md-12">
                                    <label for="mensaje">Mensaje:</label>
                                    <textarea class="form-control" name="mensaje" id="mensaje">
                                    </textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="boton-card">Enviar</button>
                            </div>
                        </form>
                        <div class="card align-items-center">
                            <div class="card-bod mt-3 mb-2">
                                <h4 class="text-center">Soporte al Cliente:</h4>
                                <p class="text-center"><i class="icon-whatsapp">
                                    </i> +51 991 543 896<br>
                                    <i class="icon-whatsapp"></i> +51 953 773 549<br>
                                    </i> info@exploringperutours.com
                                </p>
                            </div>
                        </div>
                        <div class="card align-items-center mt-4">
                            <div class="card-bod p-4">
                                <h4 class="text-center">Métodos de pago:</h4>
                                <img src="{{asset('img/metodos-pago.png')}}" width="100%" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="mb-3">Tours relacionados:</h2>
                </div>
                @foreach ($otrosTours->take(4) as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('tours.show', $tour->slug) }}">
                                <img class="card-img-top" src="../{{ $tour->img }}" alt="Camino Inca 4 dias"
                                    loading="lazy">
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
                                        <span class="icon-clock-o" style="float: right"> {{ $tour->dias }}
                                            {{ $tour->dias == 1 ? 'día' : 'días' }}</span>
                                    </div>

                                    <div class="col-6">
                                        <span class="icon-usd" style="float:left"><strong>
                                                {{ $tour->precio }}.00</strong></span>
                                    </div>
                                    {{-- <div class="col-12 mt-2">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div> --}}
                                </div>
                                <a href="{{ route('tours.show', $tour->slug) }}" class="boton-card">Más detalles</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="space"></div>
            </div>
        </div>
    </section>
@endsection
