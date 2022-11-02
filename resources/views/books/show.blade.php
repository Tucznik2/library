@extends('template')

@section('title')
    Lista książek
@endsection

@section('content')
    <div class="container">
        <table class="table">
            @isset($book)
                <tr>
                    <th>Nazwa książki</th>
                    <td>{{$book->name}}</td>
                </tr>
                <tr>
                    <th>Rok wydania</th>
                    <td>{{$book->year}}</td>
                </tr>
                <tr>
                    <th>Miejsce wydania</th>
                    <td>{{$book->publication_place}}</td>
                </tr>
                <tr>
                    <th>Liczba stron</th>
                    <td>{{$book->pages}}</td>
                </tr>
                <tr>
                    <th>Cena</th>
                    <td>{{$book->price}}</td>
                </tr>
            @endisset
        </table>
    </div>
@endsection('content')
