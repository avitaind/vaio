<?php

namespace App\Http\Controllers;

use App\Banner;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use LaravelLocalization;
use App\Form;
use App\Services\ASPAPIService;

class HomeController extends Controller
{

    public function index(Request $request) {

        $model_numbers = array_map(function( $item ) {
            return $item['model_number'];
        }, ASPAPIService::getProductModels());

        $news = News::published()->news()->limit(3)->orderBy('start_date', 'desc')->get();

        $offers = News::published()->offers()->limit(3)->orderBy('start_date', 'desc')->get();

        $lifes = News::published()->lifes()->limit(3)->orderBy('start_date', 'desc')->get();

        $banners = Banner::whereType('home')->orderBy('seq')->get();

        return view('homepage', compact('model_numbers', 'news', 'lifes', 'offers', 'banners'));
    }

}
