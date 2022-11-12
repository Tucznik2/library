<?php

namespace App\Http\Controllers;

use App\Events\BookCreated;
use App\Http\Requests\StoreBook;
use App\Models\Author;
use App\Models\Book;
use App\Models\Isbn;
use App\Repositories\BookRepository;
use App\Services\OpenLibrary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BookRepository $bookRepo)
    {
        $booksList = $bookRepo->getAll();
        return view('books/list', ['booksList' => $booksList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        App::setLocale(session('locale'));
        $authors = Author::all();
        return view('books/create', ['authors' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBook $request, BookRepository $bookRepo)
    {
        $data = $request->all();
        $book = $bookRepo->create($data);
        event(new BookCreated($book));
        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(OpenLibrary $ol, BookRepository $bookRepo, $id)
    {
        $book = $bookRepo->find($id);
        $openLibraryData = $ol->search($book->name);

        return view('books/show', ['book' => $book, 'ol' => json_decode($openLibraryData)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BookRepository $bookRepo, $id)
    {
        $book = $bookRepo->find($id);
        $authors = Author::all();

        return view('books/edit', ['book' => $book, 'authors' => $authors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookRepository $bookRepo, int $id)
    {
        $data = $request->all();
        $bookRepo->update($data, $id);
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookRepository $bookRepo, $id)
    {
        $bookRepo->delete($id);
        return redirect('books');
    }

    public function cheapest(Book $book)
    {
        $booksList = DB::table('books')->orderBy('price', 'asc')->limit(3)->get();
        return view('books/list', ['booksList' => $booksList]);
    }

    public function longest(Book $book)
    {
        $booksList = DB::table('books')->orderBy('pages', 'desc')->limit(3)->get();
        return view('books/list', ['booksList' => $booksList]);
    }

    public function search(Request $request, Book $book)
    {
        $q = $request->input('q', "");
        $booksList = DB::table('books')->where('name', 'like', '%' . $q . '%')->get();
        return view('books/list', ['booksList' => $booksList]);
    }
}
