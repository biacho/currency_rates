<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyRates extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'rates';
    protected $fillable = ['name', 'currency_code', 'exchange_rate', 'dif', 'change'];
}
