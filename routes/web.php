<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// first page
Route::get('/', function () { return view('welcome');});

// Books routes
Route::get('books/add', 'BooksController@booksForm');
Route::get('books/list', 'BooksController@indexBooks');
Route::post('books/add','BooksController@store');
Route::get('books/delete/{id}', 'BooksController@delete');
Route::get('books/edit/{books}', 'BooksController@edit');
Route::patch('authors/update/{books}', 'BooksController@update');

//Authors routes
Route::get('authors', 'AuthorsController@listBooks');
Route::get('authors/add', 'AuthorsController@form');
Route::post('authors/add', 'AuthorsController@add');
Route::get('authors/edit/{author}', 'AuthorsController@edit');
Route::patch('authors/update/{author}', 'AuthorsController@update');
