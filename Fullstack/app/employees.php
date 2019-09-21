<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $guarded = [];
    public function companies()
    {
        return $this->belongsTo(companies::class);
    }
}
