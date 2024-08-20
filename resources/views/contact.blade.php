@extends('layouts.appen')
@section('titulo', 'Contact Pacha Mama Spirit | Travel Agency for Perú')
@section('metas')
    <meta name="keywords"
        content="Book Peru, Book Machu Picchu, machu Picchu, Travel Peru, Travel to Machu Picchu, Inca Trail, Ica trail to Machu Picchu">
    <link rel="canonical" href="https://pachamamaspirit.com">
    <meta name="description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta name="image_src" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">

    <meta name="og_image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="og_secureImage" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">

    <meta property="og:title" content="Contact Pacha Mama Spirit | Travel Agency Perú">
    <meta property="og:description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta property="og:url" content="https://pachamamaspirit.com/contact-pacha-mama">
    <meta name="twitter:card" content="summary">
    <meta name="robots" content="index,follow">
@endsection
@section('content')
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff" class="h1web">Contact with Exploring Peru Tours for help</h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-12 mt-3">
                    <h3 class="h1-responsive font-weight-bold text-center my-4">Contact Exploring Peru Tours team</h3>
                    <p class="text-center w-responsive mx-auto mb-5">
                        We are here to help you. Do you have any questions? Please do not hesitate to
                        contact us directly. Our team will come back to you within a matter of hours to help you.
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
                    <!--<form id="contact-form" name="contact-form" action="{{ route('mensajeIndex') }}" method="POST">
                        @csrf
                        <div class="row formTransparent">
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Name:" required>
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
                                        placeholder="Phone:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="country" name="country" class="form-control"
                                        placeholder="Country:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="number" id="adults" name="adults" class="form-control"
                                        placeholder="Adults:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <select name="tipo" id="tipo" class="form-control md">
                                        <option selected> Trip option:</option>
                                        <option value="familia">Family trip</option>
                                        <option value="pareja">Couple trip</option>
                                        <option value="amigos">Friends trip</option>
                                        <option value="grupo">Group trip</option>
                                        <option value="privado">Private trip</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="md-form">
                                    <textarea type="text" placeholder="Write here your query..." id="message" name="message" rows="2"
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
                        Our certificates
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
                        Payment methods
                    </h3>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="col-md-7">
                        <img src="{{ asset('img/metodos-pago.png') }}" width="100%" class="img-fluid" loading='lazy'>
                    </div>
                </div>
                <div class="col-lg-12 mt-5">
                    <h3 class="text-center mt-2 mb-4">
                        Ours contributors
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
