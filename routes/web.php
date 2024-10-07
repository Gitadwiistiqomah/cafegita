<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view ('welcome');
// });

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin', //admin/tamu
    'as' => 'admin.' 
], function() {
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get ('/items', [App\Http\Controllers\ItemsController::class, 'index'])->name ('items.index') ;
Route::get ('/items/create', [App\Http\Controllers\ItemsController::class, 'create'])->name('items.create') ;
Route::post ('/items', [App\Http\Controllers\ItemsController::class, 'store'])->name('items.store') ;
Route::get ('/items/edit{id}', [App\Http\Controllers\ItemsController::class, 'edit'])->name('items.edit') ;
Route::put ('/items/{id}', [App\Http\Controllers\ItemsController::class, 'update'])->name('items.update') ;
Route::delete ('/items/{id}', [App\Http\Controllers\ItemsController::class, 'destroy'])->name('items.destroy') ;
Route::get ('/items/{id}', [App\Http\Controllers\ItemsController::class, 'show'])->name('items.show') ;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});