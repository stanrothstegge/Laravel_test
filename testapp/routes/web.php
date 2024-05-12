<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use Carbon\Carbon;
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
    return view('welcome');
});

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs_per_month', [BlogController::class, 'blogsPerMonth']);
Route::post('/blog', [BlogController::class, 'createBlogPost']);