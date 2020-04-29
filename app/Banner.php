<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $fillable = ['type', 'seq', 'url', 'image_path_en', 'image_path_tc', 'image_path_sc'];

    protected $attributes = [
        'seq' => 99,
    ];

    public function getBannerURLAttribute( $force_locale = null ) {

        if ( !$force_locale ) {
            $locale = app()->getLocale();
        } else {
            $locale = $force_locale;
        }

        $path = $this->{'image_path_'.$locale};

        if ( !$force_locale ) {
             $path = $path ?: $this->image_path_en;
        }

        if ( $path ) {
            return \Storage::drive('public')->url( $path );
        }

        return null;
    }


    public function getMobileBannerURLAttribute( $force_locale = null ) {

        if ( !$force_locale ) {
            $locale = app()->getLocale();
        } else {
            $locale = $force_locale;
        }

        $path = $this->{'mobile_path_'.$locale};

        if ( !$force_locale ) {
            $path = $path ?: $this->mobile_image_path_en;
        }

        if ( $path ) {
            return \Storage::drive('public')->url( $path );
        }

        return null;
    }

}
