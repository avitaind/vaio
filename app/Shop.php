<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use Translatable;
    //
    protected $fillable = ['phone', 'latitude', 'longitude',
        'name:tc', 'address:tc', 'name:en', 'address:en', 'seq'
    ];

    public $translatedAttributes = ['name', 'address'];

    protected $attributes = [
        'seq' => 999
    ];

}

class ShopTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'address'];
}
