<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    //
    public function createBook(Request $request){
        Book::create([
            'title' => $request->booktitle,
            'author' => $request->bookauthor,
            'page' => $request->bookpage,
            'release' => $request->bookrelease,
        ]);
        return redirect('/view-catalogue');
}

    public function readBook(Request $request){
        $books = Book::all();
        return view('view-catalogue', compact('books'));
}
    public function editBook(Request $request){
        $books = Book::all();
        return view('edit-catalogue', compact('books'));
    }
    public function updateBook($id){
        $book = Book::findOrFail($id);
        return view('update-book', compact('book'));
    }
    public function updatingBook(Request $request, $id){
        Book::findorFail($id)->update([
            'title' => $request->booktitle,
            'author' => $request->bookauthor,
            'page' => $request->bookpage,
            'release' => $request->bookrelease,
        ]);
        return redirect('/edit-catalogue');
    }
    public function deleteBook($id){
        Book::destroy($id);

        return back();
    }
}
