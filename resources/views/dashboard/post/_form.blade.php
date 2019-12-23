

        @csrf
        <div class="form-group">
            <label for="title">Título</label>
        <input class="form-control" name="title" id="title" value="{{ old('title', $post->title) }}">

            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="url_clean">Url limpia</label>
            <input class="form-control" name="url_clean" id="url_clean" value="{{ old('url_clean', $post->url_clean) }}">
        </div>
    
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea class="form-control" name="content" id="content" rows="3">{{ old('content', $post->content) }}</textarea>
        </div>
    
        <input class="btn btn-primary" type="submit" value="Enviar">

