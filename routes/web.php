<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcome;

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



Route::get('/', [welcome::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
