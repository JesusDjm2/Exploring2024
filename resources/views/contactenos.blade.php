@extends('layouts.app')
@section('titulo', 'Contacte al equipo de Pacha Mama Spirit | Agencia de viajes Perú')
@section('metas')
    <meta name="keywords"
        content="Book Peru, Book Machu Picchu, machu Picchu, Travel Peru, Travel to Machu Picchu, Inca Trail, Ica trail to Machu Picchu">
    <link rel="canonical" href="https://exploringperutours.com">
    <meta name="description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta name="image_src" content="https://exploringperutours.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">

    <meta name="og_image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="og_secureImage" content="https://exploringperutours.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">

    <meta property="og:title" content="Contacte al equipo de Pacha Mama Spirit | Agencia de viajes Perú">
    <meta property="og:description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta property="og:url" content="https://exploringperutours.com/contacte-exploring-peru-tours">
    <meta name="twitter:card" content="summary">
    <meta name="robots" content="index,follow">
@endsection
@section('content')
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff" class="h1web">Contácte con Exploring Peru Tours por ayuda
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="font-weight-bold text-center my-4">Contácte al equipo de Exploring Peru Tours</h3>
                    <p class="text-center w-responsive mx-auto mb-5">
                        Estamos aquí para ayudarte. ¿Tiene usted alguna pregunta? Por favor, no dude en contactarnos
                        directamente. Nuestro equipo se comunicará contigo en cuestión de horas para ayudarte.
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="text-center">
                        <i class="icon-whatsapp" style="font-size: 30px"></i><br>
                        +51 991 543 896 <br>
                        +51 953 773 549
                    </p>
                    <p class="text-center">
                        <i class="icon-envelope" style="font-size: 30px"></i><br>
                        info@exploringperutours.com <br>
                        reserves@exploringperutours.com
                    </p>
                    <p class="text-center">
                        <i class="icon-map-marker" style="font-size: 30px"></i><br>
                        Jiron 28 de julio Distrito de Santiago.
                    </p>
                </div>
                <div class="col-md-8">
                   <!-- <form id="contact-form" name="contact-form" action="{{ route('mensajeIndex') }}" method="POST">
                        @csrf
                        <div class="row formTransparent">
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Nombre:" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="email" name="email" class="form-control"
                                        placeholder="Email:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        placeholder="Teléfono:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="country" name="country" class="form-control"
                                        placeholder="Nacionalidad:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="number" id="adults" name="adults" class="form-control"
                                        placeholder="Adultos:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <select name="tipo" id="tipo" class="form-control md">
                                        <option selected>Opciones de viaje:</option>
                                        <option value="familia">Viaje en familia</option>
                                        <option value="pareja">Viaje en pareja</option>
                                        <option value="amigos">Con amigos</option>
                                        <option value="grupo">Viaje en grupo</option>
                                        <option value="privado">Viaje privado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="md-form">
                                    <textarea type="text" placeholder="Escriba su consulta..." id="message" name="message" rows="2"
                                        class="form-control md-textarea" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="text-center">
                                    <button class="btnTransparent" type="submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>-->
					<form id="contact-form" name="contact-form" action="" method="POST" onsubmit="recargarPagina(event)">
    @csrf
    <div class="row formTransparent">
        <div class="col-md-6">
            <div class="md-form mb-4">
                <input type="text" id="name" name="name" class="form-control" placeholder="Name:" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form mb-4">
                <input type="text" id="email" name="email" class="form-control" placeholder="Email:" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="md-form mb-4">
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone:" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="md-form mb-4">
                <input type="text" id="country" name="country" class="form-control" placeholder="Country:">
            </div>
        </div>
        <div class="col-lg-6" style="display: none;">
            <label for="my_name">Nombre:</label>
            <input type="text" class="form-control form-control-sm" id="my_name" name="my_name" value="">
        </div>
        <div class="col-lg-6">
            <div class="md-form mb-4">
                <input type="number" id="adults" name="adults" class="form-control" placeholder="Adults:">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="md-form mb-4">
                <select name="tipo" id="tipo" class="form-control md">
                    <option selected>Travel options:</option>
                    <option value="familia">Family travel</option>
                    <option value="pareja">Travel as a couple</option>
                    <option value="amigos">With friends</option>
                    <option value="grupo">Group trip</option>
                    <option value="privado">Private trip</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <div class="md-form">
                <textarea type="text" placeholder="Write your query..." id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <div class="text-center">
                <button class="boton-card" type="submit">Send</button>
            </div>
        </div>
    </div>
</form>

<script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        var honeypot = document.getElementById('my_name');
        honeypot.setAttribute('required', 'required');
        location.reload(); // Recarga la página
    });
</script>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="text-center mt-2 mb-4">
                        Nuestros certificados
                    </h3>
                </div>
                <div class="col-lg-7">
                    <img src="{{ asset('img/Licencia-municipalidad.jpg') }}" width="100%" class="img-fluid" loading="lazy">
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('img/DIRCETUR-certificado.jpg') }}" width="100%" class="img-fluid" loading="lazy">
                </div>
                <div class="col-lg-12 mt-5">
                    <h3 class="text-center mt-2 mb-4">
                        Métodos de Pago
                    </h3>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="col-md-7">
                        <img src="{{ asset('img/metodos-pago.png') }}" width="100%" class="img-fluid" loading='lazy'>
                    </div>
                </div>
                <div class="col-lg-12 mt-5">
                    <h3 class="text-center mt-2 mb-4">
                        Nuestros colaboradores
                    </h3>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="col-md-7">
                        <img src="{{ asset('img/Recursos-Peru-Travel.png') }}" width="100%" class="img-fluid" loading='lazy'>
                    </div>
                </div>
            </div>     
        </div>
    </section>
@endsection
