<?php

namespace Databyte\ChilexpressApi\Facades;

use Databyte\ChilexpressApi\Models\ChilexpressApiSetting;
use Illuminate\Support\Facades\Facade;

class ChilexpressApiSettings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ChilexpressApiSetting::class;
    }
}
