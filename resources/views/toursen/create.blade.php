@extends('layouts.admin')
@section('titulo', 'Crear tour en inglés')

@section('contenido')
    @if (session('status'))
        <div class="text-success">
            <h4>{{ session('status') }}</h4>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h3 class="float-left">Crear Nuevo Tour en Inglés</h3>
            <a href="{{ route('toursen.index') }}" class="btn btn-primary float-right">Volver</a>
        </div>
        <div class="col-12 mt-2">
            <form action="/toursen" method="post" enctype="multipart/form-data" class="bg-light" style="padding: 1em">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control form-control-sm"
                            value="{{ old('nombre') }}" required>
                        @error('nombre')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" id="precio" name="precio" class="form-control form-control-sm"
                            value="{{ old('precio') }}" required>
                        @error('precio')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-3">
                        <label for="dias" class="form-label">Días:</label>
                        <input type="number" id="dias" name="dias" class="form-control form-control-sm"
                            value="{{ old('dias') }}" required>
                        @error('dias')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="col-lg-2">
                        <label for="tour_id">Relacionar con tour ES:</label>
                        <select id="tour_id" name="tour_id" class="form-control form-control-sm">
                            @foreach ($tours as $tour)
                                <option value="{{ $tour->id }}">{{ $tour->nombre }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    {{--  <div class="col-lg-12 pt-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control form-control-sm"
                            required>
                    </div> --}}

                    {{--  <div class="col-lg-12">
                        <label for="mapa" class="form-label">Mapa:</label>
                        <textarea name="mapa" id="mapa" class="ckeditor"></textarea>
                    </div> --}}
                    <div class="col-lg-12 pt-3">
                        <label for="contenido" class="form-label">Contenido:</label>
                        <textarea class="ckeditor form-control" name="contenido" id="contenido">{{ old('contenido') }}</textarea>
                        @error('contenido')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-12 pt-3">
                        <label for="resumen" class="form-label">Resumen:</label>
                        <textarea class="ckeditor form-control" name="resumen" id="resumen" required>{{ old('resumen') }}</textarea>
                        @error('resumen')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-12 pt-3">
                        <label for="detallado" class="form-label">Detallado:</label>
                        <textarea class="ckeditor form-control" name="detallado" id="detallado" required>{{ old('detallado') }}</textarea>
                        @error('detallado')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6 pt-3">
                        <label for="incluidos" class="form-label">Incluye: <small>Solo listas</small></label>
                        <textarea class="ckeditor form-control" name="incluidos" id="incluidos" required>{{ old('incluidos') }}</textarea>
                        @error('incluidos')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6 pt-3">
                        <label for="importante" class="form-label">Importante: <small>Solo listas</small></label>
                        <textarea class="ckeditor form-control" name="importante" id="importante">{{ old('importante') }}</textarea>
                        @error('importante')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="col-lg-4">
                        <label for="tour_id">Seleccionar Tour:</label>
                        <select id="tour_id" name="tour_id">
                            @foreach ($tours as $tour)
                                <option value="{{ $tour->id }}">{{ $tour->nombre }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="col-lg-4 pt-3">
                        <label for="img" class="form-label">Imagen: <small class="text-success">Imagen en
                                miniatura</small></label>
                        <input type="file" id="img" name="img" class="form-control form-control-sm"
                            accept="image/*" onchange="previewImage()" required>
                        <img id="imagePreview" src="{{ old('img') ? asset(old('img')) : '#' }}"
                            alt="Vista previa de la imagen"
                            style="max-width: 100%; height: auto; display: {{ old('img') ? 'block' : 'none' }}">
                        @error('img')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <script>
                        function previewImage() {
                            var input = document.getElementById('img');
                            var preview = document.getElementById('imagePreview');

                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    preview.src = e.target.result;
                                    preview.style.display = 'block'; // Mostrar la imagen previsualizada
                                }

                                reader.readAsDataURL(input.files[0]); // Leer el archivo como una URL de datos
                            } else {
                                preview.src = '#';
                                preview.style.display = 'none'; // Ocultar la imagen previsualizada si no se selecciona ningún archivo
                            }
                        }
                    </script>
                    <div class="col-lg-4 pt-3">
                        <label for="clase" class="form-label">Clase:
                            <small class="text-success">(Para definir imagen de fondo)</small>
                        </label>
                        <select name="clase" id="clase" class="form-control form-control-sm" required>
                            <option value="aventuras" {{ old('clase') == 'aventuras' ? 'selected' : '' }}>Camino Inca
                                Salkantay</option>
                            <option value="imperdible" {{ old('clase') == 'imperdible' ? 'selected' : '' }}>Plaza de armas
                                Cusco</option>
                            <option value="machu" {{ old('clase') == 'machu' ? 'selected' : '' }}>Machu Picchu</option>
                            <option value="ollantaytambo" {{ old('clase') == 'ollantaytambo' ? 'selected' : '' }}>
                                Ollantaytambo</option>
                            <option value="pachamamalodge" {{ old('clase') == 'pachamamalodge' ? 'selected' : '' }}>Vista
                                Valle Sagrado</option>
                            <option value="valle" {{ old('clase') == 'valle' ? 'selected' : '' }}>Vista Valle Sagrado 2
                            </option>
                            <option value="santuaryLodge" {{ old('clase') == 'santuaryLodge' ? 'selected' : '' }}>Hotel
                                Sanctuary Lodge</option>
                            <option value="puno" {{ old('clase') == 'puno' ? 'selected' : '' }}>Balsa en Lago Titicaca
                            </option>
                            <option value="selva" {{ old('clase') == 'selva' ? 'selected' : '' }}>Rio Amazonas</option>
                            <option value="caminata" {{ old('clase') == 'caminata' ? 'selected' : '' }}>Caminata Salkantay
                            </option>
                            <option value="nazca" {{ old('clase') == 'nazca' ? 'selected' : '' }}>Lineas de Nazca
                            </option>
                            <option value="lima" {{ old('clase') == 'lima' ? 'selected' : '' }}>Ciudad de Lima</option>
                            <option value="arequipa" {{ old('clase') == 'arequipa' ? 'selected' : '' }}>Ciudad de Arequipa
                            </option>
                            <option value="huchuy" {{ old('clase') == 'huchuy' ? 'selected' : '' }}>Huchuy Qosqo</option>
                            <option value="choque" {{ old('clase') == 'choque' ? 'selected' : '' }}>Choquequirao</option>
                            <option value="humantay" {{ old('clase') == 'humantay' ? 'selected' : '' }}>Laguna Humantay
                            </option>
                            <option value="vinicunca" {{ old('clase') == 'vinicunca' ? 'selected' : '' }}>Vinicunca
                            </option>
                            <option value="ica" {{ old('clase') == 'ica' ? 'selected' : '' }}>Huacachina</option>
                            <option value="pisco" {{ old('clase') == 'pisco' ? 'selected' : '' }}>Reserva Nacional
                                Paracas</option>
                            <option value="puerto" {{ old('clase') == 'puerto' ? 'selected' : '' }}>Puerto Maldonado
                            </option>
                            <option value="mirador-condor" {{ old('clase') == 'mirador-condor' ? 'selected' : '' }}>
                                Mirador del Cóndor</option>
                        </select>
                        @error('clase')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
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

                    <div class="col-lg-4 pt-3">
                        <label for="tour_id" class="form-label">Tour relacionado:</label>
                        <select name="tour_id" id="tour_id" class="form-control form-control-sm" required>
                            <option value="">Seleccione un tour</option>
                            @foreach ($tours as $tour)
                                <option value="{{ $tour->id }}" {{ old('tour_id') == $tour->id ? 'selected' : '' }}>
                                    {{ $tour->nombre }}
                                </option>
                            @endforeach
                        </select>
                        @error('tour_id')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 pt-3">
                        <label for="categoria" class="form-label">Categoría: <small>Es posible escoger más de 1 Cat.
                                presionando CTRL</small></label>
                        <select multiple="multiple" name="categoria[]" id="categoria"
                            class="form-control form-control-sm">
                            <option value="hikes" {{ in_array('hikes', old('categoria', [])) ? 'selected' : '' }}>Diarios
                            </option>
                            <option value="machuPicchu"
                                {{ in_array('machuPicchu', old('categoria', [])) ? 'selected' : '' }}>Paquetes Cusco
                            </option>
                            <option value="around" {{ in_array('around', old('categoria', [])) ? 'selected' : '' }}>Trek &
                                Aventura</option>
                            <option value="luxury" {{ in_array('luxury', old('categoria', [])) ? 'selected' : '' }}>
                                Paquetes en Perú</option>
                        </select>
                        @error('categoria')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6 pt-3">
                        <label for="" class="form-label">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control form-control-sm"
                            required>
                        @error('ubicacion')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="keywords" class="form-label">Keywords: <small>(Separar cada palabra/frase por una
                                coma)</small></label>
                        <input type="text" id="keywords" name="keywords" class="form-control form-control-sm"
                            required value="{{ old('keywords') }}">
                        @error('keywords')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-12 pt-3">
                        <label for="slug" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control form-control-sm"
                            onkeydown="handleSpace(event)" required value="{{ old('slug') }}">
                        @error('slug')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <script>
                        function handleSpace(event) {
                            // Si la tecla presionada es un espacio
                            if (event.key === " ") {
                                // Prevenir la acción predeterminada del espacio (evitar el espacio)
                                event.preventDefault();

                                // Obtener el valor actual del campo de texto
                                var input = event.target;
                                var currentValue = input.value;

                                // Obtener la posición del cursor
                                var cursorPosition = input.selectionStart;

                                // Insertar un guion en la posición del cursor
                                var newValue = currentValue.slice(0, cursorPosition) + '-' + currentValue.slice(cursorPosition);

                                // Actualizar el valor del campo de texto
                                input.value = newValue;

                                // Mover el cursor a la siguiente posición
                                input.setSelectionRange(cursorPosition + 1, cursorPosition + 1);
                            }
                        }
                    </script>
                </div>
                <a href="{{ route('toursen.index') }}" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
