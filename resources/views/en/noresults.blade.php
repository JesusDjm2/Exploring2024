@extends('layouts.appen')
@extends('layouts.appen')
@php $titulo="Results for your tour search" @endphp
@php $descripcion="List of search for your tours" @endphp
@php $keywords="Vinicunca, Humantay, rainbow mountain, City tour" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/trekking-peru.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="mirador-condor">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 style="padding-top: 18%;color:#fff" class="h1web">No results were found for your search: '{{$nombre}}'</h3>
                    <p class="text-center" style="color:#fff">Perform new search</p>
                </div>
                <div class="col-lg-12 mx-auto">
                    <form action="{{ route('searchen') }}" method="GET">
                        @csrf
                        <div class="col-12 mr-auto">
                            <div class="form-row">
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Perform new search...">
                            </div>
                        </div>
                        <div class="col-3 mx-auto mt-4 text-center">
                            <input type="submit" class="boton-blog-search" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
