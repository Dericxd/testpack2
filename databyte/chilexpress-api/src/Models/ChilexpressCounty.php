<?php

namespace Databyte\ChilexpressApi\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ChilexpressCounty extends BaseModel
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'countyCode', 'countyName', 'regionCode', 'ineCountyCode', 'queryMode', 'coverageName',
    ];

    public function region()
    {
        return $this->belongsTo(ChilexpressRegion::class, 'regionCode', 'regionId');
    }
}
