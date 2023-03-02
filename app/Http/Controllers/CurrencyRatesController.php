<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CurrencyRates;

class CurrencyRatesController extends Controller
{
    public function show()
    {
        
        return view('index');
    }
}
