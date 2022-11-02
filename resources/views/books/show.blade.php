@extends('template')

@section('title')
    Lista książek
@endsection

@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <th>Nazwa książki</th>
                <th>Rok wydania</th>
                <th>Miejsce wydania</th>
                <th>Liczba stron</th>
                <th>Cena</th>
            </tr>
            @isset($book)
                <tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->year}}</td>
                    <td>{{$book->publication_place}}</td>
                    <td>{{$book->pages}}</td>
                    <td>{{$book->price}}</td>
                </tr>
            @endisset
        </table>
    </div>
@endsection('content')
