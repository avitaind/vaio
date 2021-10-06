<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewWhereToBuy extends Model
{
    public $timestamps = false;
    protected $fillable = ['address', 'name', 'phone', 'email', 'city', 'state', 'pin'];
}
