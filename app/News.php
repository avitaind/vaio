<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Laracasts\Presenter\PresentableTrait;
use Laracasts\Presenter\Presenter;

class News extends Model
{
    use Translatable;
    use PresentableTrait;

    protected $presenter = 'App\NewsPresenter';


    public $fillable = [
        'start_date', 'end_date', 'category_id', 'type',
        'title:tc', 'title:en',
        'tagline:tc', 'tagline:en',
        'content:tc', 'content:en',
    ];

    public $translatedAttributes = ['title', 'content', 'introduction', 'tagline'];

    protected $dates = ['start_date', 'end_date'];

    public static function getNewsStatistic( $is_feature = false ){

        $months = self::published()->featured($is_feature)
            ->select(\DB::raw('DATE_FORMAT(start_date, "%Y-%m" ) as `month`, count(*) as count'))
            ->groupBy('month')
            ->orderBy('month', 'desc')
            ->get();

        $months = $months->mapWithKeys(function( $item ){
            $key = str_replace('-', '', $item['month']);
            return [$key => $item['month']];
        })->toArray();

        return $months;

    }

    public function category( ){
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }

    public function scopePublished( $query ) {
        return $query->where('is_publish', 1);
    }

    public function scopeNews( $query ) {
        return $query->where('type', 'news');
    }

    public function scopeLifes( $query ) {
        return $query->where('type', 'life');
    }

    public function scopeOffers( $query ) {
        return $query->where('type', 'offer');
    }


    public function eventDateString(){

        $start_date_string = $this->start_date->format('Y-m-d');

        if ( $this->end_date ) {

            if( $this->start_date->year != $this->end_date->year ) {
                $end_date_string = $this->end_date->format('Y-m-d');
            }else if($this->start_date->month != $this->end_date->month){
                $end_date_string = $this->end_date->format('m-d');
            }else{
                $end_date_string = $this->end_date->format('d');
            }

            return $start_date_string .' - '. $end_date_string;

        } else {
            return $start_date_string ;
        }
    }

    public function startDateString() {
        return ($this->start_date) ? $this->start_date->format("Y-m-d") : null;
    }

    public function endDateString() {
        return ($this->end_date) ? $this->end_date->format("Y-m-d") : null;
    }

    public function typeString() {

        switch ( $this->type ) {

            case "news": return "News";

            case "life": {

                $category = $this->category;

                if ( !$category ) {
                    return "VAIO Life > Unknown";
                } else {
                    return "VAIO Life > ". $category->name ;
                }

            }

            case "offer": return "Offer";
        }

        return "";

    }

//    public function image_url() {
//
//        if ( $this->image_path ) {
//            return \Storage::drive('public')->url( $this->image_path );
//        }
//
//        return null;
//
//    }

    public function thumbnail_url() {

        if ( $this->thumbnail_path ) {
            return \Storage::drive('public')->url( $this->thumbnail_path );
        }

        return null;
    }

}

class NewsTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['title', 'content', 'introduction', 'tagline'];

}

class NewsPresenter extends Presenter {

    public function excerpt( $length = 60 )
    {
        if (app()->isLocale('en')) {
            return news_get_excerpt($this->entity->content, $length / 2 );
        } else {
            return mb_get_excerpt( $this->entity->content, $length);
        }
    }


}