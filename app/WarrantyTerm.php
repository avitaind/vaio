<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class WarrantyTerm extends Model
{
    use Translatable;

    public $fillable = [ 'terms:tc', 'terms:en', 'code', 'name'];

    public $translatedAttributes = ['terms'];
}

class WarrantyTermTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['terms'];

}