<?php

use App\Http\Controllers\LanguageController;
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

// Route::get('/master', function () {
//     return view('welcome');
// });
// Routing Client
Route::get('/', function () {
    return view('client.dashboard', ['ttl_web' => 'Dashboard Page || PortoSpace', 'title' => 'Dashboard']);
});

Route::get('/portofolio', function () {
    return view('client.portofolio', ['ttl_web' => 'Portofolio Page || PortoSpace', 'title' => 'Portofolio']);
});

// Routing Admin
Route::prefix('aDmIn')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');

    Route::resource('language', LanguageController::class);
});
