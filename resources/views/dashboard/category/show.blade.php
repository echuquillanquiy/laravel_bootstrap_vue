@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input readonly class="form-control" name="title" id="title" value="{{$category->title}}">

                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="url_clean">Url limpia</label>
                <input readonly class="form-control" name="url_clean" id="url_clean" value="{{$category->url_clean}}">
            </div>

    </form>
@endsection