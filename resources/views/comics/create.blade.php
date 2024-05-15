@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Add new comics</h1>
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                placeholder="New comic" />
            <small id="titleHelper" class="form-text text-muted">Type a title for the current comic</small>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                placeholder="http//" />
            <small id="thumbHelper" class="form-text text-muted">Type the URL of the Image for the current comic</small>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                placeholder="$00.00" />
            <small id="priceHelper" class="form-text text-muted">Type the price for the current comic</small>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                placeholder="Name of Comic" />
            <small id="seriesHelper" class="form-text text-muted">Type the series for the current comic</small>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                placeholder="Type of your comic" />
            <small id="typeHelper" class="form-text text-muted">Type the type for the current comic</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Create
        </button>


    </form>
</div>
    
@endsection