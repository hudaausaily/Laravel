<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
Route::get('/about', function () {
    return view('about');
});
Route ::get ('/product',[UserController::class,'show']);

Route::get('/page1', function () {
    return view('page1');
});
Route::get('/page2', function () {
    return view('page2');
});
Route::get('/page3', function () {
    return view('page3');
});