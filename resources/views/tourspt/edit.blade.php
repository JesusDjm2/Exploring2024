@extends('layouts.admin')
@section('titulo', 'Editar tour en inglés')
@section('contenido')
    @if (session('status'))
        <div class="text-success">
            <h4>{{ session('status') }}</h4>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12 mb-3">
            <h3 class="float-left">Actualizar tour: {{ $tour->nombre }}</h3>
            <a href="{{ route('tourspt.index') }}" class="btn btn-primary btn-sm float-right">Volver</a>
        </div>
        <div class="col-12">
            <form action="{{ route('tourspt.update', ['tourspt' => $tour->id]) }}" method="post" enctype="multipart/form-data"
                class="bg-light" style="padding: 1em">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-6">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required
                            value="{{ $tour->nombre }}">
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Precio:</label>
                        <input type="text" id="precio" name="precio" class="form-control form-control-sm" required
                            value="{{ $tour->precio }}">
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Días:</label>
                        <input type="text" id="dias" name="dias" class="form-control form-control-sm" required
                            value="{{ $tour->dias }}">
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="contenido" class="form-label">Contenido:</label>
                        <textarea class="ckeditor form-control" name="contenido" id="contenido">{!! Request::old('content', $tour->contenido) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="resumen" class="form-label">Resumen del tour:</label>
                        <textarea class="ckeditor form-control" name="resumen" id="resumen">{!! Request::old('content', $tour->resumen) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="detallado" class="form-label">Detalle del tour:</label>
                        <textarea class="ckeditor form-control" name="detallado" id="detallado">{!! Request::old('content', $tour->detallado) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-6 pt-3">
                        <label for="incluidos" class="form-label">Incluidos:</label>
                        <textarea class="ckeditor form-control" name="incluidos" id="incluidos">{!! Request::old('content', $tour->incluidos) !!}</textarea>
                        </textarea>
                    </div>

                    <div class="col-lg-6 pt-3">
                        <label for="incluidos" class="form-label">Importante:</label>
                        <textarea class="ckeditor form-control" name="importante" id="importante">{!! Request::old('content', $tour->importante) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-3 pt-3 pb-3">
                        <label for="img" class="form-label">Imagen: <small class="text-primary">(Img en
                                miniatura)</small></label>
                        <input type="file" id="img" name="img" class="form-control" accept="image/*"
                            value="{{ $tour->img }}">
                        <p>Imagen actual:</p>
                        <img src="../../{{ $tour->img }}" width="100%"><br>
                    </div>

                    <div class="col-lg-4 pt-3">
                        <label for="" class="form-label">Categoría(s) del tour:</label>
                        <select name="categoria[]" id="categoria" class="form-control form-control-sm"
                            aria-label="Default select example" required multiple="multiple">
                            <option value="{{ $tour->categoria }}" selected style="text-transform: capitalize">
                                {{ $tour->categoria }} <small>(Seleccionado)</small></option>
                            <option value="caminata">Diarios</option>
                            <option value="machuPicchu">Paquetes Cusco</option>
                            <option value="around">Trek & Aventura</option>
                            <option value="luxury">Paquetes en Perú</option>
                        </select>
                    </div>
                    <div class="col-lg-5 pt-3">
                        <label for="clase" class="form-label">Clase:</label>
                        <select name="clase" id="clase" class="form-control form-control-sm" required>
                            <option value="" disabled {{ old('clase', $tour->clase) ? '' : 'selected' }}>Seleccionar
                                clase</option>
                            <option value="aventuras" {{ old('clase', $tour->clase) == 'aventuras' ? 'selected' : '' }}>
                                Camino Inca Salkantay</option>
                            <option value="imperdible" {{ old('clase', $tour->clase) == 'imperdible' ? 'selected' : '' }}>
                                Plaza de armas Cusco</option>
                            <option value="machu" {{ old('clase', $tour->clase) == 'machu' ? 'selected' : '' }}>Machu
                                Picchu</option>
                            <option value="ollantaytambo"
                                {{ old('clase', $tour->clase) == 'ollantaytambo' ? 'selected' : '' }}>Ollantaytambo
                            </option>
                            <option value="pachamamalodge"
                                {{ old('clase', $tour->clase) == 'pachamamalodge' ? 'selected' : '' }}>Vista Valle Sagrado
                            </option>
                            <option value="valle" {{ old('clase', $tour->clase) == 'valle' ? 'selected' : '' }}>Vista
                                Valle Sagrado 2</option>
                            <option value="santuaryLodge"
                                {{ old('clase', $tour->clase) == 'santuaryLodge' ? 'selected' : '' }}>Hotel Sanctuary Lodge
                            </option>
                            <option value="puno" {{ old('clase', $tour->clase) == 'puno' ? 'selected' : '' }}>Balsa en
                                Lago Titicaca</option>
                            <option value="selva" {{ old('clase', $tour->clase) == 'selva' ? 'selected' : '' }}>Rio
                                Amazonas</option>
                            <option value="caminata" {{ old('clase', $tour->clase) == 'caminata' ? 'selected' : '' }}>
                                Caminata Salkantay</option>
                            <option value="nazca" {{ old('clase', $tour->clase) == 'nazca' ? 'selected' : '' }}>Lineas de
                                Nazca</option>
                            <option value="lima" {{ old('clase', $tour->clase) == 'lima' ? 'selected' : '' }}>Ciudad de
                                Lima</option>
                            <option value="arequipa" {{ old('clase', $tour->clase) == 'arequipa' ? 'selected' : '' }}>
                                Ciudad de Arequipa</option>
                            <option value="huchuy" {{ old('clase', $tour->clase) == 'huchuy' ? 'selected' : '' }}>Huchuy
                                Qosqo</option>
                            <option value="choque" {{ old('clase', $tour->clase) == 'choque' ? 'selected' : '' }}>
                                Choquequirao</option>
                            <option value="humantay" {{ old('clase', $tour->clase) == 'humantay' ? 'selected' : '' }}>
                                Laguna Humantay</option>
                            <option value="vinicunca" {{ old('clase', $tour->clase) == 'vinicunca' ? 'selected' : '' }}>
                                Vinicunca</option>
                            <option value="ica" {{ old('clase', $tour->clase) == 'ica' ? 'selected' : '' }}>Huacachina
                            </option>
                            <option value="pisco" {{ old('clase', $tour->clase) == 'pisco' ? 'selected' : '' }}>Reserva
                                Nacional Paracas</option>
                            <option value="puerto" {{ old('clase', $tour->clase) == 'puerto' ? 'selected' : '' }}>Puerto
                                Maldonado</option>
                            <option value="mirador-condor"
                                {{ old('clase', $tour->clase) == 'mirador-condor' ? 'selected' : '' }}>Mirador del Cóndor
                            </option>
                            <option value="valleSur" {{ old('clase', $tour->clase) == 'valleSur' ? 'selected' : '' }}>
                                Valle Sur</option>
                        </select>
                        @error('clase')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div id="clase-div" style="width: 100%; height: 220px; object-fit: cover;"></div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const selectElement = document.getElementById('clase');
                            const claseDiv = document.getElementById('clase-div');

                            function updateDivClass() {
                                claseDiv.className = '';
                                if (selectElement.value) {
                                    claseDiv.classList.add(selectElement.value);
                                }
                            }
                            selectElement.addEventListener('change', updateDivClass);
                            updateDivClass();
                        });
                    </script>
                    <div class="col-lg-6 pt-3">
                        <label for="" class="form-label">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control form-control-sm"
                            required value="{{ $tour->ubicacion }}">
                    </div>

                    <div class="col-lg-6 pt-3">
                        <label for="tour_id" class="form-label">Tour relacionado:</label>
                        <select name="tour_id" id="tour_id" class="form-control form-control-sm" required>
                            <option value="">Seleccionar un tour</option>
                            @foreach ($es as $e)
                                <option value="{{ $e->id }}" 
                                    {{ old('tour_id', isset($tour->tourPt) ? $tour->tourPt->id : null) == $e->id ? 'selected' : '' }}>
                                    {{ $e->nombre }}
                                </option>
                            @endforeach
                        </select>
                        @error('tour_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-lg-12 pt-3">
                        <label for="" class="form-label">Keywords:</label>
                        <input type="text" id="keywords" name="keywords" class="form-control form-control-sm"
                            required value="{{ $tour->keywords }}">
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="slug" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control form-control-sm"
                            value="{{ $tour->slug }}" onkeydown="handleSpace(event)" required>
                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <script>
                        function handleSpace(event) {
                            if (event.key === " ") {
                                event.preventDefault();
                                var input = event.target;
                                var currentValue = input.value;
                                var cursorPosition = input.selectionStart;
                                var newValue = currentValue.slice(0, cursorPosition) + '-' + currentValue.slice(cursorPosition);
                                input.value = newValue;
                                input.setSelectionRange(cursorPosition + 1, cursorPosition + 1);
                            }
                        }
                    </script>
                </div>
                <a href="{{ route('tourspt.index') }}" class="btn btn-sm btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary btn-sm mt-4" type="submit">Guardar</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
