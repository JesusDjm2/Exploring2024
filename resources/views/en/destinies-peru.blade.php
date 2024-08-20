@extends('layouts.appen')
@php $titulo="The most beautiful cities to visit in Peru" @endphp
@php $descripcion="Welcome to our section of top tourist destinations in Peru. You will find a list of the most beautiful cities to visit in this country." @endphp
@php $keywords="Inca Trail, Machu Picchu tour, travel to Peru, Discover Peru" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/trekking-peru.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content') 
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Find destinations to discover Peru</h1>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    <h2>Peru as a tourist destination</h2>
                    <i>Peru, country of traditions, mixed country, strong country</i><br><br>
                    <p>
                        Tourism in<strong> Peru</strong> is directed towards archaeological monuments, as it has more
                        than one hundred thousand sites of interest, ecotourism in the Peruvian Amazon, cultural tourism
                        in colonial cities, gastronomic tourism, adventure tourism and beach tourism.<br><br>
                        According to a study by the Peruvian government, the satisfaction rate of tourists after
                        visiting Peru is 94%. It is the fastest growing industry in Peru.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('destinyCusco') }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/City-Tour-en-Sacsayhuaman-Cusco-Peru.webp') }}"
                                alt="Ciudad del Cusco" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Cusco</h5>
                            <p class="text-card text-center">Navel of the world</p>
                            <a href="{{ route('destinyCusco') }}" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('destinyLima') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/ceviche-peruano-gastronomy.webp') }}"
                                alt="Ceviche peruano" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Lima</h5>
                            <p class="text-card text-center">The city of kings</p>
                            <a href="{{ route('destinyLima') }}" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('destinyArequipa') }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/arequipa-ciudad-blanca-pacha-mama.webp') }}"
                                alt="Arequipa ciudad blanca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Arequipa</h5>
                            <p class="text-card text-center">The white city</p>
                            <a href="{{ route('destinyArequipa') }}" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{route('destinyPuno')}}">
                            <img class="card-img-top" src="{{ asset('img/thumb/lago-titicaca.webp') }}"
                                alt="lago Titicaca Puno" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Puno</h5>
                            <p class="text-card text-center">Capital of folklore</p>
                            <a href="{{route('destinyPuno')}}" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </section>

    @endsection
