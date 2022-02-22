<?php

use App\Http\Controllers\ContactsController;
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

Route::get('/contacts', [ContactsController::class, 'index'])->name('contact.index');
Route::get('/contacts/create', [ContactsController::class, 'create'])->name('contact.create');
Route::post('/contacts', [ContactsController::class, 'store'])->name('contact.store');
Route::get('/contacts/{contact}/edit', [ContactsController::class, 'edit'])->name('contact.edit');
Route::patch('/contacts/{contact}/update', [ContactsController::class, 'update'])->name('contact.update');
Route::delete('/contacts/{contact}', [ContactsController::class, 'destroy'])->name('contact.destroy');
