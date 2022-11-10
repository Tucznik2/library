@extends('template')
@section('title')
    Dodaj wypożyczenie
@endsection

@section('content')
    <div class="container">
        <h2>Dodawanie wypożyczeń</h2>
        <form action="/loans" method="POST" role="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="form-group mb-2">
                <label for="book_id">Tytuł książki</label>
                <select name="book_id" class="form-control">
                    @foreach($books as $book)
                        <option value="{{$book->id}}">{{$book->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="client">Dane wypożyczającego</label>
                <input type="text" class="form-control" name="client"/>
            </div>
            <div class="form-group mb-2">
                <label for="loaned_on">Data wypożyczenia</label>
                <input type="text" class="form-control" name="loaned_on"/>
            </div>
            <div class="form-group mb-2">
                <label for="estimated_on">Przewidywany zwrot</label>
                <input type="text" class="form-control" name="estimated_on"/>
            </div>
            <input type="submit" value="Dodaj" class="btn btn-primary"/>
        </form>
    </div>
@endsection
