<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Market;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;

class MarketDataImport implements ToModel, WithStartRow, WithHeadingRow, WithEvents
{
	  /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {

    	$marketType = \App\MarketTypes::where('name', $row["market_type"])->first();
        
        return new Market([
				"market_name" => $row["market_name"], 
				"market_type" => $marketType['id'] ?? 1, 
				"market_owner" => $row["market_owner"], 
				"owner_email" => $row["owner_email"], 
				"owner_phone" => $row["owner_phone"], 
				"owner_address" => $row["owner_address"], 
				"notes" => $row["notes"], 
				"other" => $row["other"], 
				"color" => $row["color"],
				"created_at" => \Carbon\Carbon::now()->toDateString(),
                "updated_at" => null
        ]);
    }

     /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            // Handle by a closure.
            BeforeImport::class => function(BeforeImport $event) {

                \App\Market::whereNull('user_id')->delete();

            },
        ];
    }

    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
}
