<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

//this is commit
class Campaign83 extends Model
{

    public $table = 'campaign83';
    //
    protected $fillable = [
        'name', 'email', 'phone', 'flexRadioDefault1', 'flexRadioDefault2', 'flexRadioDefault3',
        'flexRadioDefault4', 'flexRadioDefault5',
    ];
}
