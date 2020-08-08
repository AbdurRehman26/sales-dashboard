<?php

namespace App\Observers;

use App\Data\Models\Journal;
use App\Data\Models\Market;

class JournalObserver
{
    /**
     * Listen to the Journal created event.
     *
     * @param  \App\Journal  $Journal
     * @return void
     */
    public function created(Journal $journal)
    {
        \Log::info("Journal");
        \Log::info(json_encode($journal));

        $updateData['id'] = $journal['market_id'];
        $updateData['expiry_date'] = \Carbon\Carbon::parse($journal['contacted_at'])->toDateTimeString();
        $updateData['is_expiry'] = null;

        app('MarketRepository')->update($updateData);

        //
    }

}