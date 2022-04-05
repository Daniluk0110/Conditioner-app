<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/products', function () {
   return view();
});

Route::get('/products/{id}/detail', function () {
   return view();
});

Route::get('/prices', function () {
   return view();
});

Route::get('/about', function () {
   return view();
});

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resources([
        '/products' => \App\Models\Product::class,
        '/companies' => \App\Models\Company::class,
        '/properties' => \App\Models\Property::class,
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
