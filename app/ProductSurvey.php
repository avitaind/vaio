<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
use Laracasts\Presenter\Presenter;

class ProductSurvey extends Model
{
    //
    use PresentableTrait;

    protected $fillable = ['version', 'completed_at', 'user_id', 'product_model', 'serial_number', 'data', 'birthday', 'age_group', 'gender'];

    protected $presenter = \App\ProductSurveyPresenter::class;

    protected $casts = [
        'data' => 'json'
    ];

    protected $dates = ['completed_at', 'birthday'];

    public function user() {
        return $this->belongsTo(User::class);
    }



}

class ProductSurveyPresenter extends Presenter {

    public function email( ) {

        if ($user = $this->entity->user ){
            return $user->email;
        } else {
            return null;
        }

    }


    public function birthday( ) {
        if ( $this->entity->birthday ) {
            return $this->entity->birthday->format("Y-m-d");
        } else {
            return null;
        }
    }

    public function gender() {

        if ( $this->entity->gender == "m" ) {
            return "Male";
        } else if ( $this->entity->gender == "f" ) {
            return "Female";
        }

    }

    public function q1_answer( ) {

        $answer = array_get($this->data, 'q1');

        $translated = __("member.q1_".$answer, [], "en");

        return $translated;
    }

    public function q2_answer( ) {

        return array_get($this->data, 'q2');

    }

    public function q3_answer( ) {

        return ucfirst( array_get($this->data, 'q3') );

    }


}

