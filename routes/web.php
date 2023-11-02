<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Middleware\Locale;

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

Route::prefix('{lang?}')->middleware('locale')->group(function() {

    Route::get('/', function () {
        return view('index');
    });
    Route::get('/rb11', function () {
        return view('products/rb11');
    });
    Route::get('/rb7', function () {
        return view('products/rb7');
    });
    Route::get('/pf90', function () {
        return view('products/pf90');
    });
    Route::get('/pk1', function () {
        return view('products/pk1');
    });
    Route::get('/faq', function () {
        return view('subpages/faq');
    });
    
});



Route::post('/send-email', [EmailController::class, 'sendEmail']);
