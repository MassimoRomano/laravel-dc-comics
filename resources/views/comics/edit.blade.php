@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Add new comics</h1>

    @include('partials.validate-errors')

    <form action="{{ route('comics.update', $comic) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="titleHelper"
                placeholder="New comic" value="{{old('title', $comic->title)}}" required />
            <small id="titleHelper" class="form-text text-muted">Type a title for the current comic</small>

            @error('title')
                <div class="text-damange">{{$message}}</div>                
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror"" name="thumb" id="thumb" aria-describedby="thumbHelper"
                placeholder="http//" value="{{old('thumb', $comic->thumb)}}"/>
            <small id="thumbHelper" class="form-text text-muted">Type the URL of the Image for the current comic</small>

            @error('thumb')
                <div class="text-damange">{{$message}}</div>                
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror"" name="price" id="price" aria-describedby="priceHelper"
                placeholder="$00.00" value="{{old('price', $comic->price)}}" required/>
            <small id="priceHelper" class="form-text text-muted">Type the price for the current comic</small>

            @error('price')
                <div class="text-damange">{{$message}}</div>                
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror"" name="series" id="series" aria-describedby="seriesHelper"
                placeholder="Name of Comic" value="{{old('series', $comic->series)}}"/>
            <small id="seriesHelper" class="form-text text-muted">Type the series for the current comic</small>

            @error('series')
                <div class="text-damange">{{$message}}</div>                
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror"" name="type" id="type" aria-describedby="typeHelper"
                placeholder="Type of your comic" value="{{old('type', $comic->type)}}"/>
            <small id="typeHelper" class="form-text text-muted">Type the type for the current comic</small>

            @error('type')
                <div class="text-damange">{{$message}}</div>                
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror"" name="description" id="description" rows="3" value="{{old('description', $comic->description)}}"></textarea>

            @error('description')
                <div class="text-damange">{{$message}}</div>                
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>


    </form>
</div>
    
@endsection
    
