<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use \App\Models\CurrencyRates;


class CollectRates implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $response = file_get_contents('http://api.nbp.pl/api/exchangerates/tables/a/');
        $response = json_decode($response);
    
        $data = [];
    
        foreach($response[0]->rates as $item)
        {            
            array_push($data, CurrencyRates::updateOrCreate(
                [
                    'name' => $item->currency
                ],
                [
                    'currency_code' => $item->code ,
                    'exchange_rate' => $item->mid,
                ]
            ));
        }
    
        return $data;
    }
}
