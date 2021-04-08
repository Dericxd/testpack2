<?php

namespace Databyte\ChilexpressApi\Observers;

use Databyte\ChilexpressApi\Models\ChilexpressCounty;
use Uuid;

class ChilexpressCountyObserver
{
    public function creating(ChilexpressCounty $chilexpressCounty)
    {
        $chilexpressCounty->id = $chilexpressCounty->id ?: (string) Uuid::generate(4);
    }

    /**
     * Handle the ChilexpressCounty "created" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressCounty  $chilexpressCounty
     * @return void
     */
    public function created(ChilexpressCounty $chilexpressCounty)
    {
        //
    }

    public function updating(ChilexpressCounty $chilexpressCounty)
    {
        //
    }

    /**
     * Handle the ChilexpressCounty "updated" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressCounty  $chilexpressCounty
     * @return void
     */
    public function updated(ChilexpressCounty $chilexpressCounty)
    {
        //
    }

    public function saving(ChilexpressCounty $chilexpressCounty)
    {

    }

    public function saved(ChilexpressCounty $chilexpressCounty)
    {

    }

    public function deleting(ChilexpressCounty $chilexpressCounty)
    {

    }

    /**
     * Handle the ChilexpressCounty "deleted" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressCounty  $chilexpressCounty
     * @return void
     */
    public function deleted(ChilexpressCounty $chilexpressCounty)
    {
        //
    }

    public function restoring(ChilexpressCounty $chilexpressCounty)
    {

    }

    /**
     * Handle the ChilexpressCounty "restored" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressCounty  $chilexpressCounty
     * @return void
     */
    public function restored(ChilexpressCounty $chilexpressCounty)
    {
        //
    }

    /**
     * Handle the ChilexpressCounty "force deleted" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressCounty  $chilexpressCounty
     * @return void
     */
    public function forceDeleted(ChilexpressCounty $chilexpressCounty)
    {
        //
    }
}
