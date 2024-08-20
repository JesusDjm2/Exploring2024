@extends('layouts.admin')
@section('titulo', 'Crear nuevo tour en español')

@section('contenido')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="row" style="padding: 1em; border-radius: 10px;">
                <div class="col-lg-6 float-left">
                    <h3>Crear Nuevo Tour en español</h3>
                </div>
                <div class="col-lg-6">
                    <a href="/toursen/create" class="btn btn-primary btn-sm float-right">Crear tour en Ingles</a>
                    <a href="/tours" class="btn btn-danger btn-sm mr-3 float-right">Volver</a>
                </div>
            </div>
            <form action="/tours" method="post" enctype="multipart/form-data" class="bg-light">
                @csrf
                <div class="row">
                    <div class="col-lg-4 pt-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control form-control-sm"
                            value="{{ old('nombre') }}" required>
                        @if ($errors->has('nombre'))
                            <span class="text-danger">{{ $errors->first('nombre') }}</span>
                        @endif
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" id="precio" name="precio" class="form-control form-control-sm"
                            value="{{ old('precio') }}" required>
                        @if ($errors->has('precio'))
                            <span class="text-danger">{{ $errors->first('precio') }}</span>
                        @endif
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="dias" class="form-label">Días:</label>
                        <input type="number" id="dias" name="dias" class="form-control form-control-sm"
                            value="{{ old('dias') }}" required>
                        @if ($errors->has('dias'))
                            <span class="text-danger">{{ $errors->first('dias') }}</span>
                        @endif
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion"
                            class="ckeditor form-control form-control-sm" value="{{ old('descripcion') }}" required>
                        @if ($errors->has('descripcion'))
                            <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                        @endif
                    </div>

                    <div class="col-lg-12 pt-3">
                        <label for="contenido" class="form-label">Contenido:</label>
                        <textarea class="ckeditor form-control" name="contenido" id="contenido">{{ old('contenido') }}</textarea>
                        @if ($errors->has('contenido'))
                            <span class="text-danger">{{ $errors->first('contenido') }}</span>
                        @endif
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="resumen" class="form-label">Resumen:</label>
                        <textarea class="ckeditor form-control" name="resumen" id="resumen">{{ old('resumen') }}</textarea>
                        @if ($errors->has('resumen'))
                            <span class="text-danger">{{ $errors->first('resumen') }}</span>
                        @endif
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="detallado" class="form-label">Detalle del tour:</label>
                        <textarea class="ckeditor form-control" name="detallado" id="detallado">{{ old('detallado') }}</textarea>
                        @if ($errors->has('detallado'))
                            <span class="text-danger">{{ $errors->first('detallado') }}</span>
                        @endif
                    </div>
                    <div class="col-lg-6 pt-3">
                        <label for="incluidos" class="form-label">Incluye: <small>Solo listas</small> </label>
                        <textarea class="ckeditor form-control" name="incluidos" id="incluidos" required>{{ old('incluidos') }}</textarea>
                        @if ($errors->has('incluidos'))
                            <span class="text-danger">{{ $errors->first('incluidos') }}</span>
                        @endif
                    </div>
                    <div class="col-lg-6 pt-3">
                        <label for="importante" class="form-label">Importante: <small>Solo listas</small></label>
                        <textarea class="ckeditor form-control" name="importante" id="importante">{{ old('importante') }}</textarea>
                        @if ($errors->has('importante'))
                            <span class="text-danger">{{ $errors->first('importante') }}</span>
                        @endif
                    </div>

                    <div class="col-lg-6 pt-3">
                        <label for="img" class="form-label">Imagen: <small class="text-success">Imagen en
                                miniatura</small></label>
                        <input type="file" id="img" name="img" class="form-control form-control-sm"
                            accept="image/*" onchange="previewImage()" required>
                        @error('img')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <img id="imagePreview" src="#" 
                            style="max-width:100%; height: 200px; display:none; object-fit:cover">
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

                    <div class="col-lg-6 pt-3">
                        <label for="categoria" class="form-label">Categoría: <small class="text-success">Presionar Ctrl
                                para seleccionar más de una categoría</small></label>
                        <select name="categoria[]" id="categoria" class="form-control form-control-sm" required
                            multiple="multiple">
                            <option value="hikes"
                                {{ is_array(old('categoria')) && in_array('hikes', old('categoria')) ? 'selected' : '' }}>
                                Diarios</option>                            
                            <option value="machupicchu"
                                {{ is_array(old('categoria')) && in_array('machupicchu', old('categoria')) ? 'selected' : '' }}>
                                Tours en Cusco</option>
                                <option value="around"
                                {{ is_array(old('categoria')) && in_array('around', old('categoria')) ? 'selected' : '' }}>
                                Caminatas</option>
                            <option value="luxury"
                                {{ is_array(old('categoria')) && in_array('luxury', old('categoria')) ? 'selected' : '' }}>
                                Alrededor de Perú</option>
                        </select>
                        @error('categoria')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 pt-3">
                        <label for="ubicacion" class="form-label">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control form-control-sm"
                            value="{{ old('ubicacion') }}" required>
                        @error('ubicacion')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 pt-3">
                        <label for="clase" class="form-label">Clase:<small class="text-success">(Tomada para definir
                                img de fondo)</small></label>
                        <select name="clase" id="clase-select" class="form-control form-control-sm" required>
                            <option value="aventuras">Camino Inca Salkantay</option>
                            <option value="imperdible">Plaza de armas Cusco</option>
                            <option value="machu">Machu Picchu</option>
                            <option value="ollantaytambo">Ollantaytambo</option>
                            <option value="pachamamalodge">Vista Valle Sagrado</option>
                            <option value="valle">Vista Valle Sagrado 2</option>
                            <option value="maras">Maras Moray</option>
                            <option value="santuaryLodge">Hotel Sanctuary Lodge</option>
                            <option value="puno">Balsa en Lago Titicaca</option>
                            <option value="selva">Rio Amazonas</option>
                            <option value="caminata">Caminata Salkantay</option>
                            <option value="nazca">Lineas de Nazca</option>
                            <option value="lima">Ciudad de Lima</option>
                            <option value="arequipa">Ciudad de Arequipa</option>
                            <option value="huchuy">Huchuy Qosqo</option>
                            <option value="choque">Choquequirao</option>
                            <option value="humantay">Laguna Humantay</option>
                            <option value="vinicunca">Vinicunca</option>
                            <option value="ica">Huacachina</option>
                            <option value="pisco">Reserva Nacional Paracas</option>
                            <option value="puerto">Puerto Maldonado</option>
                            <option value="mirador-condor">Mirador del Cóndor</option>
                            <option value="valleSur">ValleSur</option>
                        </select>
                        <div id="clase-div" style="width: 100%; height:220px; object-fit:cover"></div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const selectElement = document.getElementById('clase-select');
                            const claseDiv = document.getElementById('clase-div');
                    
                            selectElement.addEventListener('change', function() {
                                // Remove all previous classes
                                claseDiv.className = '';
                                // Add the selected option value as a class
                                claseDiv.classList.add(selectElement.value);
                            });
                    
                            // Trigger change event on page load to set initial class
                            selectElement.dispatchEvent(new Event('change'));
                        });
                    </script>
                                        

                    <div class="col-lg-12 pt-3">
                        <label for="keywords" class="form-label">Keywords: <small class="text-success">(Separar cada
                                palabra/frase por una coma)</small></label>
                        <input type="text" id="keywords" name="keywords" class="form-control form-control-sm"
                            value="{{ old('keywords') }}" required>
                        @error('keywords')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="slug" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control form-control-sm"
                            value="{{ old('slug') }}" onkeydown="handleSpace(event)" required>
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
                <a href="/tours" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('.ckeditor', {
            toolbar: [
                ['Youtube']
            ]
        });
    </script>
    {{-- <script>
        new FroalaEditor('.ckeditor')
      </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@endsection
