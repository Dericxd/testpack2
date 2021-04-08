<?php

namespace Databyte\ChilexpressApi\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ChilexpressApiSetting extends BaseModel
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'slug', 'value'];

    public function getValueAttribute($value)
    {
        return json_decode($value);
    }

    public function setValueAttribute($value)
    {
        $this->attributes["value"] = json_encode($value);
    }

    public function setSlugAttribute($slug)
    {
        $this->attributes["slug"] = strtolower($slug);
    }
}
