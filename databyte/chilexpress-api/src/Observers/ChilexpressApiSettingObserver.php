<?php

namespace Databyte\ChilexpressApi\Observers;

use Databyte\ChilexpressApi\Models\ChilexpressApiSetting;
use Uuid;

class ChilexpressApiSettingObserver
{
    public function creating(ChilexpressApiSetting $chilexpressApiSetting)
    {
        $chilexpressApiSetting->id = $chilexpressApiSetting->id ?: (string) Uuid::generate(4);
        $chilexpressApiSetting->name = $chilexpressApiSetting->name ?: $chilexpressApiSetting->slug;
    }

    /**
     * Handle the chilexpress api setting "created" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressApiSetting  $chilexpressApiSetting
     * @return void
     */
    public function created(ChilexpressApiSetting $chilexpressApiSetting)
    {
        //
    }

    public function updating(ChilexpressApiSetting $chilexpressApiSetting)
    {
        //
    }

    /**
     * Handle the chilexpress api setting "updated" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressApiSetting  $chilexpressApiSetting
     * @return void
     */
    public function updated(ChilexpressApiSetting $chilexpressApiSetting)
    {
        //
    }

    public function saving(ChilexpressApiSetting $chilexpressApiSetting)
    {
        //
    }

    public function saved(ChilexpressApiSetting $chilexpressApiSetting)
    {
        //
    }

    public function deleting(ChilexpressApiSetting $chilexpressApiSetting)
    {
        //
    }

    /**
     * Handle the chilexpress api setting "deleted" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressApiSetting  $chilexpressApiSetting
     * @return void
     */
    public function deleted(ChilexpressApiSetting $chilexpressApiSetting)
    {
        //
    }

    public function restoring(ChilexpressApiSetting $chilexpressApiSetting)
    {
        //
    }

    /**
     * Handle the chilexpress api setting "restored" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressApiSetting  $chilexpressApiSetting
     * @return void
     */
    public function restored(ChilexpressApiSetting $chilexpressApiSetting)
    {
        //
    }

    /**
     * Handle the chilexpress api setting "force deleted" event.
     *
     * @param  \Databyte\ChilexpressApi\Models\ChilexpressApiSetting  $chilexpressApiSetting
     * @return void
     */
    public function forceDeleted(ChilexpressApiSetting $chilexpressApiSetting)
    {
        //
    }
}
