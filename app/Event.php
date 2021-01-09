<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Laracasts\Presenter\PresentableTrait;
use Laracasts\Presenter\Presenter;

class Event extends Model
{
    use PresentableTrait;

   // protected $presenter = 'App\NewsPresenter';
    //
  
    protected $fillable = [
        'name','email','phone'
    ];
}
