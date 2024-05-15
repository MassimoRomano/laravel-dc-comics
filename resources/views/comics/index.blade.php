@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Comics</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Title</th>
                        <th scope="col">Type</th>
                        <th scope="col">Series</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sale_date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        
                        <tr class="text-center">
                            <td scope="row">{{ $comic->id }}</td>
                            <td><a class="text-decoration-none" href="{{route('comics.show', $comic)}}"><img width="60" src="{{ $comic->thumb }}" alt=""></a></td>
                            <td><a class="text-decoration-none" href="{{route('comics.show', $comic)}}">{{ $comic->title }}</a></td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->sale_date }}</td>
                        </tr>
                    @empty
                        <tr class="">
                            <td scope="row" colspan="7">Nothing to show</td>
                            <td>Item</td>
                            <td>Item</td>
                        </tr>
                        
                    @endforelse
                </tbody>
            </table>
        </div>


    </div>
@endsection
