<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\Home;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/


//Route::get('/','front\Home@index');
Route::get('/', [Home::class, 'index']);
Route::get('/about', [Home::class, 'about']);
Route::get('/services', [Home::class, 'services']);
Route::get('/projects', [Home::class, 'projects']);
Route::get('/features', [Home::class, 'features']);
Route::get('/team', [Home::class, 'team']);
Route::get('/testimonial', [Home::class, 'testimonial']);
Route::get('/p404', [Home::class, 'p404']);
Route::get('/contact', [Home::class, 'contact']);
Route::get('/termsandconditions', [Home::class, 'termsandconditions']);
Route::get('/support', [Home::class, 'support']);
Route::post('sendmail', [Home::class, 'sendmail']);
