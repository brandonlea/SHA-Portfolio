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
    $socials = DB::table('socials')->get();

    return view('home',
        [
            'data' => $data,
            'experiences' => $experiance,
            'products' => $products,
            'vouches' => $vouches,
            'socials' => $socials
        ]);
});

Route::get('/hub/settings', [SystemController::class, 'settings'])->middleware(['auth'])->name('hub.settings');

Route::post('/hub/settings', [SystemController::class, 'updateSettings'])->middleware(['auth'])->name('hub.settings.update');

Route::get('/hub/products', [SystemController::class, 'products'])->middleware(['auth'])->name('hub.products');

Route::get('/hub/products/create', [SystemController::class, 'showCreateProduct'])->middleware(['auth'])->name('hub.products.create');

Route::post('/hub/products/create', [SystemController::class, 'createProducts'])->middleware(['auth'])->name('hub.products.store');

Route::get('/hub/products/edit/{id}', [SystemController::class, 'ShowUpdateProduct'])->middleware(['auth'])->name('hub.products.edit');

Route::post('/hub/products/edit/{id}', [SystemController::class, 'updateProduct'])->middleware(['auth'])->name('hub.products.update');

Route::get('/hub/vouches', [SystemController::class, 'vouches'])->middleware(['auth'])->name('hub.vouches');

Route::get('/hub/vouches/create', [SystemController::class, 'createVouches'])->middleware(['auth'])->name('hub.vouches.create');

Route::get('/hub/vouches/edit/{id}', [SystemController::class, 'updateVouchView'])->middleware(['auth'])->name('hub.vouches.edit');

Route::post('/hub/vouches', [SystemController::class, 'createVouches'])->middleware(['auth'])->name('hub.vouches.store');

Route::post('/hub/vouches/edit/{id}', [SystemController::class, 'updateVouches'])->middleware(['auth'])->name('hub.vouches.update');

Route::get('/hub/socials', [SystemController::class, 'socials'])->middleware(['auth'])->name('hub.socials');

Route::get('/hub/socials/create', [SystemController::class, 'createSocialView'])->middleware(['auth'])->name('hub.socials.create');

Route::get('/hub/socials/edit/{id}', [SystemController::class, 'updateSocialView'])->middleware(['auth'])->name('hub.socials.edit');

Route::post('/hub/socials', [SystemController::class, 'createSocial'])->middleware(['auth'])->name('hub.socials.store');

Route::post('/hub/socials/edit/{id}', [SystemController::class, 'updateSocial'])->middleware(['auth'])->name('hub.socials.update');

Route::get('/hub', function () {
    return view('hub.dashboard');
})->middleware(['auth'])->name('hub');

require __DIR__.'/auth.php';
