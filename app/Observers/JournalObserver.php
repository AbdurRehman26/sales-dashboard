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

        $updateData['id'] = $journal['market_id'];
        $updateData['expiry_date'] = \Carbon\Carbon::now()->addDays(7)->toDateTimeString();
        $updateData['is_expiry'] = null;

        app('MarketRepository')->update($updateData);

        //
    }

}