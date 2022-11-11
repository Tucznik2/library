@extends('template')

@section('title')
    Lista książek
@endsection

@section('content')
    <div class="container">
        <table class="table">
            @forelse($booksList as $book)
                <tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->year}}</td>
                    <td>{{$book->publication_place}}</td>
                    <td>{{$book->pages}}</td>
                    <td>{{$book->price}}</td>
                    <td><a href="{{route('books.show', $book->id)}}}">Podgląd</a></td>
                    <td><a href="{{route('books.edit', $book->id)}}">Edycja</a></td>
                    <td>
                        <form action="{{route('books.destroy', $book->id)}}" method="POST">
                            @method("DELETE")
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <input type="submit" value="Usuń"/>
                        </form>
                    </td>
                </tr>
            @empty
                Brak rekordów!
            @endforelse
        </table>
    </div>
@endsection('content')
