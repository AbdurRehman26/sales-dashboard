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

        \Log::info($journal);

        $updateData['id'] = $journal['market_id'];
        $updateData['expiry_date'] = \Carbon\Carbon::parse(date_format($journal['contacted_at'],'d-m-Y H:i:s')->toDateTimeString();
        $updateData['is_expiry'] = null;

        app('MarketRepository')->update($updateData);

        //
    }

}