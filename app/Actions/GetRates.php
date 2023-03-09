<?php

namespace App\Actions;

use App\Models\CurrencyRates;

class GetRates
{
  public function handle()
  {
    return CurrencyRates::all();
  }
}
