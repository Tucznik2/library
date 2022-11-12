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
        <h2>Znalezione pozycje z Open Library</h2>
        @isset($ol)
            <table class="table">
                @foreach($ol->docs as $doc)
                    <tr>
                        <th>Tytuł</th>
                        <td>{{$doc->title}}</td>
                    </tr>
                    @isset($doc->author_name)
                        <tr>
                            <th>Autor</th>
                            <td>{{$doc->author_name[0]}}</td>
                        </tr>
                    @endisset
                    @isset($doc->first_publish_year)
                        <tr>
                            <th>Data pierwszego wydania</th>
                            <td>{{$doc->first_publish_year}}</td>
                        </tr>
                    @endisset
                    @isset($doc->publisher)
                        <tr>
                            <th>Wydawca</th>
                            <td>{{$doc->publisher[0]}}</td>
                        </tr>
                    @endisset
                    <tr>
                        <td colspan="2" style="background-color: lightgray"></td>
                    </tr>
                @endforeach
            </table>
        @endisset
    </div>
@endsection('content')
