<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

// Route::get('/main', function(){
//     return 'Home';
// })->name('home');

// Route::get('/about', function(){
//     // return 'About Us';
//     // return route('home');
//     return route('home');
// });

// Route::get('/users/{name?}', function($name = null){
//     return 'Welcome ' . $name;
// });

// Route::prefix('admin')->group(function(){
//     Route::get('/users', function() {});
//     Route::get('/products', function() {});
//     Route::get('/dasboard', function() {});
// });


Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/services', [SiteController::class, 'services'])->name('services');

