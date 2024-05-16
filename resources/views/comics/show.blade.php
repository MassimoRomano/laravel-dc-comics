@extends('layouts.app')

@section('content')
    <div class="">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <img width="400px" src="{{ $comic->thumb }}" alt="">
                </div>
                <div class="col align-content-center">
                    <div class="card border-0 ">
                        <h4 class="text-uppercase text-center"><strong>{{ $comic->title }}</strong></h4>
                        <p>{{ $comic->description }}</p>
                        <h5>Price: <strong>{{$comic->price}}</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
