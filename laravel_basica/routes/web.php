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
// ROUTEUR HOME
Route::get('/', function () {
    return view('home.index');
})->name('home');

 // ROUTEUR CONTACTS
Route::get('/contacts', function () {
    return view('contacts.index');
})->name('contacts.index');




// ROUTEUR POSTS
Route::prefix('/posts')->name('posts.')->group(function () {
    require __DIR__ . '/posts.php';
}); 
// ROUTEUR WORKS
Route::prefix('/works')->name('works.')->group(function () {
    require __DIR__ . '/works.php';
});


// Route::group(['middleware' => 'ajax', 'prefix' => 'ajax', 'as' => 'ajax.'], function () {
//     require __DIR__ . '/ajax.php';
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
