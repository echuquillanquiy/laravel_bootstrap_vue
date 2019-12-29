@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input readonly class="form-control" name="title" id="title" value="{{$post->title}}">

                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="url_clean">Url limpia</label>
                <input readonly class="form-control" name="url_clean" id="url_clean" value="{{$post->url_clean}}">
            </div>
        
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea readonly class="form-control" name="content" id="content" rows="3">{{$post->content}}</textarea>
        </div>
    </form>
@endsection