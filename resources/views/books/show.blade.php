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
                @isset($book->isbn)
                    <tr>
                        <th>Numer ISBN</th>
                        <td>{{$book->isbn->number}}</td>
                    </tr>
                    <tr>
                        <th>Numer wydany przez</th>
                        <td>{{$book->isbn->issued_by}}</td>
                    </tr>
                    <tr>
                        <th>Data wydania numeru ISBN</th>
                        <td>{{$book->isbn->issued_on}}</td>
                    </tr>
                @endisset
                @isset($book->authors)
                    <tr>
                        <th>Autorzy</th>
                        <td>
                            <ul>
                                @foreach($book->authors as $author)
                                    <li>{{$author->lastname}} {{$author->firstname}}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endisset
            @endisset
        </table>
    </div>
@endsection('content')
