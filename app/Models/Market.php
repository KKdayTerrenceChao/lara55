<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    // allow fillable fields
    protected $fillable = ['name', 'city', 'website'];
}
