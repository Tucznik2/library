@extends('template')
@section('title')
    Dodaj książke
@endsection

@section('content')
    <div class="container">
        <h2>Dodawanie książek</h2>
        <form action="{{route('books.store')}}" method="POST" role="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="form-group mb-2">
                <label for="name">Tytuł książki</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group mb-2">
                <label for="year">Rok publikacji</label>
                <input type="text" class="form-control" name="year"/>
            </div>
            <div class="form-group mb-2">
                <label for="publication_place">Miejsce wydania</label>
                <input type="text" class="form-control" name="publication_place"/>
            </div>
            <div class="form-group mb-2">
                <label for="author_id[]">Autor</label>
                <select name="author_id[]" class="form-control" multiple>
                    @foreach($authors as $author)
                        <option value="{{$author->id}}">{{$author->lastname}} {{$author->firstname}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="pages">Liczba stron</label>
                <input type="text" class="form-control" name="pages"/>
            </div>
            <div class="form-group mb-2">
                <label for="price">Cena</label>
                <input type="text" class="form-control" name="price"/>
            </div>
            <input type="submit" value="Dodaj" class="btn btn-primary"/>
        </form>
    </div>
@endsection
