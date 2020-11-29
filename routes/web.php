<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/books', function() {
//     return "Router ini nantinya akan digunakan untuk mengambil data buku";
// });

// Route::post('/books', function() {
//     return "Router ini nantinya akan digunakan untuk mencipatakan data buku yang baru";   
// });

// Route::put('/books', function(){
//     return "Router ini nantinya akan digunakan untuk mengubah data buku";
// });

// Route::get('/books/{id}', function($id) {
//     return "Router ini nantinya akan digunakan untuk mengambil data buku dengan id = ".$id ;
// });

// Route::put('/books/{id}', function($id){
//     return "Router ini nantinya akan digunakan untuk mengubah data buku dengan id=".$id;
// });

// Route::delete('/books/{id}', function($id){
//     return "Router ini nantinya akan digunakan untuk menghapus data buku dengan id=".$id;
// });

Route::get('/books/add', 'BookController@create');

Route::get('/books','BookController@index');

Route::post('/books', 'BookController@store');

Route::get('/books/{id}', 'BookController@show');

Route::put('/books/{id}', 'BookController@update');

Route::delete('/books/{id}', 'BookController@destroy');

Route::get('/books/edit/{id}', 'BookController@edit');