@extends('template')
@section('title')
    Dodaj książke
@endsection

@section('content')
    <div class="container">
        <h2>{{__('forms.new_book')}}</h2>
        <form action="{{route('books.store')}}" method="POST" role="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="form-group mb-2">
                <label for="name">{{__('forms.book_title')}}</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group mb-2">
                <label for="year">{{__('forms.publication_year')}}</label>
                <input type="text" class="form-control" name="year"/>
            </div>
            <div class="form-group mb-2">
                <label for="publication_place">{{__('forms.publication_place')}}</label>
                <input type="text" class="form-control" name="publication_place"/>
            </div>
            <div class="form-group mb-2">
                <label for="author_id[]">{{__('forms.author')}}</label>
                <select name="author_id[]" class="form-control" multiple>
                    @foreach($authors as $author)
                        <option value="{{$author->id}}">{{$author->lastname}} {{$author->firstname}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="pages">{{__('forms.pages')}}</label>
                <input type="text" class="form-control" name="pages"/>
            </div>
            <div class="form-group mb-2">
                <label for="price">{{__('forms.price')}}</label>
                <input type="text" class="form-control" name="price"/>
            </div>
            <input type="submit" value="{{__('forms.add')}}" class="btn btn-primary"/>
        </form>
    </div>
@endsection
