<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;


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


// Route::get('/', function () {
//     return Inertia::render('index');
// });
Route::get('/', [IndexController::class, 'index']);
Route::get('/about', function () {
    return Inertia::render('about');
});
// Route::get('/blog', function () {
//     return Inertia::render('blog');
// })->name('blog');
Route::get('/contact', function () {
    return Inertia::render('contact');
});

Route::get('/post_page', function () {
    return Inertia::render('post_page');
})->name('post_page');

Route::resource('blogs',BlogController::class, [
    'names' => [
        'index' => 'blogs.index',
        'store' => 'blogs.store',
        // 'detail' => 'blogs.show'
    ]
]);

Route::resource('contact',ContactController::class);