<?php 

namespace App\Actions;

use App\Models\CurrencyRates;

class UpdateRates
{
  public function handle()
  {
    $response = file_get_contents('http://api.nbp.pl/api/exchangerates/tables/a/');
    $response = json_decode($response);

    foreach($response[0]->rates as $item)
    {            
        $currencies = CurrencyRates::updateOrCreate(
            [
                'name' => $item->currency
            ],
            [
                'currency_code' => $item->code ,
                'exchange_rate' => $item->mid,
            ]
        );
    }

    $data = CurrencyRates::all();
    return $data;
  }
}
