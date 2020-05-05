<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use Translatable;

    protected $fillable = [
        'question:tc', 'answer:tc',
        'question:en', 'answer:en', 'category', 'question_no'
    ];

    public $translatedAttributes = ['question', 'answer'];

    protected $table = 'faqs';
    protected $translationForeignKey = "faq_id";

//    public function products() {
//        return $this->belongsToMany(Product::class);
//    }

    public function categoryName( ) {

        // $this->category

        $info = array_get( config('data.faq_categories'), $this->category );

        if ( $info ) {
            return $info['title_en'];
        }

        return "Unknown";

    }
}

class FAQTranslation extends Model {

    protected $table = 'faq_translations';
    public $timestamps = false;
    protected $fillable = ['question', 'answer'];

}
