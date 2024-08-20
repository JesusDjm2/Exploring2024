@extends('layouts.app')
@php    $titulo="Perú Blog" @endphp
@php    $descripcion="Conozca en el blog temas relacionados con el Perú, con mucha información importante y datos culturales." @endphp
@php    $keywords="peru blog, peru blog 2024" @endphp
@php $img="https://pachamamaspirit.com//blog-peru" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')

@section('content')
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">Temas de Blogs de Perú</h1>
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
                            <p><a href="{{ route('inicio') }}">Inicio</a> / <a>Blog</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col lg-12 mb-2">
                    <h2>BLogs sobre sobre Perú</h2>
                    <p>
                        ¡Bienvenid@ a nuestra sección de blogs! Aquí encontrarás temas interesantes sobre Perú, desde tips
                        útiles para viajar hasta información sobre la historia, costumbres, lugares turísticos y mucho más.
                        Explora nuestras publicaciones y descubre todo lo que este hermoso país tiene para ofrecer.</p>
                </div>
                <div class="col-lg-12 mb-5">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="buscador" placeholder="Buscar blog">
                    </div>
                    <div id="no-results" style="display: none; font-weight:bold">No se encontraron resultados para tu
                        búsqueda.</div>
                </div>
                <script>
                    function searchBlogs() {
                        const input = document.getElementById('buscador');
                        const blogs = document.querySelectorAll('.nombreBlog');
                        const blogContainers = document.querySelectorAll('.blog-container');
                        const noResults = document.getElementById('no-results');
                        let numResults = 0;

                        const searchWords = input.value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "").split(' ');

                        blogContainers.forEach(function(blogContainer) {
                            let blogName = blogContainer.querySelector('.nombreBlog').textContent.toLowerCase().normalize('NFD')
                                .replace(/[\u0300-\u036f]/g, "");
                            let hasAllWords = true;

                            searchWords.forEach(function(searchWord) {
                                if (!blogName.includes(searchWord)) {
                                    hasAllWords = false;
                                }
                            });

                            if (hasAllWords) {
                                blogContainer.style.display = 'block';
                                numResults++;
                            } else {
                                blogContainer.style.display = 'none';
                            }
                        });

                        if (input.value === '') {
                            blogContainers.forEach(function(blogContainer) {
                                blogContainer.style.display = 'block';
                            });
                        }

                        if (numResults === 0) {
                            noResults.style.display = 'block';
                        } else {
                            noResults.style.display = 'none';
                        }
                    }
                    setInterval(searchBlogs, 500);
                </script>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 p-4">
                        <div class="card text-center">
                            <img class="card-img-top" style="height: 220px; object-fit:cover"
                                src="{{ asset($blog->img) }}" alt="{{ $blog->nombre }}" loading="lazy">
                            <div class="card-body">
                                <h4 class="card-title">{{ $blog->nombre }}</h4>
                                <p class="text-center"><i class="icon-calendar"></i><span>
                                        {{ $blog->created_at->format('d/m/Y') }}</span></p>
                                <p class="card-text text-center">{{ $blog->descripcion }}</p>
                                <a href="{{ route('blog.show', $blog->slug) }}" class="boton-card">Leer artículo</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </section>
@endsection
