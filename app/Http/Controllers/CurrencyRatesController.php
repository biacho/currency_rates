<?php

namespace App\Http\Controllers;

use App\Actions\GetRates;
use App\Actions\UpdateRates;

class CurrencyRatesController extends Controller
{
    private GetRates $rates;
    private UpdateRates $updateRates;

    public function __construct(GetRates $rates, UpdateRates $updateRates)
    {
        $this->rates = $rates;
        $this->updateRates = $updateRates;
    }

    public function show()
    {
        $data = $this->rates->handle();
        // dd($data);
        return view('index', ['data' => $data]);
    }

    public function refresh()
    {
        $data = $this->updateRates->handle();
        return redirect('/')->with(['data' => $data]);
    }
}
