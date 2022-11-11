@extends('template')
@section('title')
    Edytuj książkę
@endsection

@section('content')
    <div class="container">
        <h2>Edycja książki</h2>
        <form action="{{route('books.update', $book->id)}}" method="POST" role="form">
            @method("PUT")
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="form-group mb-2">
                <label for="author_id[]">Autor</label>
                <select name="author_id[]" class="form-control" multiple>
                    @foreach($authors as $author)
                        @if(in_array($author->id, $book->authors->pluck('id')->toArray()))
                            <option value="{{$author->id}}"
                                    selected>{{$author->lastname}} {{$author->firstname}}</option>
                        @else
                            <option value="{{$author->id}}">{{$author->lastname}} {{$author->firstname}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="book_id" value="{{$book->id}}"/>
            <div class="form-group mb-2">
                <label for="name">Tytuł książki</label>
                <input type="text" class="form-control" name="name" value="{{$book->name}}"/>
            </div>
            <div class="form-group mb-2">
                <label for="year">Rok publikacji</label>
                <input type="text" class="form-control" name="year" value="{{$book->year}}"/>
            </div>
            <div class="form-group mb-2">
                <label for="publication_place">Miejsce wydania</label>
                <input type="text" class="form-control" name="publication_place" value="{{$book->publication_place}}"/>
            </div>
            <div class="form-group mb-2">
                <label for="pages">Liczba stron</label>
                <input type="text" class="form-control" name="pages" value="{{$book->pages}}"/>
            </div>
            <div class="form-group mb-2">
                <label for="price">Cena</label>
                <input type="text" class="form-control" name="price" value="{{$book->price}}"/>
            </div>
            <input type="submit" value="Aktualizuj" class="btn btn-primary"/>
        </form>
    </div>
@endsection
