<?php

namespace Database\Seeders;

use App\Models\CurrencyRates;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('currencies')->insert([
            ['name' => 'bat (Tajlandia)', 'code' => 'THB', 'symbol' => '฿'],
            ['name' => 'dolar amerykański', 'code' => 'USD', 'symbol' => '$'],
            ['name' => 'dolar australijski', 'code' => 'AUD', 'symbol' => '$'],
            ['name' => 'dolar Hongkongu', 'code' => 'HKD', 'symbol' => '$'],
            ['name' => 'dolar kanadyjski', 'code' => 'CAD', 'symbol' => '$'],
            ['name' => 'dolar nowozelandzki', 'code' => 'NZD', 'symbol' => '$'],
            ['name' => 'dolar singapurski', 'code' => 'SGD', 'symbol' => '$'],
            ['name' => 'euro', 'code' => 'EUR', 'symbol' => '€'],
            ['name' => 'forint (Węgry)', 'code' => 'HUF', 'symbol' => 'Ft'],
            ['name' => 'frank szwajcarski', 'code' => 'CHF', 'symbol' => 'CHF'],
            ['name' => 'funt szterling', 'code' => 'GBP', 'symbol' => '£'],
            ['name' => 'hrywna (Ukraina)', 'code' => 'UAH', 'symbol' => '₴'],
            ['name' => 'jen (Japonia)', 'code' => 'JPY', 'symbol' => '¥'],
            ['name' => 'korona czeska', 'code' => 'CZK', 'symbol' => 'Kč'],
            ['name' => 'korona duńska', 'code' => 'DKK', 'symbol' => 'kr'],
            ['name' => 'korona islandzka', 'code' => 'ISK', 'symbol' => 'kr'],
            ['name' => 'korona norweska', 'code' => 'NOK', 'symbol' => 'kr'],
            ['name' => 'korona szwedzka', 'code' => 'SEK', 'symbol' => 'kr'],
            ['name' => 'lej rumuński', 'code' => 'RON', 'symbol' => 'lei'],
            ['name' => 'lew (Bułgaria)', 'code' => 'BGN', 'symbol' => 'лв'],
            ['name' => 'lira turecka', 'code' => 'TRY', 'symbol' => '₺'],
            ['name' => 'nowy izraelski szekel', 'code' => 'ILS', 'symbol' => '₪'],
            ['name' => 'peso chilijskie', 'code' => 'CLP', 'symbol' => '$'],
            ['name' => 'peso filipińskie', 'code' => 'PHP', 'symbol' => '₱'],
            ['name' => 'peso meksykańskie', 'code' => 'MXN', 'symbol' => '$'],
            ['name' => 'rand (Republika Południowej Afryki)', 'code' => 'ZAR', 'symbol' => 'R'],
            ['name' => 'real (Brazylia)', 'code' => 'BRL', 'symbol' => 'R$'],
            ['name' => 'SDR (MFW)', 'code' => 'XDR', 'symbol' => '']
        ]);
    }
}
