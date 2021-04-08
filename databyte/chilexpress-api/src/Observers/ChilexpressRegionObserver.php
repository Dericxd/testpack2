<?php

namespace Databyte\ChilexpressApi\Observers;

use Databyte\ChilexpressApi\Models\ChilexpressRegion;
use Uuid;

class ChilexpressRegionObserver
{
    public function creating(ChilexpressRegion $chilexpressRegion)
    {
        $chilexpressRegion->id = $chilexpressRegion->id ?: (string) Uuid::generate(4);
    }

    /**
     * Handle the ChilexpressRegion "created" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressRegion  $chilexpressRegion
     * @return void
     */
    public function created(ChilexpressRegion $chilexpressRegion)
    {
        //
    }

    public function updating(ChilexpressRegion $chilexpressRegion)
    {
        //
    }

    /**
     * Handle the ChilexpressRegion "updated" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressRegion  $chilexpressRegion
     * @return void
     */
    public function updated(ChilexpressRegion $chilexpressRegion)
    {
        //
    }

    public function saving(ChilexpressRegion $chilexpressRegion)
    {

    }

    public function saved(ChilexpressRegion $chilexpressRegion)
    {

    }

    public function deleting(ChilexpressRegion $chilexpressRegion)
    {

    }

    /**
     * Handle the ChilexpressRegion "deleted" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressRegion  $chilexpressRegion
     * @return void
     */
    public function deleted(ChilexpressRegion $chilexpressRegion)
    {
        //
    }

    public function restoring(ChilexpressRegion $chilexpressRegion)
    {

    }

    /**
     * Handle the ChilexpressRegion "restored" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressRegion  $chilexpressRegion
     * @return void
     */
    public function restored(ChilexpressRegion $chilexpressRegion)
    {
        //
    }

    /**
     * Handle the ChilexpressRegion "force deleted" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressRegion  $chilexpressRegion
     * @return void
     */
    public function forceDeleted(ChilexpressRegion $chilexpressRegion)
    {
        //
    }
}
