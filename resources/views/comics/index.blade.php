@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Comics</h2>
            <a class="btn btn-primary" href="{{ route('comics.create') }}"> Add new comic </a>
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
                        <th scope="col">Modifica</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="text-center">
                            <td scope="row">{{ $comic->id }}</td>
                            <td><a class="text-decoration-none" href="{{ route('comics.show', $comic) }}"><img
                                        width="60" src="{{ $comic->thumb }}" alt=""></a></td>
                            <td><a class="text-decoration-none"
                                    href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a></td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('comics.show', $comic) }}"><i
                                        class="fas fa-eye fa-sm fa-fw"></i></a>
                                <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}"> <i
                                        class="fas fa-pencil-alt fa-sm fa-fw"></i></a>
                            </td>

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

        {{ $comics->links('pagination::bootstrap-5') }}
    </div>
@endsection
