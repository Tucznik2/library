@extends('template')
@section('title')
    Dodaj autora
@endsection

@section('content')
    <div class="container">
        <h2>Dodawanie autorów</h2>
        <form action="{{action('AuthorController@store')}}" method="POST" role="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="form-group">
                <label for="lastname">Nazwisko</label>
                <input type="text" class="form-control" name="lastname"/>
            </div>
            <div class="form-group">
                <label for="firstname">Imię</label>
                <input type="text" class="form-control" name="firstname"/>
            </div><div class="form-group">
                <label for="birthday">Data urodzenia</label>
                <input type="text" class="form-control" name="birthday"/>
            </div>
            <div class="form-group">
                <label for="genres">Gatunki</label>
                <input type="text" class="form-control" name="genres"/>
            </div>
            <input type="submit" value="Dodaj" class="btn btn-primary"/>
        </form>
    </div>
@endsection
