<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    //
    protected $fillable = ['name_tc', 'name_en', 'type', 'parent_id'];


    public function news( ) {
        return $this->hasMany(News::class);
    }

    public function parentCategory( ) {
        return $this->belongsTo(NewsCategory::class, 'parent_id');
    }

    public function getNameAttribute(){

        if ( \App::isLocale('tc') ) {
            return $this->name_tc;
        } else {
            return $this->name_en;
        }



    }

}
