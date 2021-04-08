<?php

namespace Databyte\ChilexpressApi\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{

    public $incrementing = false;
    protected $keyType = 'string';

    protected $dates = ['created_at', 'updated_at'];
}
