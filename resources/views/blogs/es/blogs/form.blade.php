<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre', $blog->nombre) }}"
                class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" placeholder="Nombre">
            @if ($errors->has('nombre'))
                <div class="invalid-feedback">
                    {{ $errors->first('nombre') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" value="{{ old('descripcion', $blog->descripcion) }}"
                class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" placeholder="Descripcion"
                maxlength="105">
            @if ($errors->has('descripcion'))
                <div class="invalid-feedback">
                    {{ $errors->first('descripcion') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="cuerpo">Cuerpo</label>
            <textarea name="cuerpo" class="ckeditor form-control {{ $errors->has('cuerpo') ? 'is-invalid' : '' }}"
                placeholder="Cuerpo">{{ old('cuerpo', $blog->cuerpo) }}</textarea>
            @if ($errors->has('cuerpo'))
                <div class="invalid-feedback">
                    {{ $errors->first('cuerpo') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="img">Imagen</label>
            <input type="file" name="img" class="form-control {{ $errors->has('img') ? 'is-invalid' : '' }}">
            @if ($blog->img)
                <img src="{{ asset($blog->img) }}" alt="Imagen del blog" style="width: 100px">
            @endif
            @if ($errors->has('img'))
                <div class="invalid-feedback">
                    {{ $errors->first('img') }}
                </div>
            @endif
        </div>


        <div class="form-group">
            <label for="keywords">Keywords</label>
            <input type="text" name="keywords" value="{{ old('keywords', $blog->keywords) }}"
                class="form-control {{ $errors->has('keywords') ? 'is-invalid' : '' }}" placeholder="Keywords">
            @if ($errors->has('keywords'))
                <div class="invalid-feedback">
                    {{ $errors->first('keywords') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="tags">Tags:</label>
            <br>
            @foreach ($tags as $id => $tag)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="tags[]" value="{{ $id }}" class="form-check-input"
                        {{ in_array($id, old('tags', $blog->tags->pluck('id')->toArray())) ? 'checked' : '' }}>
                    <label class="form-check-label" for="tag_{{ $id }}">{{ $tag }}</label>
                </div>
                {{-- <div class="form-check form-check-inline">
                    <input type="checkbox" name="tags[]" value="{{ $id }}" class="form-check-input"
                        {{ in_array($id, $blog->tags->pluck('id')->toArray()) ? 'checked' : '' }}>
                    <label class="form-check-label" for="tag_{{ $id }}">{{ $tag }}</label>
                </div> --}}
            @endforeach
            @if ($errors->has('tags'))
                <div class="invalid-feedback">
                    {{ $errors->first('tags') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}"
                value="{{ old('slug', $blog->slug) }}" placeholder="Slug" onkeyup="replaceSpaces(this)">
            {!! $errors->first('slug', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <script>
            function replaceSpaces(input) {
                var value = input.value;
                var replaced = value.replace(/ /g, '-').replace(/[-]{2,}/g, '-');
                input.value = replaced;
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
