<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CurrencyRates;

class CurrencyRatesController extends Controller
{
    public function show()
    {
        $rates = CurrencyRates::all();

        $this->refresh();

        return view('index', ['data' => $rates]);
    }

    public function refresh()
    {
        $response = file_get_contents('http://api.nbp.pl/api/exchangerates/tables/a/');
        $responseJSON = json_decode($response);

        foreach($responseJSON[0]->rates as $item)
        {
            CurrencyRates::updateOrCreate(
                [
                    'name' => $item->currency
                ],
                [
                    'currency_code' => $item->code,
                    'exchange_rate' => $item->mid
                ]
            );
        }

        return redirect('/')->with(['data' => CurrencyRates::all()]);
    }
}
