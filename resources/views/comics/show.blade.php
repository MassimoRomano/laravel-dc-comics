@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <div class="col">
                <div class="card">
                    <p>{{ $comic->id }}</p>
                    <p>{{ $comic->title }}</p>
                    <p>{{ $comic->description }}</p>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection