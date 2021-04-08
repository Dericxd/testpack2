<?php

namespace Databyte\ChilexpressApi\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ChilexpressRegion extends BaseModel
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'regionId', 'regionName', 'ineRegionCode',
    ];
}
