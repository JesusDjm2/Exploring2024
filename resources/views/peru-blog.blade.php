@extends('layouts.appen')
@php    $titulo="Perú Blog" @endphp
@php    $descripcion="Get to know blog topics related to Peru, with a lot of important information and cultural data." @endphp
@php    $keywords="peru blog, peru blog 2024" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff" class="h1web">Peru Blog Topics</h1>
                </div>
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
                            <p><a href="{{ route('index') }}">Home</a> / <a>Blog</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col lg-12 mb-2">
                    <h2>BLogs abouts Perú</h2>
                    <p>
                        Welcome to our blog section! Here you will find interesting topics about Peru, from useful tips for
                        traveling to information about history, customs, tourist spots, and much more. Explore our
                        publications and discover everything this beautiful country has to offer.
                    </p>
                </div>
                <div class="col-lg-12 mb-5">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="buscador" placeholder="Search topic">
                    </div>
                    <div id="no-results" style="display: none; font-weight:bold">
                        No results found for your search.
                    </div>
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
                    <div class="blogs blogimg blog-container" style="background:url({{ $blog->img }});background-size:cover;">
                        <div class="black">
                            <h2 class="nombreBlog">{{ $blog->nombre }}</h2>
                            <div class="fecha"><i class="icon-calendar"></i><span>
                                    {{ $blog->created_at->format('d/m/Y') }}</span></div>
                            <p>{{ $blog->descripcion }}</p>
                            <a href="{{ route('enblog', $blog->slug) }}">Leer artículo</a>
                        </div>
                    </div>
                @endforeach  --}}
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
                                <a href="{{ route('enblog', $blog->slug) }}" class="boton-card">Read article</a>
                            </div>
                        </div>
                    </div>
                @endforeach             
            </div>
        </div>
    </section>
    <div style="padding-bottom: 5em"></div>
@endsection
