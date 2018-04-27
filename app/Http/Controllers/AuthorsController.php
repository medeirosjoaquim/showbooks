<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Authors;
use App\Books;
class AuthorsController extends Controller
{
	public function listBooks(Authors $author, Books $book){
		$author = Authors::all();
		return view('authors.list', compact('author'));
	}
	public function form(){
		return view('authors.add');
	}
	public function add(Request $request){
		$input = $request->all();
		Authors::create($input);
		return redirect('authors');
	}
	public function edit(Authors $author){
		return view('authors.update',compact('author'));
	}
	public function update(Request $request, Authors $author){
		$author->update($request->all());
		return redirect('authors');
	}
}
