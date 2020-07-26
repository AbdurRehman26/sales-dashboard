<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Data\Models\Market;
use Carbon\Carbon;

class DeleteMarket extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'market:delete';

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

        echo Carbon::today()->toDateString();
        Market::onlyTrashed()->whereDate('deleted_at', '>=', Carbon::today()->toDateString())->forceDelete();

    }
}
