<?php

use App\Http\Controllers\SystemController;
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

    $data = DB::table('settings')->find(1);
    $experiance = DB::table('experiences')->get();
    $products = DB::table('portfolios')->get();
    $vouches = DB::table('vouches')->get();

    return view('home',
        [
            'data' => $data,
            'experiences' => $experiance,
            'products' => $products,
            'vouches' => $vouches
        ]);
});

Route::get('/hub/settings', [SystemController::class, 'settings'])->middleware(['auth'])->name('hub.settings');

Route::post('/hub/settings', [SystemController::class, 'updateSettings'])->middleware(['auth'])->name('hub.settings.update');

Route::get('/hub/products', [SystemController::class, 'products'])->middleware(['auth'])->name('hub.products');

Route::post('/hub/products', [SystemController::class, 'createProducts'])->middleware(['auth'])->name('hub.products.store');

Route::get('/hub/vouches', [SystemController::class, 'vouches'])->middleware(['auth'])->name('hub.vouches');

Route::post('/hub/vouches', [SystemController::class, 'createVouches'])->middleware(['auth'])->name('hub.vouches.store');

Route::get('/hub', function () {
    return view('dashboard');
})->middleware(['auth'])->name('hub');

require __DIR__.'/auth.php';
