@extends('layouts.app')

@section('content')
    <div class="">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <img src="{{ $comic->thumb }}" alt="">
                </div>
                <div class="col align-content-center">
                    <div class="card border-0 ">
                        <p class="text-uppercase"><strong>{{ $comic->title }}</strong></p>
                        <p>{{ $comic->description }}</p>
                        <p><strong>{{$comic->price}}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
