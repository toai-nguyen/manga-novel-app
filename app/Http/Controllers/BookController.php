<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Book;

class BookController extends Controller
{
    public function create(){
        return view('book.create');
    }

    // API method 
    //Create and add to database
    public function store(Request $request){
        Book::create($request->all());
        return redirect()->route('book.index');
    }
    //List all item
    public function index() {
        // $book  = new Book();
        $books = Book::all();
        return view('book.index',compact('books'));
    }
    //List one (sort by id)
    public function show($id){
        $book = Book::find($id);
        return view('book.show', compact('book'));
    }
    // get edit form 
    public function edit($id){
        $book = Book::find($id);
        return view('book.edit', compact('book'));
    }
    //Edit
    public function update(Request $request,$id){
        Book::find($id)->update($request->all());
        return redirect()->route('book.index');
    }
    //Delete
    public function destroy($id){
        Book::find($id)->delete();
        return redirect()->route('book.index');
    }
}
        
        // $validateData = $request->validate([
        //     'bookTitle'=>'required',
        //     'bookAuthor'=>'required',
        //     'bookDescription'=>'required',
        //     'bookPrice'=>'required',
        // ]);
        // $book = new Book();
        // $book->bookTitle = $validateData['bookTitle'];
        // $book->bookAuthor = $validateData['bookAuthor'];
        // $book->bookDescription = $validateData['bookDescription'];
        // $book->bookPrice = $validateData['bookPrice'];
        // $book->save();

        // return response()->json(['message'=>'Course create success', 'course'=>$book], 201);
