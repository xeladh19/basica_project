<?php 
use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\PostsController::class,
 'index'])
 ->name('index');

Route::get('/{post}/{slug}',[\App\Http\Controllers\PostsController::class, 
'show'])
->name('show');