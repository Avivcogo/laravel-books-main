<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('books/latest', function (){
    return view('books.latest');
})->middleware('auth');

Route::get('book/{book_id}', [BookController::class, 'show']);

Route::resource('authors', AuthorController::class);

Route::get('/books/latest', function () {
    $user = auth()->user();
    // dd($user);
    return 'hello' . $user->name;
    return view('books.latest');
});



// Route::get('/books/latest', function () {
//     return view('books.latest');
// });
Route::resource('books', BookController::class);

Route::redirect('/home', '/'); // temporary solution

