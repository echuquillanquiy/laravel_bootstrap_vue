

        @csrf
        <div class="form-group">
            <label for="title">Título</label>
        <input class="form-control" name="title" id="title" value="{{ old('title', $category->title) }}">

            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="url_clean">Url limpia</label>
            <input class="form-control" name="url_clean" id="url_clean" value="{{ old('url_clean', $category->url_clean) }}">
        </div>
    
        <input class="btn btn-primary" type="submit" value="Enviar">

