<?php

namespace App\Actions;

use App\Models\CurrencyRates;
use Illuminate\Support\Facades\DB;

class GetRates
{
  public function handle()
  {
    $data = DB::table('rates')
            ->join('currencies', 'rates.currency_code', '=', 'currencies.code')
            ->select('rates.*', 'currencies.symbol')
            ->get();
    //dd($data);

    // return CurrencyRates::all();
    return $data;
  }
}
