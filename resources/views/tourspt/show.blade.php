@extends('layouts.appt')
@section('titulo', $tour->nombre)
@include('layouts.metas')
@section('content')

    <div class="contenedor-fondo">
        <div class="blog" id="blog">
            <!----Variable de clase------>
            <div id="sarah" style="opacity: 0">
                {{ $tour->clase }}
            </div>
            <!----Fin Variable de clase------>
            <script>
                var $nombre = document.getElementById('sarah').innerText;
                var $insertar = document.getElementById("blog");
                $insertar.classList.remove("blog");
                $insertar.classList.add($nombre);
            </script>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="h1-destinos">{{ $tour->nombre }}</h1>
                        <div class="col-lg-12 text-center font-weight-bold" style="color: #fff">
                            <span><i class="icon-map-marker"></i> {{ $tour->ubicacion }}</span><br>
                            <span><i class="icon-clock-o"></i> {{ $tour->dias }} {{ $tour->dias == 1 ? 'dia' : 'dias' }}
                            </span>&nbsp;&nbsp;
                            <span><i class="icon-usd"></i> {{ $tour->precio }}.00</span>&nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="col-lg-12">
                        @if (session('status'))
                            <div class="text-success mt-2" style="z-index:999; position: relative;">
                                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                    Sua mensagem foi enviada com sucesso, responderemos o mais rápido possível.
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
    </div>
    @auth
        <div class="edicion">
            <a href="/tourspt/{{ $tour->id }}/edit" target="_blank">
                Editar Tour <i class="fa fa-edit"></i> </a>
        </div>
    @endauth
    <section>
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('inicio') }}">Começar</a> /
                                <a id="cat">
                                    {{ $tour->categoria }}
                                    <script>
                                        const cat = document.getElementById("cat");
                                        const categorias = "<?php echo $tour->categoria; ?>".split(","); // dividimos la cadena en un array
                                        const tourCategoria = categorias[0]; // obtenemos la primera categoría
                                        switch (tourCategoria) {
                                            case "machuPicchu":
                                                cat.textContent = "Tours Machu Picchu";
                                                cat.href = "{{ route('mapien') }}";
                                                break;
                                            case "around":
                                                cat.textContent = "Around Perú";
                                                cat.href = '{{ route('around') }}';
                                                break;
                                            case "caminata":
                                                cat.textContent = "Treks";
                                                cat.href = '{{ route('hikes') }}';
                                                break;
                                            case "luxury":
                                                cat.textContent = "Luxury";
                                                cat.href = '{{ route('private') }}';
                                                break;
                                            case "fullday":
                                                cat.textContent = "Full Day";
                                                cat.href = '{{ route('fulldayen') }}';
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
                    <p class="text-justify">{!! $tour->contenido !!}</p>
                    <br>
                    <div>
                        <ul class="nav nav-tabs justify-content-center nav-fill" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true"><i
                                        class="icon-pencil"></i> Visão geral</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false"><i
                                        class="icon-list"></i> Programa detalhado</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false"><i
                                        class="icon-add_box"></i> Incluído</button>
                            </li>
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
                            <div class="tab-pane fade" id="importante" role="tabpanel" aria-labelledby="importante-tab">
                                {!! $tour->importante !!}
                            </div>
                        </div>
                    </div>
                    <div class="compartir">
                        <h4 class="mb-3">Compartilhar:</h4>
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
                        <p class="text-center mb-0">De:</p>
                        <h4 class="precio">${{ $tour->precio }}.00</h4>
                        <div class="linea-precio"></div>
                        <h3 class="text-center">Solicite informações</h3>
                        <form class="djmFormShow" action="{{ route('mensajePacha') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nome:</label>
                                    <input type="text" class="form-control form-control-sm" id="nombre"
                                        name="nombre" placeholder="Inca Pachacutec">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email:</label>
                                    <input type="email" class="form-control form-control-sm" id="email"
                                        name="email" placeholder="hijo-del-sol@gmail.com">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Adultos:</label>
                                    <input type="number" class="form-control form-control-sm" name="adultos"
                                        id="adultos" placeholder="Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2" data-title="Crianças menores de 3 anos não pagam">Crianças:
                                        ⓘ</label>
                                    <input type="number" class="form-control form-control-sm" name="childs"
                                        id="inputAddress2" placeholder="Number">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputCity">Data de chegada</label>
                                    <input type="date" class="form-control form-control-sm" id="date"
                                        name="date">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputCity">Telefone: <i class="icon-whatsapp"></i></label>
                                    <input type="number" class="form-control form-control-sm" id="phone"
                                        name="phone">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="tour">Tour:</label>
                                    <input type="text" class="form-control form-control-sm" name="tour"
                                        id="tour" value="{{ $tour->nombre }}" readonly>
                                </div>
                                <!-- Campos ocultos para honeypot y tiempo -->
                                <div class="form-group col-md-12" style="display: none;">
                                    <label for="my_name">Nombre:</label>
                                    <input type="text" class="form-control form-control-sm" id="my_name"
                                        name="my_name" value="">
                                </div>
                                <input type="hidden" name="form_time" value="{{ time() }}">
                                <div class="form-group col-lg-12">
                                    <label for="mensaje">Mensagem:</label>
                                    <textarea type="text" name="mensaje" id="mensaje" class="form-control" id="mensaje">
                                    </textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="boton-card">Enviar</button>
                            </div>
                        </form>
                        <div class="card align-items-center">
                            <div class="card-bod mt-3 mb-2">
                                <h4 class="text-center">Suporte ao cliente:</h4>
                                <p class="text-center"><i class="icon-whatsapp">
                                    </i> +51 991 543 896<br>
                                    <i class="icon-whatsapp"></i> +51 953 773 549<br>
                                    </i> info@exploringperutours.com
                                </p>
                            </div>
                        </div>
                        <div class="card align-items-center mt-4">
                            <div class="card-bod p-4">
                                <h4 class="text-center">Métodos de pagamento:</h4>
                                <img src="{{asset('img/metodos-pago.png')}}" width="100%" class="img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Popular tours:</h2>
                </div>
                @foreach ($otrosTours as $tour)
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
                                    <div class="col-12 pt-2">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                </div>
                                <a href="{{ route('tourspt.show', ['slug' => $tour->slug]) }}" class="boton-card">Ver passeio</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="space"></div>
            </div>
        </div>
    </section>

@endsection
