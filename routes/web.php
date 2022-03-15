<?php

use App\Http\Controllers\Factura\FacturaController;
use App\Http\Controllers\Home\HomeController;
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

// Route::get('/dashboard', [HomeController::class, 'home'])->name('home');

Route::get('/factura', [FacturaController::class, 'factura'])->name('factura');
Route::post('/factura/enviar', [FacturaController::class, 'enviar'])->name('factura.enviar');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',  [HomeController::class, 'home'])->name('dashboard');
