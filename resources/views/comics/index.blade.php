{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
<div class="container my-5">
    <table>
        <tr>
            {{-- <th scope="col">id</th> --}}
            <th scope="col">Thumbnail</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Type</th>
        </tr>
        @foreach ($comics as $comic)
            <tr>
                {{-- <td scope="col">{{$comic->id}}</td> --}}
                <td scope="col"><img class="thumb" src="{{$comic->thumb}}" alt="{{$comic->title}} img"></td>
                <td scope="col">{{$comic->title}}</td>
                <td scope="col">{{$comic->description}}</td>
                <td scope="col">{{$comic->price}}</td>
                <td scope="col">{{$comic->series}}</td>
                <td scope="col">{{$comic->sale_date}}</td>
                <td scope="col">{{$comic->type}}</td>
            </tr>
        @endforeach
    </table>
</div>

@endsection
