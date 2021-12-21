<?php

namespace App\Http\Controllers;
use App\Banner;
use App\Subscription;
use App\Launch;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
use Illuminate\Support\Facades\Validator;
use App\Form;
use App\Services\ASPAPIService;
use App\Mailers\AppMailer;
use Illuminate\Support\Facades\Auth;


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

    public function handleSubscription(Request $request, AppMailer $mailer) {

        $this->validate($request, [
             'email'     => 'required',
            ]);

        $subscription = new Subscription([
           'email'     => $request->input('email'),
         ]);


        $subscription->save();
      //  $mailer->sendSubscriberInformation(Auth::user(), $subscription);
      //  return redirect()->back()->with("status", "Thanks for Subscribing, We will connect you shortly.");
        return redirect()->back()->with('alert', 'Thanks for Subscribing.');

    }

    public function showEvent(){

        return view('launch');
    }

    public function launchEvent(Request $request){

        $this->validate($request, [
            'name'      => 'required|',
            'email'     => 'required|string|email|max:255|unique:vaio_user_db.launches',
           ]);

        $launch = new Launch([
            'name'     => $request->input('name'),
            'email'     => $request->input('email'),
          ]);

         $launch->save();
         return redirect()->back()->with("status", "Thanks for Subscribing, You will get launch event link shortly.");



    }



}
