<?php

namespace App\Http\Controllers;
use App\Books;
use DB;
use Illuminate\Http\Request;

//use Request;


class BooksController extends Controller
{
  public function booksForm(){
    return view('books.booksform');
  }
  public function indexBooks(){
    $books = DB::table('books')->get()->all();
    return view('books.showbooks', compact('books'));

  }
  public function showBooks(){

  }
  public function store(Request $request){
    $validData = $request->validate([ 'title' => 'unique:books',
    'title' => 'required',
    'year'  => 'required',
    'author'  => 'required',
    'publisher'  => 'required',
    'price'  => 'required',
    'review'  => 'required'
    ]);

    $input = $request->all();
    Books::create($input);
    return redirect('books/list');

  }
  public function delete($id){
    $book = Books::find($id);
    $book->delete();
    return $book;
  }

  public function edit(Books $book){
    return view('books.update',compact('book'));
  }

  public function update(Request $request, Book $book){
    $book->update($request->all());
    return redirect('book');
  }
}
