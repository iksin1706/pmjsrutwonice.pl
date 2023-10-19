<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

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
    return view('index');
});
Route::get('/rb11', function () {
    return view('rb11');
});
Route::get('/rb7', function () {
    return view('rb7');
});
Route::get('/pk1', function () {
    return view('pk1');
});
Route::get('pf90', function () {
    return view('pf90');
});
Route::get('faq', function () {
    return view('faq');
});
Route::post('/send-email', [EmailController::class, 'sendEmail']);
