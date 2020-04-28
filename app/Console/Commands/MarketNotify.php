<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Data\Models\Market;
use Carbon\Carbon;

class MarketNotify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'market:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $markets = Market::whereDate('expiry_date', Carbon::now()->toDateString())->whereNull('is_expiry')->get();

        foreach ($markets as $key => $market) {
            $updateData['id'] = $market['id'];
            $updateData['is_expiry'] = true;
            $updateData['num_of_times_expired'] = $market['num_of_times_expired'] ? $market['num_of_times_expired']+1 : 1;

            app('MarketRepository')->update($updateData);
        }


        // dd(Carbon::now()->subDays(6)->toDateString());
        $markets = Market::whereDate('expiry_date', Carbon::now()->subDays(6)->toDateString())->whereNotNull('is_expiry')->get();

        foreach ($markets as $key => $market) {

            $dataObject = new \StdClass();
            $dataObject->heading = "Heading"; 
            $dataObject->content = "content"; 
            $dataObject->msg = "msg"; 


            app('MarketRepository')->sendFcm($dataObject);

        }


    }
}
