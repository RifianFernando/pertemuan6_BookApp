<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController 
{
    function home()
    {
        $books = Book::all();
        // $test = 'test';
        // dd($books);
        // var_dump($books);

        #cara pertama
        // return view('welcome', [
        //     $books
        // ]);

        #cara kedua
        return view('welcome',[
            'books'=> $books
        ]);
    }

    function createViewPage()
    {

        return view('create');
    }

    function createBook(Request $request){
        Book::create([
            'title' =>$request->title,
            'stock' =>$request->stock,
            'writer' =>$request->writer
        ]);

        return redirect(route('home'));
    }
}
