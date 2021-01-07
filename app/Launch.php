<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Laracasts\Presenter\PresentableTrait;
use Laracasts\Presenter\Presenter;


class Launch extends Model
{
    use PresentableTrait;

   // protected $presenter = 'App\NewsPresenter';
    //
  
    protected $fillable = [
        'name','email'
    ];

}
