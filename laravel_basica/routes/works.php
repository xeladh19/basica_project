<?php

use Illuminate\Support\Facades\Route;


// PATTERN: works
// ALIAS: works.index
Route::get('', function () {
  return view('works.index');
})->name('index');


// PATTERN: works/{work}/{slug}
// ALIAS: works.show
Route::get('/{work}/{slug}', [\App\Http\Controllers\WorksController::class, 
'show'])
->name('show');
