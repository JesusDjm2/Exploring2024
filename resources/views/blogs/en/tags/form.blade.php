<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label for="nombre">Nombre del Tag:</label>
            <input type="text" name="nombre" id="nombre" class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" placeholder="Nombre" value="{{ $tag->nombre }}">
            @if ($errors->has('nombre'))
                <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="slug">slug:</label>
            <input type="text" name="slug" id="slug" class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" placeholder="Slug" readonly value="{{ $tag->slug }}">
            @if ($errors->has('slug'))
                <div class="invalid-feedback">{{ $errors->first('slug') }}</div>
            @endif
        </div>
        <script>
            const nombreInput = document.getElementById('nombre');
            const slugInput = document.getElementById('slug');
            nombreInput.addEventListener('input', () => {
                const nombreSlug = nombreInput.value.trim().replace(/\s+/g, '-');
                slugInput.value = nombreSlug;
            });
        </script>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</div>
