<?php

namespace App\Http\Controllers;

use App\Campaign83;
use App\RepairTerm;
use App\Shop;
use App\WarrantyTerm;
use Illuminate\Http\Request;
use App\Services\ASPAPIService;


class PageController extends Controller
{

    ///
    ///  To Handle static pages
    ///

    public function getQuality( ) {
        return view('quality.index');
    }

    public function getQualityAzuminoFinish( ) {
        return view('quality.azumino_finish');
    }

    public function getAboutUs( ) {
        return view('aboutus');
    }

    public function getContactUs( ) {
        return view('contactus');
    }

    public function campaign83( ) {
        return view('campaign');
    }

    public function campaign83_store(Request $request) {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:campaign83',
            'phone' => 'required|min:10',
            'flexRadioDefault1' => 'required',
            'flexRadioDefault2' => 'required',
            'flexRadioDefault3' => 'required',

        ]);

        $campaign83 = new Campaign83($request->all());
        $campaign83->save();


        return redirect()->back()->with('message', 'Thanks for your entry.');

    }



    public function getSupport( ) {

        $warranty = WarrantyTerm::whereCode('warranty')->first();

        if (!$warranty ) {

            $warranty = new WarrantyTerm();
            $warranty->terms = "Missing Terms Information (warranty)";
        }


        $model_numbers = array_map(function( $item ) {
            return $item['model_number'];
        }, ASPAPIService::getProductModels());

        return view('support', compact('model_numbers', 'warranty'));
    }

    public function getWhereToBuy( ) {
        return view('where_to_buy');

		//return redirect('https://vaio-sg.nexstmall.com/');

    }

    public function getRepairTnc( ) {

        $term = WarrantyTerm::whereCode('repair_tnc')->first();

        if (!$term ) {

            $term = new WarrantyTerm();
            $term->terms = "Missing Terms Information (repair_tnc)";
        }


        return view('pages.repair_tnc_en', compact('term'));

    }

    public function getPrivacy( ) {
        return view('pages.privacy');
    }

    public function getSupportRegions(){

        return view('pages.support_regions');

    }

    public function product_Range(){

        return view('pages.product_range');
    }
}
