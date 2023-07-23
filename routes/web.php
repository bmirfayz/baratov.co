<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/aboutus', [PublicController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [PublicController::class, 'contactus'])->name('contactus');
Route::get('/portfolio', [PublicController::class, 'portfolio'])->name('portfolio');
Route::get('/blogs', [PublicController::class, 'blogs'])->name('blogs');
Route::get('/blog/id', [PublicController::class, 'blog'])->name('blog');
