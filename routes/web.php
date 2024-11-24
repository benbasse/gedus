<?php

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
    return view('layout.app');
})->name('home');


Route::get('/accueil', function () {
    return view('pages.accueil');
});
Route::get('/apropos', function () {
    return view('pages.apropos');
});
Route::get('/galerie', function () {
    return view('pages.galerie');
});
Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('/membres', function () {
    return view('pages.membres');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
