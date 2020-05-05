<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Dimsav\Translatable\Translatable;

class ServiceCenter extends Model
{
    use Translatable;

    protected $fillable = ['latitude', 'longitude',  'country',
        'name:tc', 'address:tc', 'opening_hour:tc', 'phone:tc', 'fax:tc', 'email:tc',
        'name:en', 'address:en', 'opening_hour:en', 'phone:en', 'fax:en', 'email:en', 'seq'];

    public $translatedAttributes = ['name', 'address', 'opening_hour', 'phone', 'fax', 'email'];

    protected $attributes = [
        'seq' => 999,
    ];

}

class ServiceCenterTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'address', 'opening_hour', 'phone', 'fax', 'email'];

    protected $attributes = [
        'fax' => '',
    ];

}