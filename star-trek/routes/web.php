<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;

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

//Add {any?} as an optional wildcard so it responds to any route where any is literally anything
Route::get('/{any?}', function () {
    return view('app');
})->where('any', '.*');

//Routes for Contact Form
Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/', [ContactUsFormController::class, 'createForm']);
Route::post('/', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/resume', [ContactUsFormController::class, 'createForm']);
Route::post('/resume', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

