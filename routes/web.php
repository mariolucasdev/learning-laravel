<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\privateController;
use App\Http\Controllers\SiteController;
use App\Models\Client;
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

Route::get('/', [SiteController::class, 'index']);
Route::get('/sobre', [SiteController::class, 'about']);
Route::get('/servicos', [SiteController::class, 'services']);
Route::get('/servico/{id?}', [SiteController::class, 'service']);
Route::get('/privacidade', privateController::class);

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');

Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
