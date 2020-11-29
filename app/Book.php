<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function index() // mengambil semua data
    {
        $book = Book::all();
        return $book;
    }

    public function show($id) // mengambil salah satu data dengan param id
    {
        $book = Book::find($id);
        return $book;
    }

    public function store(Request $request, $id) // menyimpan data baru
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publication = $request->publication;
        $book->year = $request->year;
        $book->update();

        return $book;
    }

    public function remove($id)
    {
        $book = Book::find($id);
        $book->delete();

        return "book with id " . $id . " deleted";
    }



}
