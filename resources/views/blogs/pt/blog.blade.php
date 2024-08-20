@extends('layouts.appt')
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
                    <h1 class="h1-destinos">Tópicos do blog do Peru</h1>
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
                            <p><a href="{{ route('inicio') }}">Comecar</a> / <a>Blog</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col lg-12 mb-2">
                    <h2>Blogs sobre o Peru</h2>
                    <p>
                        Bem-vindo à nossa seção de blog! Aqui você encontrará temas interessantes sobre o Peru, desde dicas
                        úteis de viagem até informações sobre história, costumes, locais turísticos e muito mais. Explore
                        nossos posts e descubra tudo o que esse lindo país tem a oferecer.
                    </p>
                </div>
                <div class="col-lg-12 mb-5">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="buscador" placeholder="Buscar blog">
                    </div>
                    <div id="no-results" style="display: none; font-weight:bold">Nenhum resultado para a sua pesquisa.</div>
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
                {{-- @foreach ($blogs as $blog)
                    <div class="blogs blogimg blog-container"
                        style="background:url({{ $blog->img }}); background-size:cover">
                        <div class="black">
                            <h2 class="nombreBlog">{{ $blog->nombre }}</h2>
                            <div class="fecha"><i class="icon-calendar"></i><span>
                                    {{ $blog->created_at->format('d/m/Y') }}</span></div>
                            <p>{{ $blog->descripcion }}</p>
                            {{$blog->slug}}
                            <a href="{{ route('blogspt.show', $blog->slug) }}">Leia o artigo</a>
                        </div>
                    </div>
                @endforeach --}}
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
                                <a href="{{ route('blogspt.show', $blog->slug) }}" class="boton-card">Leia o artigo</a>
                            </div>
                        </div>
                    </div>
                @endforeach  
            </div>
        </div>
    </section>
@endsection
