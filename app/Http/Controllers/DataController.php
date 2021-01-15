<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Shop;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function getShops(Request $request) {

        $shops = Shop::whereEnabled(true)->orderBy('seq', 'asc')->get();

        $shop_json = [ ];

        foreach ($shops as $shop) {
            $shop_json[] = [
                'name'    => $shop->name,
                'address' => $shop->address,
                'phone'   => $shop->phone,
                'lat'     => $shop->latitude,
                'long'    => $shop->longitude,
            ];
        }

        return ["shops" => $shop_json];

    }

    public function getFAQs(Request $request)
    {

        $type = $request->get('type', 'general','consumer');


        $faqs = FAQ::whereCategory($type)->orderBy('question_no')->get()->map(function($faq) {
            return [
                'question_no' => $faq->question_no,
                'question' => $faq->question,
                'solution' => $faq->answer,
            ];
        })->toArray();

        return response()->json($faqs);

    }




}
