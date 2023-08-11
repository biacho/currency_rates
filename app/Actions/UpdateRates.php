<?php 

namespace App\Actions;

use App\Models\CurrencyRates;

class UpdateRates
{
  public function handle()
  {
    $response = file_get_contents('http://api.nbp.pl/api/exchangerates/tables/a/last/2');
    $response = json_decode($response);
    // return $response;
    $data = [];

    foreach($response[0]->rates as $idx=>$item)
    {            
        $upOrDownRate = 0; // same
        $dif = $item->mid - $response[1]->rates[$idx]->mid;

        if($item->mid > $response[1]->rates[$idx]->mid)
        {
          $upOrDownRate = 1; //up
        }
        else if ($item->mid < $response[1]->rates[$idx]->mid)
        {
          $upOrDownRate = 2; // down
        }

        array_push($data, CurrencyRates::updateOrCreate(
            [
                'name' => $item->currency
            ],
            [
                'currency_code' => $item->code ,
                'exchange_rate' => $item->mid,
                'dif' => $dif,
                'change' => $upOrDownRate,
            ]
        ));
    }

    return $data;
  }
}
