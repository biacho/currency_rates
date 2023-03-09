<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CurrencyRates;
use Illuminate\Database\Seeder;
use Database\Seeders\CurrenciesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CurrenciesSeeder::class,
        ]);
    }
}
