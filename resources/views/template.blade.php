<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System obsługi @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-md bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{URL::to('books')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Książki
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{URL::to('books')}}">Wszystkie książki</a></li>
                            <li><a class="dropdown-item" href="{{URL::to('books/cheapest')}}">Top 3 najtańszych</a></li>
                            <li><a class="dropdown-item" href="{{URL::to('books/longest')}}">Top 3 najdłuższych</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" aria-current="page" >
                        <a class="nav-link" href="{{URL::to('loans')}}">Wypożyczenia</a>
                    </li>
                    <li class="nav-item" aria-current="page" >
                        <a class="nav-link" href="{{URL::to('authors')}}">Autorzy</a>
                    </li>
                    <li class="nav-item" aria-current="page" >
                        <a class="nav-link" href="{{URL::to('books/create')}}">Dodaj książke</a>
                    </li>
                    <li class="nav-item" aria-current="page" >
                        <a class="nav-link" href="{{URL::to('authors/create')}}">Dodaj autora</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>
