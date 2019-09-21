<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $guarded = [];


    public function employees()
    {
        return $this->hasMany(employees::class);
    }
}
