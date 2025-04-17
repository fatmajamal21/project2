<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EasyFolioFolder\EasyFolioController;

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

Route::prefix('EasyFolio')->name('EasyFolio.')->controller(EasyFolioController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/Forms/contact', 'contact')->name('contact');
});















// Route::get('/', function () {
//     return view('EasyFolio/master');
// });
// Route::get('/', function () {
//     return view('EasyFolio/home');
// });
// Route::get('/', function () {
//     return view('EasyFolio/about');
// });
// Route::get('/', function () {
//     return view('EasyFolio/services');
// });
// Route::get('/', function () {
//     return view('EasyFolio/forms/contact');
// });
