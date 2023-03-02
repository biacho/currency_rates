<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyRatesController;
use App\Models\CurrencyRates;

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

Route::get('/', [CurrencyRatesController::class, 'show']);
Route::post('/refresh', [CurrencyRatesController::class, 'refresh']);
