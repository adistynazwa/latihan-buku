<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;


Route::resource('buku',BukuController::class);

Route::get('/', [BukuController::class, 'index'])-> name('buku');

Route::get('/add', [BukuController::class, 'add'])-> name('add');

Route::post('/insertdata', [BukuController::class, 'insertdata'])-> name('insertdata');

Route::get('/tampilkandata/{id}', [BukuController::class, 'tampilkandata'])-> name('tampilkandata');

Route::post('/update/{id}', [BukuController::class, 'update'])-> name('update');

Route::get('/delete/{id}', [BukuController::class, 'delete'])-> name('delete');

Route::get('/detail/{id}', [BukuController::class, 'detail'])-> name('detail');

// Route::get('add', function () {
//     return view('add');
// });

