<?php

use App\Http\Controllers\Admin\CompanyAdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\PropertyAdminController;
use App\Http\Controllers\ProductController;
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
    return view('website.home');
});
Route::get('/prices', function () {
    return view('website.prices');
});
Route::get('/about', function () {
    return view('website.about');
});
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product}', [ProductController::class, 'show']);

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resources([
        '/products' => ProductAdminController::class,
        '/companies' => CompanyAdminController::class,
        '/properties' => PropertyAdminController::class,
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
